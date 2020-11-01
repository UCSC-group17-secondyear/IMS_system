<?php

    session_start();
    require_once('../config/database.php');
    require_once('../model/Model.php');

    $records = Model::department($connect);
    
    $_SESSION['deps'] = '';

    if ($records) {
        while ($record = mysqli_fetch_array($records)) {
            $_SESSION['deps'] .= "<option value='".$record['department']."'>".$record['department']."</option>";
        }

        header('Location:../view/admin/aUpdateDepartmentFormV.php');
    }

?>