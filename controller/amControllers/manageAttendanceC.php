<?php 
    session_start();
    require_once('../../model/amModel/amManageAttendanceModel.php');
    require_once('../../config/database.php');

    if(isset($_POST['enterupdateAttendance-submit'])) {

        $records = amModel::getsubjects($connect);
        $_SESSION['subject'] = '';

    	while ($record = mysqli_fetch_array($records)) {
            $_SESSION['subject'] .= "<option value='".$record['subject_code']."'>".$record['subject_code']."</option>";
        }
        header('Location:../../view/attendanceMaintainer/amEnterUpdateAttendaceSelectV.php');

    } elseif(isset($_POST['markattendance-submit'])) {

        $date = $_POST['date'];
        $subject = $_POST['subject'];
        $students = amModel::fetchstudents($date, $subject, $connect);

    	if ($students) {
    		while ($s = mysqli_fetch_assoc($students)) {
                $_SESSION['member_info'] .= "<tr>";
                $_SESSION['member_info'] .= "<td>{$s['empid']}</td>";
                $_SESSION['member_info'] .= "<td>{$s['initials']}</td>";
                $_SESSION['member_info'] .= "<td>{$s['sname']}</td>";
                $_SESSION['member_info'] .= "<td>{$s['department']}</td>";
                $_SESSION['member_info'] .= "<td>{$s['healthcondition']}</td>";
                $_SESSION['member_info'] .= "<td>{$s['civilstatus']}</td>";
                $_SESSION['member_info'] .= "<td><a class=\"red\" href=\"../../controller/msmControllers/msmRemoveSelectedMemberC.php?mem_delete={$s['userId']}\" onclick=\"return confirm('Are you sure?');\">Delete</a></td>";
                $_SESSION['member_info'] .= "</tr>";
            }
            header('Location:../../view/medicalSchemeMaintainer/msmMedicalMemberlistV.php');
    	} else {
            echo "subject_code does not exists";
        }
        
    } elseif(isset($_POST['updateattendance-submit'])) {

    	$subject_code = $_POST['subject_code'];

    	$fetchAttendance = amModel::fetchAttendance($subject_code, $connect);

    	if (mysqli_num_rows($fetchAttendance) == 1) {
    		session_start();
    		$result = mysqli_fetch_assoc($fetchAttendance);
            $_SESSION['subject_code'] = $result['subject_code'];
            $_SESSION['subject_name'] = $result['subject_name'];
            $_SESSION['degree'] = $result['degree'];

            header('Location:../../view/attendanceMaintainer/amDeleteUpdateAttendanceV.php');
    	} else {
    		echo "subject_code does not exists";
        }
        
    } elseif(isset($_POST['addAttendance-submit'])) {
    	$subject_code = $_POST['subject_code'];
    	$subject_name = $_POST['subject_name'];
    	$degree = $_POST['degree'];

    	$checkSubCode = amModel::checkSubCode ($subject_code, $connect);
    	if (mysqli_num_rows($checkSubCode) == 1) {
    		header('Location:../../view/attendanceMaintainer/amAttendanceExists.php');
            // echo "subject_code exists";
        }
        else {
        	$result = amModel::addAttendance ($subject_code, $subject_name, $degree, $connect);

            if ($result) {
                header('Location:../../view/attendanceMaintainer/amAttendanceAdded.php');
            }
            else {
                header('Location:../../view/attendanceMaintainer/amAttendanceNotAdded.php');
            }
        }
    } elseif(isset($_POST['updateAttendance-submit'])) {
    	$subject_code = $_POST['subject_code'];
    	$subject_name = $_POST['subject_name'];
    	$degree = $_POST['degree'];

    	$result = amModel::saveUpdatedAttendance ($subject_code, $subject_name, $degree, $connect);

        if ($result) {
            header('Location:../../view/attendanceMaintainer/amAttendanceUpdated.php');
        }
        else {
            header('Location:../../view/attendanceMaintainer/amAttendanceNotUpdated.php');
        }
    }

    elseif(isset($_POST['remeoveAttendance-submit'])) {
    	$subject_code = $_POST['subject_code'];

    	$result = amModel::removeAttendance ($subject_code, $connect);

        if ($result) {
            header('Location:../../view/attendanceMaintainer/amAttendanceRemoved.php');
        }
        else {
            header('Location:../../view/attendanceMaintainer/amAttendanceNotRemoved.php');
        }
    }

    elseif(isset($_POST['viewAttendances-submit'])) {
    	session_start();
        $_SESSION['subjects_list'] = '';

        $records = amModel::viewAttendances ($connect);
        
        if ($records) {
        	while ($record = mysqli_fetch_assoc($records)) {
                $_SESSION['subject_list'] .= "<tr>";
                $_SESSION['subject_list'] .= "<td>{$record['$subject_code']}</td>";
                $_SESSION['subject_list'] .= "<td>{$record['$subject_name']}</td>";
                $_SESSION['subject_list'] .= "<td>{$record['$degree']}</td>";
                $_SESSION['subject_list'] .= "</tr>";

                header('Location:../../view/attendanceMaintainer/amViewAttendances.php');
            }
        }
        
        else {
        	header('Location:../../view/attendanceMaintainer/amNoAttendancesAvailable.php');
        }
    }

    else {
    	echo "no button clicked";
    }