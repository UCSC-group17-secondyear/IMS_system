<?php 
    session_start();
    require_once('../../model/amModel/amManageAttendanceModel.php');
    require_once('../../config/database.php');

    if (isset($_POST['enterupdateAttendance-submit'])) {

        $degrees = amModel::getdegrees($connect);
        $sem_date = amModel::getSemesterdetails($connect);
        $_SESSION['min_date'] = '';
        $_SESSION['max_date'] = '';
        $_SESSION['degree'] = '';

        while ($d = mysqli_fetch_array($degrees)) {
            $_SESSION['degree'] .= "<option value='".$d['degree_id']."'>".$d['degree_name']."</option>";
        }

        while ($sd = mysqli_fetch_array($sem_date)) {
            $_SESSION['min_date'] = $sd['start_date'];
            $_SESSION['max_date'] = $sd['end_date'];
        }

        header('Location:../../view/attendanceMaintainer/amEnterUpdateAttendaceSelectV.php');

    } elseif (isset($_POST['next-submit'])) {

        $degree = $_POST['degree'];
        $date = $_POST['date'];

        $_SESSION['att_degree'] = $degree;
        $_SESSION['att_date'] = $date;

        $_SESSION['selected_subjects']="";
        $_SESSION['session_type'] = "";

        $sessionTypes = amModel::getsessiontypes($connect);
        while ($st = mysqli_fetch_array($sessionTypes)) {
            $_SESSION['session_type'] .= "<option value='".$st['sessionTypeId']."'>".$st['sessionType']."</option>";
        }

        if ($sessionTypes) {
            $day = amModel::getDayName($date, $connect);
            while ($d = mysqli_fetch_array($day)) {
                $_SESSION['day_name'] = $d['day_name'];
                echo $d['day_name'];
            }

            if ($day) {
                $getsubjectsonthatday = amModel::getsubjectsonthatday($_SESSION['day_name'], $degree, $connect);
                if ($getsubjectsonthatday) {
                    while ($gs = mysqli_fetch_array($getsubjectsonthatday)) {
                        $_SESSION['selected_subjects'] .= "<option value='".$gs['subject_id']."'>".$gs['subject_code']." - ".$gs['subject_name']."</option>";
                    }
                    header('Location:../../view/attendanceMaintainer/amEnterUpdateAttendance2.php');
                } else {
                    header('Location:../../view/attendanceMaintainer/amNosubjectV.php');
                }

            }
        }

    } elseif (isset($_POST['markattendance-submit'])) {

        $subject = $_POST['subject'];
        $sessiontype = $_POST['session_type'];
        $degree = $_SESSION['att_degree'];

        $_SESSION['isMandatory'] = '';
        $_SESSION['semester'] = '';
        $_SESSION['aca_year'] = '';
        $_SESSION['ds_students'] = '';
        $_SESSION['at_subject'] = '';
        $_SESSION['at_sessiontype'] = '';
        
        echo $_SESSION['att_degree'];
        echo $_SESSION['att_date'];

        $_SESSION['at_subject'] = $subject;
        $_SESSION['at_sessiontype'] = $sessiontype;

        $subjectDetails = amModel::getsubjectDetails($subject, $_SESSION['att_degree'], $connect);
        while ($sub = mysqli_fetch_array($subjectDetails)) {
            $_SESSION['isMandatory'] = $sub['mandatory_subject'];
            $_SESSION['semester'] = $sub['semester'];
            $_SESSION['aca_year'] = $sub['academic_year'];
        }

        $checkAttendance = amModel::checkAttendance($_SESSION['att_degree'], $subject, $sessiontype, $_SESSION['att_date'], $connect);
        
        if (mysqli_num_rows($checkAttendance) == 0) {
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
            }
        }
    	
        header('Location:../../view/attendanceMaintainer/amAttendanceAdded.php');

    }
?>