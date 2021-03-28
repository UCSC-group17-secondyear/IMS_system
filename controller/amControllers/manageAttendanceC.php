<?php 
    session_start();
    require_once('../../model/amModel/amManageAttendanceModel.php');
    require_once('../../config/database.php');

    if (isset($_POST['enterupdateAttendance-submit'])) {

        $records = amModel::getsubjects($connect);
        $degrees = amModel::getdegrees($connect);
        $sessionTypes = amModel::getsessiontypes($connect);
        $sem_date = amModel::getSemesterdetails($connect);
        $_SESSION['min_date'] = '';
        $_SESSION['max_date'] = '';
        $_SESSION['subject'] = '';
        $_SESSION['degree'] = '';
        $_SESSION['session_type'] = '';

    	while ($record = mysqli_fetch_array($records)) {
            $_SESSION['subject'] .= "<option value='".$record['subject_id']."'>".$record['subject_code']." - ".$record['subject_name']."</option>";
        }

        while ($d = mysqli_fetch_array($degrees)) {
            $_SESSION['degree'] .= "<option value='".$d['degree_id']."'>".$d['degree_name']."</option>";
        }

        while ($st = mysqli_fetch_array($sessionTypes)) {
            $_SESSION['session_type'] .= "<option value='".$st['sessionTypeId']."'>".$st['sessionType']."</option>";
        }

        while ($sd = mysqli_fetch_array($sem_date)) {
            $_SESSION['min_date'] = $sd['start_date'];
            $_SESSION['max_date'] = $sd['end_date'];
        }

        header('Location:../../view/attendanceMaintainer/amEnterUpdateAttendaceSelectV.php');

    } elseif (isset($_POST['markattendance-submit'])) {

        $date = $_POST['date'];
        $subject = $_POST['subject'];
        $degree = $_POST['degree'];
        $sessiontype = $_POST['session_type'];

        $_SESSION['isMandatory'] = '';
        $_SESSION['semester'] = '';
        $_SESSION['aca_year'] = '';
        $_SESSION['ds_students'] = '';
        $_SESSION['at_subject'] = '';
        $_SESSION['at_degree'] = '';
        $_SESSION['at_sessiontype'] = '';
        $_SESSION['at_date'] = '';

        $_SESSION['at_subject'] = $subject;
        $_SESSION['at_date'] = $date;
        $_SESSION['at_degree'] = $degree;
        $_SESSION['at_sessiontype'] = $sessiontype;

        $subjectDetails = amModel::getsubjectDetails($subject, $degree, $connect);
        while ($sub = mysqli_fetch_array($subjectDetails)) {
            $_SESSION['isMandatory'] = $sub['mandatory_subject'];
            $_SESSION['semester'] = $sub['semester'];
            $_SESSION['aca_year'] = $sub['academic_year'];
        }

        $checkAttendance = amModel::checkAttendance($degree, $subject, $sessiontype, $date, $connect);
        while ($ca = mysqli_fetch_array($checkAttendance)) {
            $_SESSION['checkattendance'] = $ca['count'];
        }

        if ($_SESSION['checkattendance'] == 0){
            if ($_SESSION['isMandatory'] == 1) {
            
                $attstudents = amModel::getStudents($_SESSION['aca_year'], $_SESSION['semester'], $degree, $connect);
                if (mysqli_num_rows($attstudents) != 0) {
                    while ($as = mysqli_fetch_array($attstudents)) {
                        amModel::setallstudents($as['std_id'], $degree, $subject, $sessiontype, $date, $connect);
                        $_SESSION['ds_students'] .= "<tr>";
                        $_SESSION['ds_students'] .= "<td>{$as['index_no']}</td>";
                        $_SESSION['ds_students'] .= "<td>{$as['initials']}</td>";
                        $_SESSION['ds_students'] .= "<td>{$as['last_name']}</td>";
                        $_SESSION['ds_students'] .= "<td><input type='checkbox' name='smarked[]' value='{$as['std_id']}' style='margin-left: auto; margin-right: auto;'/></td>";
                        $_SESSION['ds_students'] .= "</tr>";

                        header('Location:../../view/attendanceMaintainer/amEnterAttendaceV.php');
                    }
                } else {
                    header('Location:../../view/attendanceMaintainer/amNoStudentsV.php');
                }

            } else {

                $attstudents = amModel::getStudentsnotMand($subject, $connect);
                if (mysqli_num_rows($attstudents) != 0) {
                    while ($as = mysqli_fetch_assoc($attstudents)) {
                        amModel::setallstudents($as['std_id'], $degree, $subject, $sessiontype, $date, $connect);
                        $_SESSION['ds_students'] .= "<tr>";
                        $_SESSION['ds_students'] .= "<td>{$as['index_no']}</td>";
                        $_SESSION['ds_students'] .= "<td>{$as['initials']}</td>";
                        $_SESSION['ds_students'] .= "<td>{$as['last_name']}</td>";
                        $_SESSION['ds_students'] .= "<td><input type='checkbox' name='smarked[]' value='{$as['std_id']}' style='margin-left: auto; margin-right: auto;'/></td>";
                        $_SESSION['ds_students'] .= "</tr>";
        
                        header('Location:../../view/attendanceMaintainer/amEnterAttendaceV.php');
                    }
                }
            }
        } else {
            header('Location:../../view/attendanceMaintainer/amEnterAttendanceWarningV.php');
        }
        

    } elseif(isset($_POST['updateattendance-submit'])) {

        $date = $_POST['date'];
        $subject = $_POST['subject'];
        $degree = $_POST['degree'];
        $sessiontype = $_POST['session_type'];
        $_SESSION['at_subject'] = '';
        $_SESSION['at_degree'] = '';
        $_SESSION['at_sessiontype'] = '';
        $_SESSION['at_date'] = '';

        $_SESSION['at_subject'] = $subject;
        $_SESSION['at_date'] = $date;
        $_SESSION['at_degree'] = $degree;
        $_SESSION['at_sessiontype'] = $sessiontype;

        $subjectDetails = amModel::getsubjectDetails($subject, $degree, $connect);
        while ($sub = mysqli_fetch_array($subjectDetails)) {
            $_SESSION['semester'] = $sub['semester'];
            $_SESSION['aca_year'] = $sub['academic_year'];
        }

        $_SESSION['ds_students'] = '';
        $_SESSION['attendance'] = '';

        $ds_students = amModel::fetchstudents($degree, $subject, $sessiontype, $date, $connect);

        if (mysqli_num_rows($ds_students) > 0) {
            while ($as = mysqli_fetch_assoc($ds_students)) {
                $_SESSION['attendance'] = "";
                $_SESSION['ds_students'] .= "<tr>";
                $_SESSION['ds_students'] .= "<td>{$as['index_no']}</td>";
                $_SESSION['ds_students'] .= "<td>{$as['initials']}</td>";
                $_SESSION['ds_students'] .= "<td>{$as['last_name']}</td>";
                $presence = amModel::getpresence($as['std_id'], $date, $degree, $subject, $sessiontype, $connect);
                while ($pr = mysqli_fetch_assoc($presence)) {
                    $_SESSION['attendance'] = $pr['attendance'];
                }
                if ($_SESSION['attendance'] == 0){
                    $_SESSION['ds_students'] .= "<td><input type='checkbox' name='smarked[]' value='{$as['std_id']}' style='margin-left: auto; margin-right: auto;'></td>";
                } else {
                    $_SESSION['ds_students'] .= "<td><input type='checkbox' name='smarked[]' value='{$as['std_id']}' style='margin-left: auto; margin-right: auto;' checked></td>";
                }
                $_SESSION['ds_students'] .= "</tr>";
            }
            header('Location:../../view/attendanceMaintainer/amUpdateAttendaceV.php');
        } else {
            header('Location:../../view/attendanceMaintainer/amUpdateAttendanceWarningV.php');
        }
        
    } elseif(isset($_POST['saveattendance-submit'])) {

        if(!empty($_POST['smarked'])) {
            foreach($_POST['smarked'] as $sm){
                amModel::addstudentattendance($sm, $_SESSION['at_degree'], $_SESSION['at_subject'], $_SESSION['at_sessiontype'], $_SESSION['at_date'], $connect);
                echo $sm;
            }
        }
    	
        header('Location:../../view/attendanceMaintainer/amAttendanceAdded.php');

    }
?>