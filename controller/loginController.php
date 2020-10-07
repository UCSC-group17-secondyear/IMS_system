<?php 
    session_start();
    // include 'model/Model.php';
	// include 'config/database.php';
    require_once('../model/Model.php');
    require_once('../config/database.php');
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
            $empid = mysqli_real_escape_string($connect, $_POST['empid']);
            $password = mysqli_real_escape_string($connect, $_POST['password']);
            $hashed_password = sha1($password);

            $result = Model::getlogin($empid, $hashed_password, $connect);

            // print_r($result->fetch_assoc());
            if ($result) {
                if (mysqli_num_rows($result)==1) {
                    $key = mysqli_fetch_assoc($result);
                    $_SESSION['id'] = $key['id'];
                    $_SESSION['empid'] = $key['empid'];

                    if ($key['userRole'] == "admin") {
                    	header('Location:../view/admin/adminV.php');
					}
					else if ($key['userRole'] == "academicStaffMemb") {
						header('Location:../view/academicStaffMember/asmHomeV.php');
					}
					else if ($key['userRole'] == "attendanceMain") {
						header('Location:../view/attendanceMaintainer/amHomeV.php');
					}
					else if ($key['userRole'] == "hallAllocationMain") {
						header('Location:../view/hallAllocationMaintainer/hamHomeV.php');
					}
					else if ($key['userRole'] == "mahapolaSchemeMain") {
						header('Location:../view/mahapolaSchemeMaintainer/mmHomeV.php');
					}
					else if ($key['userRole'] == "medicalSchemeMain") {
						header('Location:../view/medicalSchemeMaintainer/msmHomeV.php');
					}
					else if ($key['userRole'] == "recordsViewer") {
						header('Location:../view/recordsViewer/recordsViwerUI.php');
					}
					else if ($key['userRole'] == "departmentHead") {
						header('Location:../view/departmentHead/dhHomeV.php');
					}
					else if ($key['userRole'] == "medicalOfficer") {
						header('Location:../view/medicalOfficer/medicalOfficerV.php');
					}
					else {
						echo "USER";
					}
                }
                else{
                    echo "More than one row";
                }
            }
            else {
            	echo "INVALID";
            }
        }
    }

?>