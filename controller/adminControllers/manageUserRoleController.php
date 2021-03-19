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
            $checkUsersRoles = adminModel::checkUsersRoles($empid, $role_id, $connect);
            $result_UsersRoles = mysqli_fetch_assoc($checkUsersRoles);
            $id = $result_UsersRoles['id'];

            if ($id) {
                echo "user is already assgined with the given role";
            }
            else {
                $result = adminModel::assignUserRole($empid, $role_id, $connect);

                if ($result) {
                    echo "user role is assigned";
                }
                else {
                    echo "user role is not assigned";
                }
            }
        }
        else {
            echo "system unabled to fetch user role details";
        }

        

        /*if ($result) {
            $result1 = adminModel::getUId($empid, $connect);

            if ($result1) {
				if(mysqli_num_rows($result1)==1){
					$result2 = mysqli_fetch_assoc($result1);
					echo $user_id = $result2['userId'];
                    $a_flag = 0;$asm_flag = 0;$am_flag = 0;$ham_flag = 0;$mm_flag = 0;$msm_flag = 0;$mem_flag = 0;$rv_flag = 0;$dh_flag = 0;$mo_flag = 0;
                    if ($userRole == "admin") {
                        $a_flag = 1;
                        $result3 = adminModel::setRoleByAdminOne($user_id, $a_flag, $connect);
                    }
                    else if ($userRole == "academicStaffMemb") {
                        $asm_flag = 1;
                        $result3 = adminModel::setRoleByAdminTwo($user_id, $asm_flag, $connect);
                    }
                    else if ($userRole == "attendanceMain") {
                        $am_flag = 1;
                        $result3 = adminModel::setRoleByAdminThree($user_id, $am_flag, $connect);
                    }
                    else if ($userRole == "hallAllocationMain") {
                        $ham_flag = 1;
                        $result3 = adminModel::setRoleByAdminFour($user_id, $ham_flag, $connect);
                    }
                    else if ($userRole == "mahapolaSchemeMain") {
                        $mm_flag = 1;
                        $result3 = adminModel::setRoleByAdminFive($user_id, $mm_flag, $connect);
                    }
                    else if ($userRole == "medicalSchemeMain") {
                        $msm_flag = 1;
                        $result3 = adminModel::setRoleByAdminSix($user_id, $msm_flag, $connect);
                    }
                    else if ($userRole == "medicalSchemeMemb") {
                        $mem_flag = 1;
                        $result3 = adminModel::setRoleByAdminSeven($user_id, $mem_flag, $connect);
                    }
                    else if ($userRole == "recordsViewer") {
                        $rv_flag = 1;
                        $result3 = adminModel::setRoleByAdminEight($user_id, $rv_flag, $connect);
                    }
                    else if ($userRole == "departmentHead") {
                        $dh_flag = 1;
                        $result3 = adminModel::setRoleByAdminNine($user_id, $dh_flag, $connect);
                    }
                    else if ($userRole == "medicalOfficer") {
                        $mo_flag = 1;
                        $result3 = adminModel::setRoleByAdminTen($user_id, $mo_flag, $connect);
                    }
                    
                    if ($result3) {
                        header('Location:../../view/admin/aUserRoleUpdatedV.php');
                    }
                    else {
                        header('Location:../../view/admin/aUserRoleNotUpdatedV.php');
                    }
                }
			}
            }
            else{
                header('Location:../../view/admin/aQueryFailedV.php');
            }
        }
        else {
            header('Location:../../view/admin/aQueryFailedV.php');
            // echo "Employee id is invalid.";
        }*/
    }

    else if (isset($_POST['removeUsersRole-submit'])) {
        
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
                header('Location:../../view/admin/aQueryFailedV.php');
            }
        }
        else {
            echo "fail to get role details";
        }
    }

    // else if (isset($_POST['cancel-submit'])) {
    //     header('Location:../../view/admin/aHomeV.php');
    // }
?>