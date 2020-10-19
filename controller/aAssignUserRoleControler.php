<?php

    session_start();
    require_once('../config/database.php');
    require_once('../model/Model.php');

    $records = Model::userRoles($connect);

    $_SESSION['userroles'] = '';

    if ($records) {
        while ($record = mysqli_fetch_array($records)) {
            $_SESSION['userroles'] .= "<option value='".$record['role_name']."'>".$record['role_name']."</option>";
        }

        header('Location:../view/admin/aAssignUserRoleV.php');
    }
    else {
        echo "Database query failed";
    }

?>