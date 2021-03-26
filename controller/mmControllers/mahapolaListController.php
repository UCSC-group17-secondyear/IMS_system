<?php
    session_start();
    require_once('../../model/mmModel/studentDetModel.php');
    require_once('../../model/mmModel/viewMahapolaModel.php');
    require_once('../../config/database.php');

?>

<?php

        if(isset($_POST['view-mahapola-report']) || $_GET['btn'] == 88){

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
                $eligible_count_m = 0;
                $eligible_count_o = 0;
                $non_eligible_count = 0;

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

                    else{
                        header('Location:../../view/mahapolaSchemeMaintainer/mmNoRecordsV.php');
                    }

                    $final_percentage = ($total_stu_sub_percent + $total_stu_non_sub_percent)/($sub_count + $non_sub_count);

                        if($final_percentage >= 80){
                            $eligible_stu_list[] = $stu['std_id'];
                            
                            if($stu['mahapola_category'] == 'merit'){

                                $eligible_count_m = $eligible_count_m + 1;

                            }
                            elseif($stu['mahapola_category'] == 'ordinary'){

                                $eligible_count_o = $eligible_count_o + 1;

                            }
                           
                        }
                        else{

                            $non_eligible_stu_list[] = $stu['std_id'];
                            $non_eligible_count = $non_eligible_count + 1; 

                        }

                }

                    $check_has_reconcilation_record = viewMahapolaModel::checkHasRecord($degree,$batch_no,$year,$month,$connect);

                    if(mysqli_num_rows($check_has_reconcilation_record) == 1){
                        $update_reconcilation = viewMahapolaModel::updateRecocilation($degree,$batch_no,$year,$month,$eligible_count_m,$eligible_count_o,$non_eligible_count,$connect);
                    }
                    else{
                        $insert_reconcilation = viewMahapolaModel::insertReconcilation($degree,$batch_no,$year,$month,$eligible_count_m,$eligible_count_o,$non_eligible_count,$connect);
                    }

                $degree_name = viewMahapolaModel::getDegreeName($degree,$connect);
                $name = mysqli_fetch_assoc($degree_name);
                $deg_name = $name['degree_name'];

                if($report_type == 'monthlyEligibiltyList'){

                    $_SESSION['eligible_stu'] = '';
                    if(count($eligible_stu_list) > 0){
                        for($i =0; $i<count($eligible_stu_list) ; $i++){

                            $student_det = viewMahapolaModel::getStudentDetails($eligible_stu_list[$i],$connect);
                            $stu_det = mysqli_fetch_assoc($student_det);

                            $_SESSION['eligible_stu'] .= "<tr>";
                            $_SESSION['eligible_stu'] .= "<td>{$stu_det['index_no']}</td>";
                            $_SESSION['eligible_stu'] .= "<td>{$stu_det['registration_no']}</td>";
                            $_SESSION['eligible_stu'] .= "<td>{$stu_det['initials']}.{$stu_det['last_name']}</td>";
                            $_SESSION['eligible_stu'] .= "<td>{$stu_det['mahapola_category']}</td>";
                            $_SESSION['eligible_stu'] .= "</tr>";

                        
                            header('Location:../../view/mahapolaSchemeMaintainer/mmEligibilityListV.php');


                        }
                    }
                    else{
                        header('Location:../../view/mahapolaSchemeMaintainer/mmNoRecordsV.php');
                    }


                }

                elseif($report_type == 'monthlyInEligibiltyList'){

                    $_SESSION['non_eligible_stu'] = '';

                    if(count($non_eligible_stu_list) > 0){
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
                    else{
                        header('Location:../../view/mahapolaSchemeMaintainer/mmNoRecordsV.php');
                    }

                }

                elseif($report_type == 'monthlyReconciliationReport'){

                    $_SESSION['reco_list'] = '';

                    $cur_reco_result = viewMahapolaModel::getCurrentMonthResult($degree,$batch_no,$year,$month,$connect);

                    if($month == 1){
                        $prev_month = 12;
                        $prev_year = $year - 1;

                        $prev_reco_result = viewMahapolaModel::getPreviousMonthResult($degree,$batch_no,$prev_year,$prev_month,$connect);

                    }
                    else{
                        $prev_month = $month - 1;

                        $prev_reco_result = viewMahapolaModel::getPreviousMonthResult($degree,$batch_no,$year,$year,$prev_month,$connect);
                    }

                    if(mysqli_num_rows($prev_reco_result) == 1){
                        $_SESSION['has_prev_reco'] = 1;

                        $prev_result = mysqli_fetch_assoc($prev_reco_result);

                        $_SESSION['reco_list'] .= "<tr>";
                        $_SESSION['reco_list'] .= "<td>{$prev_result['year']}</td>";
                        $_SESSION['reco_list'] .= "<td>{$prev_result['month']}</td>";
                        $_SESSION['reco_list'] .= "<td>{$deg_name}</td>";
                        $_SESSION['reco_list'] .= "<td>{$batch_no}</td>";
                        $_SESSION['reco_list'] .= "<td>{$prev_result['eligible_m']}</td>";
                        $_SESSION['reco_list'] .= "<td>{$prev_result['eligible_o']}</td>";
                        $_SESSION['reco_list'] .= "<td>{$prev_result['non_eligible']}</td>";
                        $_SESSION['reco_list'] .= "</tr>";


                    }


                        $_SESSION['reco_eligible_stu'] = '';
                        if(count($eligible_stu_list) > 0){
                            for($i =0; $i<count($eligible_stu_list) ; $i++){

                                $student_det = viewMahapolaModel::getStudentDetails($eligible_stu_list[$i],$connect);
                                $stu_det = mysqli_fetch_assoc($student_det);

                                $_SESSION['reco_eligible_stu'] .= "<tr>";
                                $_SESSION['reco_eligible_stu'] .= "<td>{$stu_det['index_no']}</td>";
                                $_SESSION['reco_eligible_stu'] .= "<td>{$stu_det['registration_no']}</td>";
                                $_SESSION['reco_eligible_stu'] .= "<td>{$stu_det['initials']}.{$stu_det['last_name']}</td>";
                                $_SESSION['reco_eligible_stu'] .= "<td>{$stu_det['mahapola_category']}</td>";
                                $_SESSION['reco_eligible_stu'] .= "</tr>";

                            }
                        }

                        $_SESSION['reco_non_eligible_stu'] = '';

                        if(count($non_eligible_stu_list) > 0){
                            for($i =0; $i<count($non_eligible_stu_list) ; $i++){
                                $student_det = viewMahapolaModel::getStudentDetails($non_eligible_stu_list[$i],$connect);
                                $stu_det = mysqli_fetch_assoc($student_det);

                                $_SESSION['reco_non_eligible_stu'] .= "<tr>";
                                $_SESSION['reco_non_eligible_stu'] .= "<td>{$stu_det['index_no']}</td>";
                                $_SESSION['reco_non_eligible_stu'] .= "<td>{$stu_det['registration_no']}</td>";
                                $_SESSION['reco_non_eligible_stu'] .= "<td>{$stu_det['initials']}.{$stu_det['last_name']}</td>";
                                $_SESSION['reco_non_eligible_stu'] .= "</tr>";


                            }
                        }

                        $cur_result = mysqli_fetch_assoc($cur_reco_result);

                        $_SESSION['reco_list'] .= "<tr>";
                        $_SESSION['reco_list'] .= "<td>{$cur_result['year']}</td>";
                        $_SESSION['reco_list'] .= "<td>{$cur_result['month']}</td>";
                        $_SESSION['reco_list'] .= "<td>{$deg_name}</td>";
                        $_SESSION['reco_list'] .= "<td>{$batch_no}</td>";
                        $_SESSION['reco_list'] .= "<td>{$cur_result['eligible_m']}</td>";
                        $_SESSION['reco_list'] .= "<td>{$cur_result['eligible_o']}</td>";
                        $_SESSION['reco_list'] .= "<td>{$cur_result['non_eligible']}</td>";
                        $_SESSION['reco_list'] .= "</tr>";

                        header('Location:../../view/mahapolaSchemeMaintainer/mmReconcilationReportV.php');

                }
                
            }
            else{
                header('Location:../../view/mahapolaSchemeMaintainer/mmNoRecordsV.php');
            }
            
            
        }
?>

            
                