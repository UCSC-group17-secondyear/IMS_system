<?php 
    session_start();
    require_once('../../model/adminModel/manageUserRolesModel.php');
    require_once('../../config/database.php');

    if(isset($_POST['addUserrole-submit'])) {
        $userrole = $_POST['userRole'];
        $description = $_POST['description'];

        $result = adminModel::addUserrole($userrole, $description, $connect);

        if ($result) {
            echo "user role is added successfully";
        }
    }

    else if(isset($_POST['userroleList-submit'])) {
        $_SESSION['user_role'] = '';
        $userroles = adminModel::viewUserRoles($connect);

        if ($userroles) {
            while ($roles = mysqli_fetch_assoc($userroles)) {
                $_SESSION['user_role'] .= "<tr>";
                $_SESSION['user_role'] .= "<td>{$roles['role_name']}</td>";
                $_SESSION['user_role'] .= "<td>{$roles['description']}</td>";
                $_SESSION['user_role'] .= "</tr>";

                header('Location:../../view/admin/aViewUserRolesV.php');
            }
        }
        else {
            echo "no user roles in the database";
        }
    }

    else if(isset($_POST['remove-submit'])) {
        $userrole = $_POST['userRole'];

        $result = adminModel::removeUserrole($userrole, $connect);

        if ($result) {
            echo "user role is removed successfully";
        }
        else {
            echo "user role is not deleted";
        }
    }

    else if (isset($_POST['setUserRole-submit'])) {
        
        $empid = mysqli_real_escape_string($connect, $_POST['empid']);
        $userRole = mysqli_real_escape_string($connect, $_POST['userRole']);

        $checkEmpid = adminModel::checkEmpid($empid, $connect);

        if (mysqli_num_rows($checkEmpid) == 1) {
            
            $result = adminModel::setUserRole($empid, $userRole, $connect);

            if ($result) {
                echo "User role updated successfully..";
            }
            else{
                echo "Query is incorrect.";
            }
        }
        else {
            echo "Employee id is invalid.";
        }
    }

    else if (isset($_POST['updateUserRole-submit'])) {
        
        $empid = mysqli_real_escape_string($connect, $_POST['empid']);
        $userRole = mysqli_real_escape_string($connect, $_POST['userRole']);

        $checkEmpid = adminModel::checkEmpid($empid, $connect);

        if (mysqli_num_rows($checkEmpid) == 1) {
            
            $result = adminModel::updateUserRole($empid, $userRole, $connect);

            if ($result) {
                echo "User role updated successfully..";
            }
            else{
                echo "Query is incorrect.";
            }
        }
        else {
            echo "Employee id is invalid.";
        }
    }
?>