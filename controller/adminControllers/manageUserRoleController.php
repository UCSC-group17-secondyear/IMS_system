<?php 
    session_start();
    require_once('../../model/adminModel/manageUserRolesModel.php');
    require_once('../../config/database.php');

    if(isset($_POST['addUserrole-submit'])) {
        $userrole = $_POST['userRole'];
        $description = $_POST['description'];

        $roleExists = adminModel::checkRole($userrole, $connect);
        if ($roleExists) {
            print($roleExists);
        }
        // $rows = mysqli_num_rows($roleExists);
        // echo $roleExists;

        // if (mysqli_num_rows($roleExists) == 0) {
        //     $result = adminModel::addUserrole($userrole, $description, $connect);

        //     if ($result) {
        //         header('Location:../../view/admin/aUserRoleAdded.php');
        //         // echo "user role is added successfully";
        //     }
        // // }
        // else {
        //     header('Location:../../view/admin/aUserRoleExists.php');
        //     // echo "user role already exists.";
        // }
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
                $result1 = adminModel::getUId($empid, $connect);
                // $result1 = adminModel::getUId($empid, $connect);

                if ($result1) {
					if(mysqli_num_rows($result1)==1){
						$result2 = mysqli_fetch_assoc($result1);
						$user_id = $result2['userId'];
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
                            echo "User role updated successfully..";
                        }
                    }
				}
                
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

    // else if (isset($_POST['cancel-submit'])) {
    //     header('Location:../../view/admin/aHomeV.php');
    // }
?>