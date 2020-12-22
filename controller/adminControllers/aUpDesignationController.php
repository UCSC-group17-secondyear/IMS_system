<?php

    session_start();
    require_once('../../config/database.php');
    require_once('../../model/adminModel/manageDesignationsModel.php');

    $records = adminModel::designation($connect);
    
    $_SESSION['desg'] = '';

    if ($records) {
        while ($record = mysqli_fetch_array($records)) {
            $_SESSION['desg'] .= "<option value='".$record['designation_name']."'>".$record['designation_name']."</option>";
        }

        header('Location:../../view/admin/aUpdateDesignationFormV.php');
    }

?>