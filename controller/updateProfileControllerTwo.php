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

        $answers = Model::getRole($user_id, $connect);
        if ($answers) {
            $answer = mysqli_fetch_assoc($answers);
            $userRole = $answer['userRole'];
        }

        $userInfo = array('empid'=>8, 'initials'=>10, 'sname'=>50, 'email'=>100,'mobile'=>10, 'tp'=>10, 'dob'=>10,'designation'=>50, 'appointment'=>10);
		
		foreach ($userInfo as $info=>$maxLen) 
		{
            // echo $_POST[$info];
			if (strlen(trim($_POST[$info])) >  $maxLen) 
			{
                $errors[] = $info . ' must be less than ' . $maxLen . ' characters';
            }
        }
        
        $empid = mysqli_real_escape_string($connect, $_POST['empid']);
        // echo $empid;
        $result_set = Model::checkEmpidTwo($empid, $user_id, $connect);

        if ($result_set) {
            if(mysqli_num_rows($result_set)==1){
                $errors[] = 'Employee id already exists.'; 
            }
        }
        // print_r($result_set);
        // print_r($errors);
        if (empty($errors)) {
            $initials = mysqli_real_escape_string($connect, $_POST['initials']);
            $sname = mysqli_real_escape_string($connect, $_POST['sname']);
            $email = mysqli_real_escape_string($connect, $_POST['email']);
            $mobile = mysqli_real_escape_string($connect, $_POST['mobile']);
            $tp = mysqli_real_escape_string($connect, $_POST['tp']);
            $dob = mysqli_real_escape_string($connect, $_POST['dob']);
            $designation = mysqli_real_escape_string($connect, $_POST['designation']);
            $post = mysqli_real_escape_string($connect, $_POST['post']);
            $appointment = mysqli_real_escape_string($connect, $_POST['appointment']);

            $result = Model::update($user_id, $empid, $initials, $sname, $email, $mobile, $tp, $dob, $designation, $post, $appointment, $connect);

            if ($result) {
                    if ($userRole == "admin") {
                    	header('Location:../view/admin/aProfileUpdatedV.php');
					}
					else if ($userRole == "academicStaffMemb") {
						header('Location:../view/academicStaffMember/asmProfileUpdatedV.php');
                    }
                    else if ($userRole == "nonAcademicStaffMemb") {
						header('Location:../view/nonAcademicStaffMember/nasmProfileUpdatedV.php');
					}
					else if ($userRole == "attendanceMain") {
						header('Location:../view/attendanceMaintainer/amProfileUpdatedV.php');
					}
					else if ($userRole == "hallAllocationMain") {
						header('Location:../view/hallAllocationMaintainer/hamProfileUpdatedV.php');
					}
					else if ($userRole == "mahapolaSchemeMain") {
						header('Location:../view/mahapolaSchemeMaintainer/mmProfileUpdatedV.php');
					}
					else if ($userRole == "medicalSchemeMain") {
						header('Location:../view/medicalSchemeMaintainer/msmProfileUpdatedV.php');
                    }
                    else if ($userRole == "medicalSchemeMemb") {
						header('Location:../view/medicalSchemeMember/memProfileUpdatedV.php');
                    }
					else if ($userRole == "recordsViewer") {
						header('Location:../view/reportViewer/rvProfileUpdatedV.php');
					}
					else if ($userRole == "departmentHead") {
						header('Location:../view/departmentHead/dhProfileUpdatedV.php');
					}
					else if ($userRole == "medicalOfficer") {
						header('Location:../view/medicalOfficer/moProfileUpdatedV.php');
                    }
            }
            else {
                    if ($userRole == "admin") {
                    	header('Location:../view/admin/aProfileNotUpdatedV.php');
					}
					else if ($userRole == "academicStaffMemb") {
						header('Location:../view/academicStaffMember/asmProfileNotUpdatedV.php');
                    }
                    else if ($userRole == "nonAcademicStaffMemb") {
						header('Location:../view/nonAcademicStaffMember/nasmProfileNotUpdatedV.php');
					}
					else if ($userRole == "attendanceMain") {
						header('Location:../view/attendanceMaintainer/amProfileNotUpdatedV.php');
					}
					else if ($userRole == "hallAllocationMain") {
						header('Location:../view/hallAllocationMaintainer/hamProfileNotUpdatedV.php');
					}
					else if ($userRole == "mahapolaSchemeMain") {
						header('Location:../view/mahapolaSchemeMaintainer/mmProfileNotUpdatedV.php');
					}
					else if ($userRole == "medicalSchemeMain") {
						header('Location:../view/medicalSchemeMaintainer/msmProfileNotUpdatedV.php');
                    }
                    else if ($userRole == "medicalSchemeMemb") {
						header('Location:../view/medicalSchemeMember/memProfileNotUpdatedV.php');
                    }
					else if ($userRole == "recordsViewer") {
						header('Location:../view/reportViewer/rvProfileNotUpdatedV.php');
					}
					else if ($userRole == "departmentHead") {
						header('Location:../view/departmentHead/dhProfileNotUpdatedV.php');
					}
					else if ($userRole == "medicalOfficer") {
						header('Location:../view/medicalOfficer/moProfileNotUpdatedV.php');
                    }
                //header('Location:../view/admin/aProfileNotUpdatedV.php');
            }
        }

    }

?>