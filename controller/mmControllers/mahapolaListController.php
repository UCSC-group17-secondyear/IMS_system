<?php
    session_start();
    require_once('../../model/mmModel/studentDetModel.php');
    require_once('../../model/mmModel/viewMahapolaModel.php');
    require_once('../../config/database.php');

?>

<?php

        if(isset($_POST['view-mahapola-report']) || isset($_GET['btn'])){

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

            $_SESSION['batch_no'] = $batch_no;
            $_SESSION['month'] = $month;
            $_SESSION['year'] = $year;
            $_SESSION['degree_id']  = $degree;

            $year_month = $year.''.$month;

            $semester = viewMahapolaModel::getSemDigit($year_month, $connect);
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
                    $stu_non_mand_attend_percentage = 0;

                    if($stu_reserved_subjects){
                        
                        while($subject = mysqli_fetch_assoc($stu_reserved_subjects)){
                            $subject['subject_id'];
                            
                            $sub_session_details = viewMahapolaModel::getSubjectSessionInMonth($degree,$year,$month,$subject['subject_id'],$connect);
                            $session_detail = mysqli_fetch_array($sub_session_details);
                            $num_of_session = $session_detail[0];
                           
                            $attendance_count = viewMahapolaModel::getStuSubjectAttendance($stu['std_id'],$degree,$subject['subject_id'],$year,$month,$connect);
                            $attend_count = mysqli_fetch_array($attendance_count);
                            $stu_sub_attendance = $attend_count[0];

                            if($sub_session_details){
                                if($num_of_session > 0){
                                    $stu_sub_attend_percentage = ($stu_sub_attendance/$num_of_session)*100;
                                    $total_stu_sub_percent = $total_stu_sub_percent + $stu_sub_attend_percentage;
                                    $sub_count = $sub_count + 1;
                                }
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

                            if($sub_session_details){
                                if($num_of_session > 0){
                                    $stu_non_mand_attend_percentage = ($stu_sub_attendance/$num_of_session)*100;
                                    $total_stu_non_sub_percent = $total_stu_non_sub_percent + $stu_non_mand_attend_percentage;
                                    $non_sub_count = $non_sub_count + 1;
                                }
                            }
                            
                             
                        }
                    }

                    else{
                        header('Location:../../view/mahapolaSchemeMaintainer/mmNoRecordsV.php');
                    }

                    if($non_sub_count > 0 || $sub_count > 0){
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
                    else{
                        header('Location:../../view/mahapolaSchemeMaintainer/mmNoRecordsV.php');
                    }
                }

                    $check_has_reconcilation_record = viewMahapolaModel::checkHasRecord($degree,$batch_no,$year,$month,$connect);

                    $_SESSION['eligible_m'] = $eligible_count_m;
                    $_SESSION['eligible_o'] = $eligible_count_o;
                    $_SESSION['non_eligible'] = $non_eligible_count;

                    if(mysqli_num_rows($check_has_reconcilation_record) == 1){
                        $update_reconcilation = viewMahapolaModel::updateRecocilation($degree,$batch_no,$year,$month,$eligible_count_m,$eligible_count_o,$non_eligible_count,$connect);
                    }
                    else{
                        $insert_reconcilation = viewMahapolaModel::insertReconcilation($degree,$batch_no,$year,$month,$eligible_count_m,$eligible_count_o,$non_eligible_count,$connect);
                    }

                $degree_name = viewMahapolaModel::getDegreeName($degree,$connect);
                $name = mysqli_fetch_assoc($degree_name);
                $deg_name = $name['degree_name'];
                $_SESSION['degree_name'] = $deg_name;

                if($report_type == 'monthlyEligibiltyList'){

                    $_SESSION['eligible_stu'] = '';
                    $_SESSION['gen_eligible_list'] = '';

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

                            $_SESSION['gen_eligible_list'] = $eligible_stu_list;
                        
                            header('Location:../../view/mahapolaSchemeMaintainer/mmEligibilityListV.php');


                        }
                    }
                    else{
                        header('Location:../../view/mahapolaSchemeMaintainer/mmNoRecordsV.php');
                    }


                }

                elseif($report_type == 'monthlyInEligibiltyList'){

                    $_SESSION['non_eligible_stu'] = '';
                    $_SESSION['gen_ineligible_list'] = '';

                    if(count($non_eligible_stu_list) > 0){
                        for($i =0; $i<count($non_eligible_stu_list) ; $i++){
                            $student_det = viewMahapolaModel::getStudentDetails($non_eligible_stu_list[$i],$connect);
                            $stu_det = mysqli_fetch_assoc($student_det);

                            $_SESSION['non_eligible_stu'] .= "<tr>";
                            $_SESSION['non_eligible_stu'] .= "<td>{$stu_det['index_no']}</td>";
                            $_SESSION['non_eligible_stu'] .= "<td>{$stu_det['registration_no']}</td>";
                            $_SESSION['non_eligible_stu'] .= "<td>{$stu_det['initials']}.{$stu_det['last_name']}</td>";
                            $_SESSION['non_eligible_stu'] .= "</tr>";

                            $_SESSION['gen_ineligible_list'] = $non_eligible_stu_list;

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

        elseif(isset($_POST['eligiblePDF'])){

            require_once("../../FPDF/fpdf.php");

            
            class getPdf extends FPDF {

                function header () {
                    $this -> SetFont('Arial', 'B', 20);
                    $this -> Cell(276, 10, "Mahapola Eligibility List", 0, 1, 'C');
                    $this -> Ln();
                }

                function footer () {
                    $this -> SetY(-15);
                    $this -> SetFont('Arial', '', 8);
                    $this -> Cell(0, 10, 'Page Number '.$this->PageNo(), 0, 0, 'C');
                }

                function displayInfo(){

                    $degree = $_SESSION['degree_name'];
                    $batch_no = $_SESSION['batch_no'];
                    $year = $_SESSION['year'];
                    $month = $_SESSION['month'];

                    $this -> Cell(75, 10, "Year", 1, 0, 'B');
                    $this -> Cell(0, 10, $year, 1, 1);

                    $this -> Cell(75, 10, "Month", 1, 0, 'B');
                    $this -> Cell(0, 10, $month, 1, 1);

                    $this -> Cell(75, 10, "Degree", 1, 0, 'B');
                    $this -> Cell(0, 10, $degree, 1, 1);

                    $this -> Cell(75, 10, "Batch No", 1, 0, 'B');
                    $this -> Cell(0, 10, $batch_no, 1, 1);

                    $this -> Cell(0, 10, "", 0, 1);
                }

                function stuTable(){
                    $this -> SetFont('Arial', 'B', 16);
                    $this -> Cell(65, 10, "Student Index", 1, 0, 'C');
                    $this -> Cell(65, 10, "Registration No", 1, 0, 'C');
                    $this -> Cell(65, 10, "Student Name", 1, 0, 'C');
                    $this -> Cell(0, 10, "Mahapola Scheme", 1, 0, 'C');
                    $this -> Ln();
                }

               function displayDetail($eli_list,$connect){
                    for($i =0; $i<count($eli_list) ; $i++){

                        $student_det = viewMahapolaModel::getStudentDetails($eli_list[$i],$connect);
                        $stu_det = mysqli_fetch_assoc($student_det);

                        $this -> Cell(65, 10, $stu_det['index_no'], 1, 0);
                        $this -> Cell(65, 10, $stu_det['registration_no'], 1, 0);
                        $this -> Cell(65, 10, $stu_det['initials'].' '.$stu_det['last_name'], 1, 0);
                        $this -> Cell(0, 10, $stu_det['mahapola_category'], 1, 1);
                    }
               }
    
            }

            $pdf = new getPdf();
            $pdf -> AddPage('L', 'A4', 0);
            $pdf -> SetFont("Arial", "", 14);
            $pdf -> displayInfo();
            $pdf -> stuTable();
            $pdf -> displayDetail($_SESSION['gen_eligible_list'],$connect);
            $pdf->output();
        }

        elseif(isset($_POST['inEligiblePDF'])){

            require_once("../../FPDF/fpdf.php");

            
            class getPdf extends FPDF {

                function header () {
                    $this -> SetFont('Arial', 'B', 20);
                    $this -> Cell(276, 10, "Mahapola Ineligibility List", 0, 1, 'C');
                    $this -> Ln();
                }

                function footer () {
                    $this -> SetY(-15);
                    $this -> SetFont('Arial', '', 8);
                    $this -> Cell(0, 10, 'Page Number '.$this->PageNo(), 0, 0, 'C');
                }

                function displayInfo(){

                    $degree = $_SESSION['degree_name'];
                    $batch_no = $_SESSION['batch_no'];
                    $year = $_SESSION['year'];
                    $month = $_SESSION['month'];

                    $this -> Cell(75, 10, "Year", 1, 0, 'B');
                    $this -> Cell(0, 10, $year, 1, 1);

                    $this -> Cell(75, 10, "Month", 1, 0, 'B');
                    $this -> Cell(0, 10, $month, 1, 1);

                    $this -> Cell(75, 10, "Degree", 1, 0, 'B');
                    $this -> Cell(0, 10, $degree, 1, 1);

                    $this -> Cell(75, 10, "Batch No", 1, 0, 'B');
                    $this -> Cell(0, 10, $batch_no, 1, 1);

                    $this -> Cell(0, 10, "", 0, 1);
                }

                function stuTable(){
                    $this -> SetFont('Arial', 'B', 16);
                    $this -> Cell(65, 10, "Student Index", 1, 0, 'C');
                    $this -> Cell(65, 10, "Registration No", 1, 0, 'C');
                    $this -> Cell(0, 10, "Student Name", 1, 0, 'C');
                    $this -> Ln();
                }

               function displayDetail($ineli_list,$connect){
                    for($i =0; $i<count($ineli_list) ; $i++){

                        $student_det = viewMahapolaModel::getStudentDetails($ineli_list[$i],$connect);
                        $stu_det = mysqli_fetch_assoc($student_det);

                        $this -> Cell(65, 10, $stu_det['index_no'],1, 0);
                        $this -> Cell(65, 10, $stu_det['registration_no'],1, 0);
                        $this -> Cell(0, 10, $stu_det['initials'].' '.$stu_det['last_name'],1, 1);
                    }
               }
    
            }

            $pdf = new getPdf();
            $pdf -> AddPage('L', 'A4', 0);
            $pdf -> SetFont("Arial", "", 14);
            $pdf -> displayInfo();
            $pdf -> stuTable();
            $pdf -> displayDetail($_SESSION['gen_ineligible_list'],$connect);
            $pdf->output();
        }


        elseif(isset($_POST['recoPDF'])){

            require_once("../../FPDF/fpdf.php");

            
            class getPdf extends FPDF {

                function header () {
                    $this -> SetFont('Arial', 'B', 20);
                    $this -> Cell(276, 10, "Monthly Reconciliation Report", 0, 1, 'C');
                    $this -> Ln();
                }

                function headerEligbile () {
                    $this -> SetFont('Arial', 'B', 20);
                    $this -> Cell(276, 10, "Monthly Eligibility List", 0, 1, 'C');
                    $this -> Ln();
                }

                function headerInEligbile () {
                    $this -> SetFont('Arial', 'B', 20);
                    $this -> Ln();
                    $this -> Cell(276, 10, "Monthly Ineligibility List", 0, 1, 'C');
                    $this -> Ln();
                }

                function footer () {
                    $this -> SetY(-15);
                    $this -> SetFont('Arial', '', 8);
                    $this -> Cell(0, 10, 'Page Number '.$this->PageNo(), 0, 0, 'C');
                }

                function displayInfo($connect){

                    $degree_id = $_SESSION['degree_id'];
                    $degree = $_SESSION['degree_name'];
                    $batch_no = $_SESSION['batch_no'];
                    $year = $_SESSION['year'];
                    $month = $_SESSION['month'];

                    $this -> Cell(75, 10, "Year", 1, 0, 'B');
                    $this -> Cell(0, 10, $year, 1, 1);

                    $this -> Cell(75, 10, "Month", 1, 0, 'B');
                    $this -> Cell(0, 10, $month, 1, 1);

                    $this -> Cell(75, 10, "Degree", 1, 0, 'B');
                    $this -> Cell(0, 10, $degree, 1, 1);

                    $this -> Cell(75, 10, "Batch No", 1, 0, 'B');
                    $this -> Cell(0, 10, $batch_no, 1, 1);

                    $this -> Cell(0, 10, "", 0, 1);

                    $this -> SetFont('Arial', 'B', 16);
                    $this -> Cell(65, 10, "Merit Scholarship", 1, 0, 'C');
                    $this -> Cell(65, 10, "Ordinary Scholarship", 1, 0, 'C');
                    $this -> Cell(0, 10, "Non eligible", 1, 0, 'C');
                    $this -> Ln();

                    $cur_reco_result = viewMahapolaModel::getCurrentMonthResult($degree_id,$batch_no,$year,$month,$connect);
                    $cur_result = mysqli_fetch_assoc($cur_reco_result);

                        $this -> Cell(65, 10, $cur_result['eligible_m'], 1, 0);
                        $this -> Cell(65, 10, $cur_result['eligible_m'], 1, 0);
                        $this -> Cell(0, 10, $cur_result['non_eligible'], 1, 1);
                    
                                 
                }

                function stuEligibleTable(){
                    $this -> SetFont('Arial', 'B', 16);
                    $this -> Cell(65, 10, "Student Index", 1, 0, 'C');
                    $this -> Cell(65, 10, "Registration No", 1, 0, 'C');
                    $this -> Cell(65, 10, "Student Name", 1, 0, 'C');
                    $this -> Cell(0, 10, "Mahapola Scheme", 1, 0, 'C');
                    $this -> Ln();
                }

                function displayEligibleDetail($eli_list,$connect){
                    for($i =0; $i<count($eli_list) ; $i++){

                        $student_det = viewMahapolaModel::getStudentDetails($eli_list[$i],$connect);
                        $stu_det = mysqli_fetch_assoc($student_det);

                        $this -> Cell(65, 10, $stu_det['index_no'], 1, 0);
                        $this -> Cell(65, 10, $stu_det['registration_no'], 1, 0);
                        $this -> Cell(65, 10, $stu_det['initials'].' '.$stu_det['last_name'], 1, 0);
                        $this -> Cell(0, 10, $stu_det['mahapola_category'], 1, 1);
                    }
               }

                function stuIneligibleTable(){
                    $this -> SetFont('Arial', 'B', 16);
                    $this -> Cell(65, 10, "Student Index", 1, 0, 'C');
                    $this -> Cell(65, 10, "Registration No", 1, 0, 'C');
                    $this -> Cell(0, 10, "Student Name", 1, 0, 'C');
                    $this -> Ln();
                }

               function displayIneligibleDetail($ineli_list,$connect){
                    for($i =0; $i<count($ineli_list) ; $i++){

                        $student_det = viewMahapolaModel::getStudentDetails($ineli_list[$i],$connect);
                        $stu_det = mysqli_fetch_assoc($student_det);

                        $this -> Cell(65, 10, $stu_det['index_no'], 1, 0);
                        $this -> Cell(65, 10, $stu_det['registration_no'], 1, 0);
                        $this -> Cell(0, 10, $stu_det['initials'].' '.$stu_det['last_name'], 1, 1);
                    }
               }
    
            }

            $pdf = new getPdf();
            $pdf -> AddPage('L', 'A4', 0);
            $pdf -> SetFont("Arial", "", 14);
            $pdf -> displayInfo($connect);
            $pdf -> headerEligbile();
            $pdf -> stuEligibleTable();
            $pdf -> displayEligibleDetail($_SESSION['gen_eligible_list'],$connect);
            $pdf -> headerInEligbile();
            $pdf -> stuIneligibleTable();
            $pdf -> displayIneligibleDetail($_SESSION['gen_ineligible_list'],$connect);
            $pdf->output();

        }
?>

            
                