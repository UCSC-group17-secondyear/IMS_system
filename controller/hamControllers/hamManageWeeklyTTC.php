<?php
    session_start();
    require_once('../../config/database.php');
    require_once('../../model/hamModel/hamManageWeeklyTTModel.php');

    if(isset($_POST['entertt-submit'])) {
        $records3 = hamModel::getAllsemesters($connect);
        $records4 = hamModel::getAlldegrees($connect);
        $_SESSION['semesters'] = "";
        $_SESSION['degree'] = "";
        
        if ($records3 && $records4) {

            while ($record3 = mysqli_fetch_array($records3)) {
                $_SESSION['semesters'] .= "<option value='".$record3['semester']."'>".$record3['semester']."</option>";
            }

            while ($record4 = mysqli_fetch_array($records4)) {
                $_SESSION['degree'] .= "<option value='".$record4['degree_name']."'>".$record4['degree_name']."</option>";
            }

            header('Location:../../view/hallAllocationMaintainer/hamEnterTimeTableSelectV.php');
        }
    } elseif (isset($_POST['entertt-submit'])) {
        $records1 = hamModel::getAllsubjects($connect);
        $records2 = hamModel::getAllHalls($connect);
        $_SESSION['subjects'] = "";
        $_SESSION['subject_code'] = "";
        $_SESSION['subject_with_code'] = "";
        $_SESSION['allhalls'] = "";

        if($records1 && $records2){
            while ($record1 = mysqli_fetch_array($records1)) {
                $_SESSION['subjects'] .= $record1['subject_name'];
                $_SESSION['subject_code'] .= $record1['subject_code'];
                $_SESSION['subject_with_code'] .= "<option value='".$record1['subject_code']."'>".$record1['subject_code']." - ".$record1['subject_name']."</option>";
            }
    
            while ($record2 = mysqli_fetch_array($records2)) {
                $_SESSION['allhalls'] .= "<option value='".$record2['hall_name']."'>".$record2['hall_name']."</option>";
            }

            header('Location:../../view/hallAllocationMaintainer/hamEnterTimeTableV.php');
        }


    } elseif (isset($_POST['updateremovett-submit'])) {

    } 

?>