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
                    $_SESSION['degree'] .= "<option value='".$degree['degree_name']."'>".$degree['degree_abbriviation']." - ".$degree['degree_name']."</option>";
                        
                }
            
                header('Location:../../view/mahapolaSchemeMaintainer/mmViewReportsMahapolaSchemeV.php');                
                
            }
            else{
                header('Location:../../view/mahapolaSchemeMaintainer/mmNoRecordsV.php');
            }

        }

        elseif(isset($_POST['display-report'])){


            echo $report_type = mysqli_escape_string($connect,$_POST['report_type']);
            echo $year = mysqli_real_escape_string($connect, $_POST['year']);
            echo $month = mysqli_real_escape_string($connect, $_POST['month']);
            echo $batch_no = mysqli_real_escape_string($connect, $_POST['batch_no']);
            echo $degree = mysqli_real_escape_string($connect, $_POST['degree']);
            

            $students = viewMahapolaModel::getMahapolaStudents($batch_no, $degree, $connect);
            //print_r($students);
            while($stu = mysqli_fetch_assoc($students)){
                
                $stu_reserved_session = viewMahapolaModel::getStuMonthSessions($stu['index_no'],$connect);
                
                while($sessions = mysqli_fetch_assoc($stu_reserved_session)){
                    $subjects = viewMahapolaModel::getSubjectOnMonth($sessions['subject_session_id'],$year,$month,$connect);
                    
                    while($sub = mysqli_fetch_assoc($subjects)){
                        echo $sub['subject_code'];
                    }
                }
            }
            //print_r($students);
            // $ids = mysqli_fetch_assoc($students);
            // print_r($ids);

            // if($reportType =='monthlyEligibiltyList'){

            //     header('Location:../../view/mahapolaSchemeMaintainer/mmEligibilityListV.php');
                
            // }

            // elseif($reportType=='monthlyInEligibiltyList'){

            //     header('Location:../../view/mahapolaSchemeMaintainer/mmInEligibilityListV.php');
                
            // }

            // elseif($reportType=='monthlyReconciliationReport'){

            //     header('Location:../../view/mahapolaSchemeMaintainer/mmReconcilationReportV.php');
            // }

        }
?>

            
                