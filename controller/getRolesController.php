<?php

    session_start();
    require_once("../config/database.php");
    require_once("../model/Model.php");

    $_SESSION['roles'] = '';

    $records = Model::userRoles($connect);

    if ($records) {
        while ($record = mysqli_fetch_array($records)) {
            $_SESSION['roles'] .= "<option value='".$record['role_name']."'>".$record['role_name']."</option>";
        }

        header('Location:../view/admin/aRemoveUserRoleV.php');
    }

?>