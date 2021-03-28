<?php
	
	session_start();
	require_once('../../model/basicModel/homeModel.php');
	require_once('../../config/database.php');
	
	$user_id = mysqli_real_escape_string($connect, $_GET['user_id']);

	$result_set = basicModel::view($user_id, $connect);

	if ($result_set) {
		$result = mysqli_fetch_assoc($result_set);

		if ($result['userRole_id'] == 1) {
            header('Location:../../view/admin/aHomeV.php');
		}
		else if ($result['userRole_id'] == 10) {
			header('Location:../../view/academicStaffMember/asmHomeV.php');
		}
		else if ($result['userRole_id'] == 11) {
			header('Location:../../view/nonAcademicStaffMember/nasmHomeV.php');
		}
		else if ($result['userRole_id'] == 9) {
			header('Location:../../view/attendanceMaintainer/amHomeV.php');
		}
		else if ($result['userRole_id'] == 2) {
			header('Location:../../view/hallAllocationMaintainer/hamHomeV.php');
		}
		else if ($result['userRole_id'] == 7) {
			header('Location:../../view/mahapolaSchemeMaintainer/mmHomeV.php');
		}
		else if ($result['userRole_id'] == 4) {
			header('Location:../../view/medicalSchemeMaintainer/msmHomeV.php');
		}
		else if ($result['userRole_id'] == 5) {
			header('Location:../../view/medicalSchemeMember/memHomeV.php');
		}
		else if ($result['userRole_id'] == 6) {
			header('Location:../../view/reportViewer/rvHomeV.php');
		}
		else if ($result['userRole_id'] == 8) {
			header('Location:../../view/departmentHead/dhHomeV.php');
		}
		else if ($result['userRole_id'] == 3) {
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