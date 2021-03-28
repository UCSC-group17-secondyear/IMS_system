<?php 
    session_start();
    require_once('../../model/basicModel/authenticationModel.php');
    require_once('../../config/database.php');
?>

<?php

    if(isset($_POST['submit'])) {
        $errors = array();

        if(!isset($_POST['empid']) || strlen(trim($_POST['empid']))<1) {
            $errors[] = 'Username is Missing / Invalid.';
        }
        if(!isset($_POST['password']) || strlen(trim($_POST['password']))<1) {
            $errors[] = 'Password is Missing / Invalid.';
        }

        if (empty($errors)) {
            $EmpId = mysqli_real_escape_string($connect, $_POST['empid']);
            $password = mysqli_real_escape_string($connect, $_POST['password']);
            $hashed_password = sha1($password);
            $empid = strtolower($EmpId);

            $result = basicModel::getlogin($empid, $hashed_password, $connect);

            if ($result) {
                if (mysqli_num_rows($result)==1) {
                    $key = mysqli_fetch_assoc($result);
                    
                    $_SESSION['userId'] = $key['userId'];
                    $_SESSION['empid'] = $key['empid'];

                    if ($key['userRole_id'] == 1) {
                    	header('Location:../../view/admin/aHomeV.php');
					}
					else if ($key['userRole_id'] == 10) {
						header('Location:../../view/academicStaffMember/asmHomeV.php');
                    }
                    else if ($key['userRole_id'] == 11) {
						header('Location:../../view/nonAcademicStaffMember/nasmHomeV.php');
					}
					else if ($key['userRole_id'] == 9) {
						header('Location:../../view/attendanceMaintainer/amHomeV.php');
					}
					else if ($key['userRole_id'] == 2) {
						header('Location:../../view/hallAllocationMaintainer/hamHomeV.php');
					}
					else if ($key['userRole_id'] == 7) {
						header('Location:../../view/mahapolaSchemeMaintainer/mmHomeV.php');
					}
					else if ($key['userRole_id'] == 4) {
						header('Location:../../view/medicalSchemeMaintainer/msmHomeV.php');
                    }
					else if ($key['userRole_id'] == 6) {
						header('Location:../../view/reportViewer/rvHomeV.php');
					}
					else if ($key['userRole_id'] == 8) {
						header('Location:../../view/departmentHead/dhHomeV.php');
					}
                    else if ($key['userRole_id'] == 5) {
						header('Location:../../view/medicalSchemeMember/memHomeV.php');
					}
					else if ($key['userRole_id'] == 3) {
						header('Location:../../view/medicalOfficer/moHomeV.php');
                    }
					else {
                        header('Location:../../view/basic/noUserRoleAssigned.php');
						// echo "Admin have not yet selected the user role to you.";
					}
                }
                else if(mysqli_num_rows($result)==0){
                    header('Location:../../view/basic/invalidPwd.php');
                    // echo "Password is incorrect.";
                }
            }
            else {
            	header('Location:../../view/basic/invalidUser.php');
                // echo "INVALID";
            }
        }
    }
    else {
        header('Location:../../view/basic/loginFailed.php');
    }
?>
