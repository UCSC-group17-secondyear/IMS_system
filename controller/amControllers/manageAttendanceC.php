<?php 
    session_start();
    require_once('../../model/amModel/amManageAttendanceModel.php');
    require_once('../../config/database.php');

    if (isset($_POST['enterupdateAttendance-submit'])) {

        $records = amModel::getsubjects($connect);
        $_SESSION['subject'] = '';

    	while ($record = mysqli_fetch_array($records)) {
            $_SESSION['subject'] .= "<option value='".$record['subject_code']."'>".$record['subject_code']." - ".$record['subject_name']."</option>";
        }
        header('Location:../../view/attendanceMaintainer/amEnterUpdateAttendaceSelectV.php');

    } elseif (isset($_POST['markattendance-submit'])) {

        $date = $_POST['date'];
        $subject = $_POST['subject'];
        $mark = $_POST['mark'];

        $_SESSION['ds_students'] = "";
        $_SESSION['sessionId'] = "";
        $_SESSION['date'] = "";
        
        $sessionid = amModel::getSession($date, $subject, $connect);

        while ($si = mysqli_fetch_array($sessionid)) {
            $_SESSION['sessionId'] = $si['subject_session_id'];
        }
        $_SESSION['date'] = $date;

        $ds_students = amModel::fetchstudents($_SESSION['sessionId'], $connect);

        if (mysqli_num_rows($ds_students) > 0) {
        	while ($dss = mysqli_fetch_assoc($ds_students)) {
                $_SESSION['ds_students'] .= "<tr>";
                $_SESSION['ds_students'] .= "<td>{$dss['index_no']}</td>";
                $_SESSION['ds_students'] .= "<td>{$dss['initials']}</td>";
                $_SESSION['ds_students'] .= "<td>{$dss['last_name']}</td>";
                $_SESSION['ds_students'] .= "<td><input type='checkbox' name='smarked[]' value='{$dss['index_no']}' style='margin-left: auto; margin-right: auto;'/></td>";
                $_SESSION['ds_students'] .= "</tr>";
            }
            header('Location:../../view/attendanceMaintainer/amEnterAttendaceV.php');
        }
        
    } elseif(isset($_POST['updateattendance-submit'])) {

    	// $date = $_POST['date'];
        // $subject = $_POST['subject'];
        // $mark = $_POST['mark'];
        // $_SESSION['ds_students'] = "";
        // $_SESSION['student_marked'] = "";
        // $ds_students = amModel::fetchstudents($date, $subject, $connect);

        // if (mysqli_num_rows($ds_students) > 0) {
        // 	while ($dss = mysqli_fetch_assoc($ds_students)) {
        //         $_SESSION['ds_students'] .= "<tr>";
        //         $_SESSION['ds_students'] .= "<td>{$dss['index_no']}</td>";
        //         $_SESSION['ds_students'] .= "<td>{$dss['initials']}</td>";
        //         $_SESSION['ds_students'] .= "<td>{$dss['last_name']}</td>";
        //         $_SESSION['ds_students'] .= "<td><input type='checkbox' style='margin-left: auto; margin-right: auto;'/></td>";
        //         $_SESSION['ds_students'] .= "</tr>";
        //     }
        //     header('Location:../../view/attendanceMaintainer/amEnterAttendaceV.php');
        // }
        
    } elseif(isset($_POST['saveattendance-submit'])) {
        
        $sessionid = $_SESSION['sessionId'];
        $date = $_SESSION['date'];
        $x = 0;

        if(!empty($_POST['smarked'])) {
            foreach($_POST['smarked'] as $sm){
                amModel::addstudentattendance($sessionid, $date, $sm, $connect);
            }
        }
    	
        header('Location:../../view/attendanceMaintainer/amAttendanceAdded.php');

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