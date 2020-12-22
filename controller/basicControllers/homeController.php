<?php
	
	session_start();
	require_once('../../model/basicModel/homeModel.php');
	require_once('../../config/database.php');
	
	$user_id = mysqli_real_escape_string($connect, $_GET['user_id']);

	$result_set = basicModel::view($user_id, $connect);

	if ($result_set) {
		$result = mysqli_fetch_assoc($result_set);

		if ($result['userRole'] == "admin") {
            header('Location:../../view/admin/aHomeV.php');
		}
		else if ($result['userRole'] == "academicStaffMemb") {
			header('Location:../../view/academicStaffMember/asmHomeV.php');
		}
		else if ($result['userRole'] == "nonAcademicStaffMemb") {
			header('Location:../../view/nonAcademicStaffMember/nasmHomeV.php');
		}
		else if ($result['userRole'] == "attendanceMain") {
			header('Location:../../view/attendanceMaintainer/amHomeV.php');
		}
		else if ($result['userRole'] == "hallAllocationMain") {
			header('Location:../../view/hallAllocationMaintainer/hamHomeV.php');
		}
		else if ($result['userRole'] == "mahapolaSchemeMain") {
			header('Location:../../view/mahapolaSchemeMaintainer/mmHomeV.php');
		}
		else if ($result['userRole'] == "medicalSchemeMain") {
			header('Location:../../view/medicalSchemeMaintainer/msmHomeV.php');
		}
		else if ($result['userRole'] == "medicalSchemeMemb") {
			header('Location:../../view/medicalSchemeMember/memHomeV.php');
		}
		else if ($result['userRole'] == "recordsViewer") {
			header('Location:../../view/reportViewer/rvHomeV.php');
		}
		else if ($result['userRole'] == "departmentHead") {
			header('Location:../../view/departmentHead/dhHomeV.php');
		}
		else if ($result['userRole'] == "medicalOfficer") {
			header('Location:../../view/medicalOfficer/moHomeV.php');
		}
		else {
			echo "USER";
		}
	}
	else {
		echo "Query failed..";
	}

?>