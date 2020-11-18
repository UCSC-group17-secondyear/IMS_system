<?php
    session_start();
    require_once('../model/Model.php');
    require_once('../config/database.php');

?>

<?php
    $errors = array();
    $user_id = '';

    if (isset($_POST['submit'])) {
        $user_id = mysqli_real_escape_string($connect, $_GET['user_id']);
        $_SESSION['userId'] = $user_id;
        // echo $user_id;

        $answers = Model::getRole($user_id, $connect);
        if ($answers) {
            $answer = mysqli_fetch_assoc($answers);
            $userRole = $answer['userRole'];
        }

        $userInfo = array('password'=>20, 'conpassword'=>20);
		
		foreach ($userInfo as $info=>$maxLen) 
		{
			if (strlen($_POST[$info]) > $maxLen) 
			{
                $errors[] = $info . ' must be less than ' . $maxLen . ' characters';
            }
        }
        
        $password = mysqli_real_escape_string($connect, $_POST['password']);
        $conpassword = mysqli_real_escape_string($connect, $_POST['conpassword']);

        if ($password!=$conpassword) {
            echo "Password and Confirm password are incorrect.";
        }
        
        if (empty($errors)) {
            $hashed_password = sha1($password);

            $result = Model::updatePasswordTwo($user_id, $hashed_password, $connect);

            if ($result) {
                    if ($userRole == "admin") {
                    	header('Location:../view/admin/aPasswordUpdatedV.php');
					}
					else if ($userRole == "academicStaffMemb") {
						header('Location:../view/academicStaffMember/asmPasswordUpdatedV.php');
                    }
                    else if ($userRole == "nonAcademicStaffMemb") {
						header('Location:../view/nonAcademicStaffMember/nasmPasswordUpdatedV.php');
					}
					else if ($userRole == "attendanceMain") {
						header('Location:../view/attendanceMaintainer/amPasswordUpdatedV.php');
					}
					else if ($userRole == "hallAllocationMain") {
						header('Location:../view/hallAllocationMaintainer/hamPasswordUpdatedV.php');
					}
					else if ($userRole == "mahapolaSchemeMain") {
						header('Location:../view/mahapolaSchemeMaintainer/mmPasswordUpdatedV.php');
					}
					else if ($userRole == "medicalSchemeMain") {
						header('Location:../view/medicalSchemeMaintainer/msmPasswordUpdatedV.php');
                    }
                    else if ($userRole == "medicalSchemeMemb") {
						header('Location:../view/medicalSchemeMember/memPasswordUpdatedV.php');
                    }
					else if ($userRole == "recordsViewer") {
						header('Location:../view/reportViewer/rvPasswordUpdatedV.php');
					}
					else if ($userRole == "departmentHead") {
						header('Location:../view/departmentHead/dhPasswordUpdatedV.php');
					}
					else if ($userRole == "medicalOfficer") {
						header('Location:../view/medicalOfficer/moPasswordUpdatedV.php');
                    }
                //header('Location:../view/admin/aPasswordUpdatedV.php');
            }
            else {
                    if ($userRole == "admin") {
                    	header('Location:../view/admin/aPasswordNotUpdatedV.php');
					}
					else if ($userRole == "academicStaffMemb") {
						header('Location:../view/academicStaffMember/asmPasswordNotUpdatedV.php');
                    }
                    else if ($userRole == "nonAcademicStaffMemb") {
						header('Location:../view/nonAcademicStaffMember/nasmPasswordNotUpdatedV.php');
					}
					else if ($userRole == "attendanceMain") {
						header('Location:../view/attendanceMaintainer/amPasswordNotUpdatedV.php');
					}
					else if ($userRole == "hallAllocationMain") {
						header('Location:../view/hallAllocationMaintainer/hamPasswordNotUpdatedV.php');
					}
					else if ($userRole == "mahapolaSchemeMain") {
						header('Location:../view/mahapolaSchemeMaintainer/mmPasswordNotUpdatedV.php');
					}
					else if ($userRole == "medicalSchemeMain") {
						header('Location:../view/medicalSchemeMaintainer/msmPasswordNotUpdatedV.php');
                    }
                    else if ($userRole == "medicalSchemeMemb") {
						header('Location:../view/medicalSchemeMember/memPasswordNotUpdatedV.php');
                    }
					else if ($userRole == "recordsViewer") {
						header('Location:../view/reportViewer/rvPasswordNotUpdatedV.php');
					}
					else if ($userRole == "departmentHead") {
						header('Location:../view/departmentHead/dhPasswordNotUpdatedV.php');
					}
					else if ($userRole == "medicalOfficer") {
						header('Location:../view/medicalOfficer/moPasswordNotUpdatedV.php');
                    }
                //header('Location:../view/admin/aPasswordNotUpdatedV.php');
            }
        }

    }

    

?>