<?php
    session_start();
    require_once('../model/adminModel/manageUserRolesModel.php');
    require_once('../config/database.php');

    if(isset($_POST['userroleList-submit'])) {
        $_SESSION['user_role'] = '';
        $userroles = adminModel::viewUserRoles($connect);

        if ($userroles) {
            while ($roles = mysqli_fetch_assoc($userroles)) {
                $_SESSION['user_role'] .= "<tr>";
                $_SESSION['user_role'] .= "<td>{$roles['role_name']}</td>";
                $_SESSION['user_role'] .= "<td>{$roles['description']}</td>";

                header('Location:../view/admin/aViewUserRolesV.php');
            }
        }
        else {
            echo "no user roles in the database";
        }
    }
    else{
        echo "Button not clicked.";
    }
?>