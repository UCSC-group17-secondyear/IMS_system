<?php

    session_start();
    require_once('../../config/database.php');
    require_once('../../model/adminModel/manageUserRolesModel.php');

    $records = adminModel::viewUserRoles($connect);

    $_SESSION['userroleList'] = '';

    if ($records) {
        while ($record = mysqli_fetch_array($records)) {
            $_SESSION['userroleList'] .= "<option value='".$record['role_name']."'>".$record['role_name']."</option>";
        }

        header('Location:../../view/admin/aRemoveUserRoleV.php');
    }
    else {
        echo "Database query failed";
    }

?>