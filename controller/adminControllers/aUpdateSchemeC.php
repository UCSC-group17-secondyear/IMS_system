<?php

    session_start();
    require_once('../../config/database.php');
    require_once('../../model/adminModel/manageSchemesModel.php');

    $records = adminModel::getSchemeNames($connect);
    $_SESSION['schemes'] = '';

    if ($records) {
        while ($record = mysqli_fetch_array($records)) {
            $_SESSION['schemes'] .= "<option value='".$record['schemeName']."'>".$record['schemeName']."</option>";
        }
        header('Location:../../view/admin/aUpdateSchemeV.php');
    }
    else {
        echo "Database query failed";
    }

?>