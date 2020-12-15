<?php
    session_start();
    require_once('../../config/database.php');
    require_once('../../model/adminModel/manageUserRolesModel.php');

    $records = adminModel::userRoles($connect);
    $usernames = adminModel::userList($connect);

    $_SESSION['userroles'] = '';
    $_SESSION['userlist'] = '';

    if ($records && $usernames) {
        while ($record = mysqli_fetch_array($records)) {
            $_SESSION['userroles'] .= "<option value='".$record['role_name']."'>".$record['role_name']."</option>";
        }

        while ($user = mysqli_fetch_array($usernames)) {
            $_SESSION['userlist'] .= "<option value='".$user['empid']."'>".$user['empid']."</option>";
        }

        header('Location:../../view/admin/aAssignUserRoleV.php');
    }
    else {
        header('Location:../../view/admin/aQueryFailedV.php');
    }

?>