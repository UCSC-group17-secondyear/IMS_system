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

        $_SESSION['ds_students'] = "";
        $_SESSION['sessionId'] = "";
        $_SESSION['date'] = "";
        
        $sessionid = amModel::getSession($date, $subject, $connect);

        while ($si = mysqli_fetch_array($sessionid)) {
            $_SESSION['sessionId'] = $si['subject_session_id'];
        }

        $ds_students = amModel::fetchstudents($_SESSION['sessionId'], $connect);

        if (mysqli_num_rows($ds_students) > 0) {
        	while ($dss = mysqli_fetch_assoc($ds_students)) {
                amModel::setallstudents($_SESSION['sessionId'], $date, $dss['index_no'], $connect);
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

        $date = $_POST['date'];
        $subject = $_POST['subject'];

        $_SESSION['ds_students'] = "";
        $_SESSION['sessionId'] = "";
        $_SESSION['date'] = "";
        $_SESSION['attendance'] = "";
        
        $sessionid = amModel::getSession($date, $subject, $connect);

        while ($si = mysqli_fetch_array($sessionid)) {
            $_SESSION['sessionId'] = $si['subject_session_id'];
        }

        $ds_students = amModel::fetchstudents($_SESSION['sessionId'], $connect);

        if (mysqli_num_rows($ds_students) > 0) {
        	while ($dss = mysqli_fetch_assoc($ds_students)) {
                $_SESSION['attendance'] = "";
                $_SESSION['ds_students'] .= "<tr>";
                $_SESSION['ds_students'] .= "<td>{$dss['index_no']}</td>";
                $_SESSION['ds_students'] .= "<td>{$dss['initials']}</td>";
                $_SESSION['ds_students'] .= "<td>{$dss['last_name']}</td>";
                $presence = amModel::getpresence($dss['index_no'], $date, $_SESSION['sessionId'], $connect);
                while ($pr = mysqli_fetch_assoc($presence)) {
                    $_SESSION['attendance'] = $pr['attendance'];
                }
                if ($_SESSION['attendance'] == 0){
                    $_SESSION['ds_students'] .= "<td><input type='checkbox' name='smarked[]' value='{$dss['index_no']}' style='margin-left: auto; margin-right: auto;'></td>";
                } else {
                    $_SESSION['ds_students'] .= "<td><input type='checkbox' name='smarked[]' value='{$dss['index_no']}' style='margin-left: auto; margin-right: auto;' checked></td>";
                }
                $_SESSION['ds_students'] .= "</tr>";
            }
            header('Location:../../view/attendanceMaintainer/amUpdateAttendaceV.php');
        }
        
    } elseif(isset($_POST['saveattendance-submit'])) {

        if(!empty($_POST['smarked'])) {
            foreach($_POST['smarked'] as $sm){
                amModel::addstudentattendance($sm, $connect);
            }
        }
    	
        header('Location:../../view/attendanceMaintainer/amAttendanceAdded.php');

    } elseif(isset($_POST['remeoveAttendance-submit'])) {

    	$subject_code = $_POST['subject_code'];

    	$result = amModel::removeAttendance ($subject_code, $connect);

        if ($result) {
            header('Location:../../view/attendanceMaintainer/amAttendanceRemoved.php');
        }
        else {
            header('Location:../../view/attendanceMaintainer/amAttendanceNotRemoved.php');
        }

    }
?>