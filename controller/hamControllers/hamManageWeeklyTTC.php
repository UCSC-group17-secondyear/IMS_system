<?php
    session_start();
    require_once('../../config/database.php');
    require_once('../../model/hamModel/hamManageWeeklyTTModel.php');

    if(isset($_POST['preentertt-submit'])) {
        $records1 = hamModel::getAllsubjects($connect);
        $records2 = hamModel::getAllHalls($connect);
        $_SESSION['subjects'] = '';
        $_SESSION['subject_code'] = '';
        $_SESSION['subject_with_code'] = '';
        $_SESSION['allhalls'] = '';
        
        if ($records1 && $records2) {
            while ($record1 = mysqli_fetch_array($records1)) {
                $_SESSION['subjects'] .= $record1['subject_name'];
                $_SESSION['subject_code'] .= $record1['subject_code'];
                $_SESSION['subject_with_code'] .= "<option value='".$record1['subject_code']."'>".$record1['subject_code']." - ".$record1['subject_name']."</option>";
                // $_SESSION['subjects']..$_SESSION['suject_code']
            }

            while ($record2 = mysqli_fetch_array($records2)) {
                $_SESSION['allhalls'] .= "<option value='".$record2['hall_name']."'>".$record2['hall_name']."</option>";
            }
            header('Location:../../view/hallAllocationMaintainer/hamEnterTimeTableV.php');
        }
    }

?>