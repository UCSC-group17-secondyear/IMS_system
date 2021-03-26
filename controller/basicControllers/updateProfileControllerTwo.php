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
            $userRole = $answer['userRole'];
        }

        $userInfo = array('empid'=>8, 'initials'=>10, 'sname'=>50, 'email'=>100,'mobile'=>10, 'tp'=>10, 'dob'=>10,'designation'=>50, 'appointment'=>10);
		
		foreach ($userInfo as $info=>$maxLen) 
		{
			if (strlen(trim($_POST[$info])) >  $maxLen) 
			{
                $errors[] = $info . ' must be less than ' . $maxLen . ' characters';
            }
        }
        
        $EmpId = mysqli_real_escape_string($connect, $_POST['empid']);

        $id = str_replace(' ', '', $EmpId);
		if (!(preg_match('/^[A-Za-z]+$/', $id)))
		{
			$errors[] = "Username should be a string";
			header('Location:../../view/admin/aUserNameNotaString.php');
			exit();
		}
        
        $empid = strtolower($EmpId);

        $result_set = basicModel::checkEmpidTwo($empid, $user_id, $connect);

        if ($result_set) {
            if(mysqli_num_rows($result_set)==1){
                $errors[] = 'Employee id already exists.'; 
                header('Location:../../view/admin/aEmpIdAlreadyExistsV.php');
            }
        }
        
        if (empty($errors)) {
            $initials = mysqli_real_escape_string($connect, $_POST['initials']);
            $sname = mysqli_real_escape_string($connect, $_POST['sname']);
            $Email = mysqli_real_escape_string($connect, $_POST['email']);
            $mobile = mysqli_real_escape_string($connect, $_POST['mobile']);
            $tp = mysqli_real_escape_string($connect, $_POST['tp']);
            $dob = mysqli_real_escape_string($connect, $_POST['dob']);
            $designation = mysqli_real_escape_string($connect, $_POST['designation']);
            $appointment = mysqli_real_escape_string($connect, $_POST['appointment']);

            $ini = str_replace(' ', '', $initials);
            if (!(preg_match('/^[A-Za-z]+$/', $ini)))
            {
                $errors[] = "Initials should be a string";
                header('Location:../../view/admin/aUserNameNotaString.php');
                exit();
            }

            $name = str_replace(' ', '', $sname);
            if (!(preg_match('/^[A-Za-z]+$/', $name)))
            {
                $errors[] = "Surname should be a string";
                header('Location:../../view/admin/aUserNameNotString.php');
                exit();
            }

            $email = strtolower($Email);

            $firstNumbs = substr($email, 0, -15);
            $lastMail = substr($email, 3);

            if ($lastMail != "@ucsc.cmb.ac.lk") {
                $errors[] = "University mail incorrect.";
                header('Location:../../view/admin/uniMailIncorrect.php');
                exit();
            }

            if ($firstNumbs != $empid) {
                $errors[] = "Username is incorrect.";
                header('Location:../../view/admin/userNameIncorrect.php');
                exit();
            }

            if (!(preg_match('/^[0-9]{10}+$/', $mobile))) 
            {
                $errors[] = "Mobile number is incorrect. The mobile number should have only ten digits.";
                header('Location:../../view/admin/mobilePhoneIncorrect.php');
                exit();
            }

            if (!(preg_match('/^[0-9]{10}+$/', $tp))) 
            {
                $errors[] = "Telephone number is incorrect. The telephone number should have only ten digits.";
                header('Location:../../view/admin/mobilePhoneIncorrect.php');
                exit();
            }

            $result = basicModel::update($user_id, $empid, $initials, $sname, $email, $mobile, $tp, $dob, $designation, $appointment, $connect);

            if ($result) {
                    if ($userRole == "admin") {
                    	header('Location:../../view/admin/aProfileUpdatedV.php');
					}
					else if ($userRole == "academicStaffMemb") {
						header('Location:../../view/academicStaffMember/asmProfileUpdatedV.php');
                    }
                    else if ($userRole == "nonAcademicStaffMemb") {
						header('Location:../../view/nonAcademicStaffMember/nasmProfileUpdatedV.php');
					}
					else if ($userRole == "attendanceMain") {
						header('Location:../../view/attendanceMaintainer/amProfileUpdatedV.php');
					}
					else if ($userRole == "hallAllocationMain") {
						header('Location:../../view/hallAllocationMaintainer/hamProfileUpdatedV.php');
					}
					else if ($userRole == "mahapolaSchemeMain") {
						header('Location:../../view/mahapolaSchemeMaintainer/mmProfileUpdatedV.php');
					}
					else if ($userRole == "medicalSchemeMain") {
						header('Location:../../view/medicalSchemeMaintainer/msmProfileUpdatedV.php');
                    }
                    else if ($userRole == "medicalSchemeMemb") {
						header('Location:../../view/medicalSchemeMember/memProfileUpdatedV.php');
                    }
					else if ($userRole == "recordsViewer") {
						header('Location:../../view/reportViewer/rvProfileUpdatedV.php');
					}
					else if ($userRole == "departmentHead") {
						header('Location:../../view/departmentHead/dhProfileUpdatedV.php');
					}
					else if ($userRole == "medicalOfficer") {
						header('Location:../../view/medicalOfficer/moProfileUpdatedV.php');
                    }
            }
            else {
                    if ($userRole == "admin") {
                    	header('Location:../../view/admin/aProfileNotUpdatedV.php');
					}
					else if ($userRole == "academicStaffMemb") {
						header('Location:../../view/academicStaffMember/asmProfileNotUpdatedV.php');
                    }
                    else if ($userRole == "nonAcademicStaffMemb") {
						header('Location:../../view/nonAcademicStaffMember/nasmProfileNotUpdatedV.php');
					}
					else if ($userRole == "attendanceMain") {
						header('Location:../../view/attendanceMaintainer/amProfileNotUpdatedV.php');
					}
					else if ($userRole == "hallAllocationMain") {
						header('Location:../../view/hallAllocationMaintainer/hamProfileNotUpdatedV.php');
					}
					else if ($userRole == "mahapolaSchemeMain") {
						header('Location:../../view/mahapolaSchemeMaintainer/mmProfileNotUpdatedV.php');
					}
					else if ($userRole == "medicalSchemeMain") {
						header('Location:../../view/medicalSchemeMaintainer/msmProfileNotUpdatedV.php');
                    }
                    else if ($userRole == "medicalSchemeMemb") {
						header('Location:../../view/medicalSchemeMember/memProfileNotUpdatedV.php');
                    }
					else if ($userRole == "recordsViewer") {
						header('Location:../../view/reportViewer/rvProfileNotUpdatedV.php');
					}
					else if ($userRole == "departmentHead") {
						header('Location:../../view/departmentHead/dhProfileNotUpdatedV.php');
					}
					else if ($userRole == "medicalOfficer") {
						header('Location:../../view/medicalOfficer/moProfileNotUpdatedV.php');
                    }
            }
        }

    }

?>