<?php
    session_start();
    require_once('../../model/mmModel/studentDetModel.php');
    require_once('../../model/mmModel/viewMahapolaModel.php');
    require_once('../../config/database.php');

?>

<?php

        if(isset($_POST['view-mahapola-report'])){

            $batch_numbers = studentDetModel::getBatchNumbers($connect);
            $degrees = studentDetModel::getDegrees($connect);

            $_SESSION['batch_number'] = '';
            $_SESSION['degree'] = '';

            if(mysqli_num_rows($batch_numbers)>0 && mysqli_num_rows($degrees)>0){
                while ($batch_no = mysqli_fetch_array($batch_numbers)) {
                    $_SESSION['batch_number'] .= "<option value='".$batch_no['batch_number']."'>".$batch_no['batch_number']."</option>";
                    
                }

                
                while ($degree = mysqli_fetch_array($degrees)) {
                    $_SESSION['degree'] .= "<option value='".$degree['degree_id']."'>".$degree['degree_abbriviation']." - ".$degree['degree_name']."</option>";
                        
                }
            
                header('Location:../../view/mahapolaSchemeMaintainer/mmViewReportsMahapolaSchemeV.php');                
                
            }
            else{
                header('Location:../../view/mahapolaSchemeMaintainer/mmNoRecordsV.php');
            }

        }

        elseif(isset($_POST['display-report'])){

            $report_type = mysqli_escape_string($connect,$_POST['report_type']);
            $year = mysqli_real_escape_string($connect, $_POST['year']);
            $month = mysqli_real_escape_string($connect, $_POST['month']);
            $batch_no = mysqli_real_escape_string($connect, $_POST['batch_no']);
            $degree = mysqli_real_escape_string($connect, $_POST['degree']);

            $date = $year.'-'.$month.'-'.'01';

            $semester = viewMahapolaModel::getSemDigit($date, $connect);
            $semester_digit = mysqli_fetch_assoc($semester);
            $sem_digit = $semester_digit['semesterDigit'];

            $students = viewMahapolaModel::getMahapolaStudents($batch_no, $degree,$sem_digit, $connect);

            if(mysqli_num_rows($students) > 0){
                
                $eligible_stu_list = [];
                $non_eligible_stu_list = [];

                while($stu = mysqli_fetch_assoc($students)){

                    $stu['std_id'];
                    $stu['semester'];

                    $academic_year = viewMahapolaModel::getAcademicYear($stu['std_id'],$connect);
                    $aca_year = mysqli_fetch_array($academic_year);
                    $a_year = $aca_year[0];

                    $stu_reserved_subjects = viewMahapolaModel::getStuSemSubjects($degree,$a_year,$sem_digit,$stu['semester'],$connect);
                    $stu_non_mand_sub = viewMahapolaModel::getStuNonMandSub($degree,$stu['std_id'],$a_year,$sem_digit,$connect);
                    
                    $sub_count = 0;
                    $non_sub_count = 0;
                    $total_stu_sub_percent = 0;
                    $total_stu_non_sub_percent = 0;

                    if($stu_reserved_subjects){
                        
                        while($subject = mysqli_fetch_assoc($stu_reserved_subjects)){
                            $subject['subject_id'];
                            
                            $sub_session_details = viewMahapolaModel::getSubjectSessionInMonth($degree,$year,$month,$subject['subject_id'],$connect);
                            $session_detail = mysqli_fetch_array($sub_session_details);
                            $num_of_session = $session_detail[0];
                           
                            $attendance_count = viewMahapolaModel::getStuSubjectAttendance($stu['std_id'],$degree,$subject['subject_id'],$year,$month,$connect);
                            $attend_count = mysqli_fetch_array($attendance_count);
                            $stu_sub_attendance = $attend_count[0];

                            if($num_of_session > 0){
                                $stu_sub_attend_percentage = ($stu_sub_attendance/$num_of_session)*100;
                                $total_stu_sub_percent = $total_stu_sub_percent + $stu_sub_attend_percentage;
                                $sub_count = $sub_count + 1;
                            }
                             
                        }
                        
                    }

                    if($stu_non_mand_sub){
                        while($subject = mysqli_fetch_assoc($stu_non_mand_sub)){
                            $subject['subject_id'];
                            
                            $sub_session_details = viewMahapolaModel::getSubjectSessionInMonth($degree,$year,$month,$subject['subject_id'],$connect);
                            $session_detail = mysqli_fetch_array($sub_session_details);
                            $num_of_session = $session_detail[0];
                           
                            $attendance_count = viewMahapolaModel::getStuSubjectAttendance($stu['std_id'],$degree,$subject['subject_id'],$year,$month,$connect);
                            $attend_count = mysqli_fetch_array($attendance_count);
                            $stu_sub_attendance = $attend_count[0];

                            if($num_of_session > 0){
                                $stu_non_mand_attend_percentage = ($stu_sub_attendance/$num_of_session)*100;
                                $total_stu_non_sub_percent = $total_stu_non_sub_percent + $stu_non_mand_attend_percentage;
                                $non_sub_count = $sub_count + 1;
                            }
                             
                        }
                    }

                    // else{
                    //     header('Location:../../view/mahapolaSchemeMaintainer/mmNoRecordsV.php');
                    // }

                    $final_percentage = ($total_stu_sub_percent + $total_stu_non_sub_percent)/($sub_count + $non_sub_count);

                        if($final_percentage >= 50){
                            $eligible_stu_list[] = $stu['std_id'];
                           
                        }
                        else{
                            $non_eligible_stu_list[] = $stu['std_id'];
                                
                        }

                }

                if($report_type == 'monthlyEligibiltyList'){
                    $_SESSION['eligible_stu'] = '';
                    //$i = 0;
                    for($i =0; $i<count($eligible_stu_list) ; $i++){

                        $student_det = viewMahapolaModel::getStudentDetails($eligible_stu_list[$i],$connect);
                        $stu_det = mysqli_fetch_assoc($student_det);

                        $_SESSION['eligible_stu'] .= "<tr>";
                        $_SESSION['eligible_stu'] .= "<td>{$stu_det['index_no']}</td>";
                        $_SESSION['eligible_stu'] .= "<td>{$stu_det['registration_no']}</td>";
                        $_SESSION['eligible_stu'] .= "<td>{$stu_det['initials']}.{$stu_det['last_name']}</td>";
                        $_SESSION['eligible_stu'] .= "</tr>";

                       
                        header('Location:../../view/mahapolaSchemeMaintainer/mmEligibilityListV.php');


                    }

                }

                if($report_type == 'monthlyInEligibiltyList'){
                    $_SESSION['non_eligible_stu'] = '';

                    for($i =0; $i<count($non_eligible_stu_list) ; $i++){
                        $student_det = viewMahapolaModel::getStudentDetails($non_eligible_stu_list[$i],$connect);
                        $stu_det = mysqli_fetch_assoc($student_det);

                        $_SESSION['non_eligible_stu'] .= "<tr>";
                        $_SESSION['non_eligible_stu'] .= "<td>{$stu_det['index_no']}</td>";
                        $_SESSION['non_eligible_stu'] .= "<td>{$stu_det['registration_no']}</td>";
                        $_SESSION['non_eligible_stu'] .= "<td>{$stu_det['initials']}.{$stu_det['last_name']}</td>";
                        $_SESSION['non_eligible_stu'] .= "</tr>";

                        header('Location:../../view/mahapolaSchemeMaintainer/mmInEligibilityListV.php');

                    }
                }
                
            }
            else{
                header('Location:../../view/mahapolaSchemeMaintainer/mmNoRecordsV.php');
            }
            
            
        }
?>

            
                