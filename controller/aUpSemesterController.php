<?php

    session_start();
    require_once('../config/database.php');
    require_once('../model/Model.php');

    $records1 = Model::semYear($connect);
    $records2 = Model::semName($connect);
    
    $_SESSION['yrs'] = '';
    $_SESSION['nms'] = '';

    if ($records1 && $records2) {
        while ($record1 = mysqli_fetch_array($records1)) {
            // echo $_SESSION['yrs'];
            // echo $record1['academic_year'];
            if ($_SESSION['yrs'] != $record1['academic_year']) {
                $_SESSION['yrs'] .= "<option value='".$record1['academic_year']."'>".$record1['academic_year']."</option>";
            }
            
        }

        while ($record2 = mysqli_fetch_array($records2)) {
            if (strcmp($_SESSION['nms'], $record2['semester'])!==0) {
                $_SESSION['nms'] .= "<option value='".$record2['semester']."'>".$record2['semester']."</option>";
            }
            
        }

        header('Location:../view/admin/aUpdateSemesterFormV.php');
    }

?>