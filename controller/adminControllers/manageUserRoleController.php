<?php 
    session_start();
    require_once('../../model/adminModel/manageUserRolesModel.php');
    require_once('../../config/database.php');

    if(isset($_POST['addUserrole-submit'])) {
        $userrole = mysqli_real_escape_string($connect, $_POST['userRole']);
        $description = mysqli_real_escape_string($connect,$_POST['description']);

        $roleExists = adminModel::checkRole($userrole, $connect);
        if (mysqli_num_rows($roleExists) != 0) {
            header('Location:../../view/admin/aUserRoleExists.php');
        }
        else {
            $result = adminModel::addUserrole($userrole, $description, $connect);

            if ($result) {
                header('Location:../../view/admin/aUserRoleAdded.php');
            }
            else {
                header('Location:../../view/admin/aUserRoleNotAdded.php');
            }
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
            }
            header('Location:../../view/admin/aViewUserRolesV.php');
        }
        else {
            header('Location:../../view/admin/aNoUserRolesAvailableV.php');
        }
    }

    else if(isset($_POST['remove-submit'])) {
        $userrole = $_POST['userRole'];

        $result = adminModel::removeUserrole($userrole, $connect);

        if ($result) {
            header('Location:../../view/admin/aUserRoleRemovedV.php');
        }
        else {
            header('Location:../../view/admin/aUserRoleNotRemovedV.php');
        }
    }

    else if (isset($_POST['setUserRole-submit'])) {
        
        $empid = $_POST['empid'];
        $userRole = $_POST['userRole'];

        $get_role_id = adminModel::getRoleID($userRole, $connect);
        $result_role_id = mysqli_fetch_assoc($get_role_id);
        $role_id = $result_role_id['role_id'];

        if ($role_id) {
            $get_userId = adminModel::getUId ($empid, $connect);
            $result_userId = mysqli_fetch_assoc($get_userId);
            $userId = $result_userId['userId'];

            if ($userId) {
                $checkUsersRoles = adminModel::checkUsersRoles ($userId, $role_id, $connect);
                $result_UsersRoles = mysqli_fetch_assoc($checkUsersRoles);
                $id = $result_UsersRoles['id'];

                if ($id) {
                    header('Location:../../view/admin/aUserHasRoleV.php');
                }
                else {
                    $result = adminModel::assignUserRole($userId, $role_id, $connect);

                    if ($result) {
                        header('Location:../../view/admin/aUserRoleAssignedV.php');
                    }
                    else {
                        header('Location:../../view/admin/aUserRoleNotAssignedV.php');
                    }
                }
            }
            else {
                header('Location:../../view/admin/aSystemFailedV.php');
            }
        }
        else {
            header('Location:../../view/admin/aSystemFailedV.php');
        }
    }

    elseif (isset($_POST['userList-submit'])) {
        $usernames = adminModel::userList($connect);

        if ($usernames) {
            session_start();
            $_SESSION['userlist'] = '';
            while ($user = mysqli_fetch_array($usernames)) {
                $_SESSION['userlist'] .= "<option value='".$user['empid']."'>".$user['empid']."</option>";
            }
            header('Location:../../view/admin/aRemoveUsersUserRoleV.php');
        }
        else {
            header('Location:../../view/admin/aSystemFailedV.php');
        }
    }

    elseif (isset($_POST['getUserRole-submit'])) {
        $empid = $_POST['empid'];
        $_SESSION['empid'] = $empid;
        $_SESSION['user_role'] = '';
        $_SESSION['role_id'] = '';
        
        $get_userId = adminModel::getUId ($empid, $connect);
        $result_userId = mysqli_fetch_assoc($get_userId);
        $userId = $result_userId['userId'];
        $_SESSION['userId'] = $userId;

        $get_userName = adminModel:: getUserName($userId, $connect);
        $result_userName = mysqli_fetch_assoc($get_userName);
        $userInitials = $result_userName['initials'];
        $userSname = $result_userName['sname'];
        $_SESSION['userName'] = $userInitials." ".$userSname;

        if ($userId) {
            $userRoles = adminModel::getUsersRoles ($userId, $connect);

            if ($userRoles) {
                while ($roles = mysqli_fetch_assoc($userRoles)) {
                    $role_id = $roles['role_id'];

                    $get_role_name = adminModel::getRoleName ($role_id, $connect);
                    $result_role_name = mysqli_fetch_assoc($get_role_name);
                    $role_name = $result_role_name['role_name'];

                    if ($result_role_name) {
                        $_SESSION['user_role'] .= "<tr>";
                        $_SESSION['user_role'] .= "<td>{$role_name}</td>";
                        $_SESSION['user_role'] .= "<td> <input type='checkbox' name='checkbox[]' value='".$role_id."'> </td>";
                        $_SESSION['user_role'] .= "</tr>";
                    }
                    else {
                        header('Location:../../view/admin/aSystemFailedV.php');
                    }
                }
                header('Location:../../view/admin/aUsersRolesV.php');
            }
            else {
                header('Location:../../view/admin/aSystemFailedV.php');
            }
        }
        else {
            header('Location:../../view/admin/aSystemFailedV.php');
        }
    }

    else if (isset($_POST['removeUserRole-submit'])) {
        $userId = $_SESSION['userId'];

        $get_checkBox = $_POST['checkbox'];
        $removeFlag = 0;
        $roles_count = 0;

        foreach ($get_checkBox as $role_id) {
            $roles_count = $roles_count + 1; 
            $removeRole = adminModel::removeRole ($role_id, $userId, $connect);
            if ($removeRole) {
                $removeFlag = $removeFlag + 1;
            }
        }
        if ($removeFlag == $roles_count) {
            header('Location:../../view/admin/aUsersRoleRemovedV.php');
        }
        elseif ($removeFlag==0 && $roles_count !=0) {
            header('Location:../../view/admin/aSystemFailedV.php');
        }
        else {
            header('Location:../../view/admin/aSystemFailedV.php');
        }
    }

    elseif (isset($_POST['removeUsersRole-submit'])) {
        
        $empid = $_POST['empid'];
        $userRole = $_POST['userRole'];

        $get_role_id = adminModel::getRoleID($userRole, $connect);
        $result_role_id = mysqli_fetch_assoc($get_role_id);
        $role_id = $result_role_id['role_id'];

        if ($role_id) {
            $result = adminModel::updateUserRole($empid, $role_id, $connect);

            if ($result) {
                header('Location:../../view/admin/aUsersRoleRemovedV.php');
            }
            else{
                header('Location:../../view/admin/aSystemFailedV.php');
            }
        }
        else {
            header('Location:../../view/admin/aSystemFailedV.php');
        }
    }
?>