<?php
    session_start();
    require_once('../../model/basicModel/manageProfileModel.php');
    require_once('../../config/database.php');

?>

<?php
    $errors = array();
    $user_id = '';

    if (isset($_POST['submit'])) {
        $user_id = mysqli_real_escape_string($connect, $_GET['user_id']);
        $_SESSION['userId'] = $user_id;

        $answers = basicModel::getRole($user_id, $connect);
        if ($answers) {
            $answer = mysqli_fetch_assoc($answers);
            $userRole = $answer['userRole_id'];
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
			$errors[] = "Password and Confirm password are incorrect.";
            echo "Password and Confirm password are incorrect.";
		}
		
		if(!(preg_match('/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)[a-zA-Z\d]{8,}$/',$password))){
			$errors[]="Password require Minimum eight characters, at least one uppercase letter, one lowercase letter, one number";
			echo "Password require Minimum eight characters, at least one uppercase letter, one lowercase letter, one number";
		}
        
        if (empty($errors)) {
            $hashed_password = sha1($password);

            $result = basicModel::updatePasswordTwo($user_id, $hashed_password, $connect);

            if ($result) {
                    if ($userRole == 1) {
                    	header('Location:../../view/admin/aPasswordUpdatedV.php');
					}
					else if ($userRole == 10) {
						header('Location:../../view/academicStaffMember/asmPasswordUpdatedV.php');
                    }
                    else if ($userRole == 11) {
						header('Location:../../view/nonAcademicStaffMember/nasmPasswordUpdatedV.php');
					}
					else if ($userRole == 9) {
						header('Location:../../view/attendanceMaintainer/amPasswordUpdatedV.php');
					}
					else if ($userRole == 2) {
						header('Location:../../view/hallAllocationMaintainer/hamPasswordUpdatedV.php');
					}
					else if ($userRole == 7) {
						header('Location:../../view/mahapolaSchemeMaintainer/mmPasswordUpdatedV.php');
					}
					else if ($userRole == 4) {
						header('Location:../../view/medicalSchemeMaintainer/msmPasswordUpdatedV.php');
                    }
                    else if ($userRole == 5) {
						header('Location:../../view/medicalSchemeMember/memPasswordUpdatedV.php');
                    }
					else if ($userRole == 6) {
						header('Location:../../view/reportViewer/rvPasswordUpdatedV.php');
					}
					else if ($userRole == 8) {
						header('Location:../../view/departmentHead/dhPasswordUpdatedV.php');
					}
					else if ($userRole == 3) {
						header('Location:../../view/medicalOfficer/moPasswordUpdatedV.php');
                    }
            }
            else {
                    if ($userRole == 1) {
                    	header('Location:../../view/admin/aPasswordNotUpdatedV.php');
					}
					else if ($userRole == 10) {
						header('Location:../../view/academicStaffMember/asmPasswordNotUpdatedV.php');
                    }
                    else if ($userRole == 11) {
						header('Location:../../view/nonAcademicStaffMember/nasmPasswordNotUpdatedV.php');
					}
					else if ($userRole == 9) {
						header('Location:../../view/attendanceMaintainer/amPasswordNotUpdatedV.php');
					}
					else if ($userRole == 2) {
						header('Location:../../view/hallAllocationMaintainer/hamPasswordNotUpdatedV.php');
					}
					else if ($userRole == 7) {
						header('Location:../../view/mahapolaSchemeMaintainer/mmPasswordNotUpdatedV.php');
					}
					else if ($userRole == 4) {
						header('Location:../../view/medicalSchemeMaintainer/msmPasswordNotUpdatedV.php');
                    }
                    else if ($userRole == 5) {
						header('Location:../../view/medicalSchemeMember/memPasswordNotUpdatedV.php');
                    }
					else if ($userRole == 6) {
						header('Location:../../view/reportViewer/rvPasswordNotUpdatedV.php');
					}
					else if ($userRole == 8) {
						header('Location:../../view/departmentHead/dhPasswordNotUpdatedV.php');
					}
					else if ($userRole == 3) {
						header('Location:../../view/medicalOfficer/moPasswordNotUpdatedV.php');
                    }
                
            }
		}
		else {
			if ($userRole == 1) {
                header('Location:../../view/admin/aPasswordNotUpdatedV.php');
			}
			else if ($userRole == 10) {
				header('Location:../../view/academicStaffMember/asmPasswordNotUpdatedV.php');
            }
        	else if ($userRole == 11) {
				header('Location:../../view/nonAcademicStaffMember/nasmPasswordNotUpdatedV.php');
			}
			else if ($userRole == 9) {
				header('Location:../../view/attendanceMaintainer/amPasswordNotUpdatedV.php');
			}
			else if ($userRole == 2) {
				header('Location:../../view/hallAllocationMaintainer/hamPasswordNotUpdatedV.php');
			}
			else if ($userRole == 7) {
				header('Location:../../view/mahapolaSchemeMaintainer/mmPasswordNotUpdatedV.php');
			}
			else if ($userRole == 4) {
				header('Location:../../view/medicalSchemeMaintainer/msmPasswordNotUpdatedV.php');
            }
            else if ($userRole == 5) {
				header('Location:../../view/medicalSchemeMember/memPasswordNotUpdatedV.php');
            }
			else if ($userRole == 6) {
				header('Location:../../view/reportViewer/rvPasswordNotUpdatedV.php');
			}
			else if ($userRole == 8) {
				header('Location:../../view/departmentHead/dhPasswordNotUpdatedV.php');
			}
			else if ($userRole == 3) {
				header('Location:../../view/medicalOfficer/moPasswordNotUpdatedV.php');
            }
		}

    }

    

?>