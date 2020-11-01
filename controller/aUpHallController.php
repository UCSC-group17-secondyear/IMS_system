<?php

    session_start();
    require_once('../config/database.php');
    require_once('../model/Model.php');

    $records = Model::hall($connect);
    
    $_SESSION['halls'] = '';

    if ($records) {
        while ($record = mysqli_fetch_array($records)) {
            $_SESSION['halls'] .= "<option value='".$record['hall_name']."'>".$record['hall_name']."</option>";
        }

        header('Location:../view/admin/aUpdateHallFormV.php');
    }

?>