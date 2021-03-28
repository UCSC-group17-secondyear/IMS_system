<?php
    session_start();
    require_once('../../config/database.php');
    require_once('../../model/hamModel/hamManageWeeklyTTModel.php');

    if (isset($_POST['entertt-submit'])) {
        
        $semesters = hamModel::getAllsemesters($connect);
        $degrees = hamModel::getAlldegrees($connect);
        $halls = hamModel::getAllHalls($connect);

        $_SESSION['subject_with_code'] = "";
        $_SESSION['acayear_with_sem'] = "";
        $_SESSION['allhalls'] = "";
        $_SESSION['degree'] = "";
        $_SESSION['wtt'] = "";
        
        if ($semesters && $degrees && $halls) {
            while ($sem = mysqli_fetch_array($semesters)) {
                $_SESSION['acayear_with_sem'] .= "<option value='".$sem['sem_id']."'>".$sem['academic_year']." - ".$sem['semester']."</option>";
            }

            while ($deg = mysqli_fetch_array($degrees)) {
                $_SESSION['degree'] .= "<option value='".$deg['degree_id']."'>".$deg['degree_name']."</option>";
            }

            header('Location:../../view/hallAllocationMaintainer/hamEnterTimeTableV.php');
        }

    } elseif (isset($_POST['enternext-submit'])) {

        $semester = mysqli_real_escape_string($connect, $_POST['semester']);
        $degree = mysqli_real_escape_string($connect, $_POST['degree']);
        $year = mysqli_real_escape_string($connect, $_POST['year']);

        $_SESSION['wtt_semester'] = $semester;
        $_SESSION['wtt_degree'] = $degree;
        $_SESSION['wtt_year'] = $year;

        $halls = hamModel::getAllHalls($connect);

        $_SESSION['subject_with_code'] = "";
        $_SESSION['allhalls'] = "";
        $_SESSION['wtt'] = "";
        
        if ($halls) {
            $subjects = hamModel::getthesubjectsbyid($degree, $year, $semester, $connect);
            if ($subjects){
                while ($sub = mysqli_fetch_array($subjects)) {
                    $_SESSION['subject_with_code'] .= "<option value='".$sub['subject_id']."'>".$sub['subject_code']." - ".$sub['subject_name']."</option>";
                }
            }
    
            while ($hall = mysqli_fetch_array($halls)) {
                $_SESSION['allhalls'] .= "<option value='".$hall['hall_id']."'>".$hall['hall_name']."</option>";
            }

            header('Location:../../view/hallAllocationMaintainer/hamEnterDetailsTTV.php');
        }
    
    } elseif (isset($_POST['savett-submit'])) {
        
        $starttime = mysqli_real_escape_string($connect, $_POST['starttime']);
        $endtime = mysqli_real_escape_string($connect, $_POST['endtime']);
        $subject = mysqli_real_escape_string($connect, $_POST['subject']);
        $hall = mysqli_real_escape_string($connect, $_POST['hall']);
        $day = mysqli_real_escape_string($connect, $_POST['day']);

        $added = hamModel::addWeeklyTT($_SESSION['wtt_semester'], $_SESSION['wtt_degree'], $_SESSION['wtt_year'], $starttime, $endtime, $subject, $hall, $day, $connect);
        
        if ($added) {
            header('Location:../../view/hallAllocationMaintainer/hamEnterTTsuccesV.php');
        }
    
    } elseif (isset($_POST['updateremovett-submit'])) {

        $semesters = hamModel::getAllsemesters($connect);
        $degrees = hamModel::getAlldegrees($connect);
        $_SESSION['acayear_with_sem'] = "";
        $_SESSION['degree'] = "";
        
        if ($semesters && $degrees) {
            while ($sem = mysqli_fetch_array($semesters)) {
                $_SESSION['acayear_with_sem'] .= "<option value='".$sem['sem_id']."'>".$sem['academic_year']." - ".$sem['semester']."</option>";
            }

            while ($deg = mysqli_fetch_array($degrees)) {
                $_SESSION['degree'] .= "<option value='".$deg['degree_id']."'>".$deg['degree_name']."</option>";
            }

            header('Location:../../view/hallAllocationMaintainer/hamUpdateTimeTableSelectV.php');
        }

    } elseif (isset($_POST['updatett-submit'])) {

        $_SESSION['viewd_tt'] = '';

        $semester = mysqli_real_escape_string($connect, $_POST['semester']);
		$year = mysqli_real_escape_string($connect, $_POST['year']);
        $degree = mysqli_real_escape_string($connect, $_POST['degree']);

        $viewdtt = hamModel::viewTimeTable($semester, $year, $degree, $connect);

        if ($viewdtt) {
            while($t = mysqli_fetch_assoc($viewdtt)) {
               $_SESSION['viewd_tt'] .= "<tr>";
               $_SESSION['viewd_tt'] .= "<td>{$t['day']}</td>";
               $_SESSION['viewd_tt'] .= "<td>{$t['start_time']}</td>";
               $_SESSION['viewd_tt'] .= "<td>{$t['end_time']}</td>";
               $_SESSION['viewd_tt'] .= "<td>{$t['subject_name']}</td>";
               $_SESSION['viewd_tt'] .= "<td>{$t['hall_name']}</td>";
               $_SESSION['viewd_tt'] .= "<td><a class=\"green\" href=\"../../controller/hamControllers/hamManageWeeklyTTC.php?ttevent_update={$t['wtt_id']}\">Update</a></td>";
               $_SESSION['viewd_tt'] .= "<td><a class=\"red\" href=\"../../controller/hamControllers/hamManageWeeklyTTC.php?ttevent_delete={$t['wtt_id']}\" onclick=\"return confirm('Are you sure?');\">Delete</a></td>";
               $_SESSION['viewd_tt'] .= "</tr>";
            }

            header('Location:../../view/hallAllocationMaintainer/hamWeeklyTimeTableV.php');
        } else {
            header('Location:../../view/hallAllocationMaintainer/hamNoWeeklyTimeTableV.php');
        }

    } elseif (isset($_GET['ttevent_update'])) {
        
        $update_wtt = mysqli_real_escape_string($connect, $_GET['ttevent_update']);

        $result = hamModel::getEvent($update_wtt , $connect);
        $halls = hamModel::getAllHalls($connect);
        $_SESSION['acayear_with_sem'] = "";
        $_SESSION['subject_with_code'] = "";
        $_SESSION['allhalls'] = "";

        $_SESSION['u_wtt_id'] = "";
        $_SESSION['u_wtt_id'] = $update_wtt;
        
        if ($halls && $result) {
            while ($um = mysqli_fetch_assoc($result)) {
                $_SESSION['u_degree'] = $um['degree_name'];
                $_SESSION['u_year'] = $um['year'];
                $_SESSION['u_academic_year'] = $um['academic_year'];
                $_SESSION['u_semester'] = $um['semester'];
                $_SESSION['u_start_time'] = $um['start_time'];
                $_SESSION['u_end_time'] = $um['end_time'];
            }

            $subjects = hamModel::getthesubjects($_SESSION['u_degree'], $_SESSION['u_year'], $_SESSION['u_semester'], $connect);
            if ($subjects){
                while ($sub = mysqli_fetch_array($subjects)) {
                    $_SESSION['subject_with_code'] .= "<option value='".$sub['subject_id']."'>".$sub['subject_code']." - ".$sub['subject_name']."</option>";
                }
            }
    
            while ($hall = mysqli_fetch_array($halls)) {
                $_SESSION['allhalls'] .= "<option value='".$hall['hall_id']."'>".$hall['hall_name']."</option>";
            }

            header('Location:../../view/hallAllocationMaintainer/hamUpdateTimeTableV.php');
        }

    } elseif (isset($_POST['update-event-submit'])) {

        $wtt = mysqli_real_escape_string($connect, $_GET['eventwtt']);
        
        $starttime = mysqli_real_escape_string($connect, $_POST['starttime']);
		$endtime = mysqli_real_escape_string($connect, $_POST['endtime']);
        $subject = mysqli_real_escape_string($connect, $_POST['subject']);
        $hall = mysqli_real_escape_string($connect, $_POST['hall']);
        $day = mysqli_real_escape_string($connect, $_POST['day']);

        $updated = hamModel::updateEvent($wtt, $starttime, $endtime, $subject, $hall, $day, $connect);
        if ($updated) {
            header('Location:../../view/hallAllocationMaintainer/hamSuccesV.php');
        } else {
            header('Location:../../view/hallAllocationMaintainer/hamUnsuccesV.php');
        }

    } elseif (isset($_GET['ttevent_delete'])) {
        
        $delete_tt = mysqli_real_escape_string($connect, $_GET['ttevent_delete']);
        $deleted = hamModel::deleteEvent($delete_tt, $connect);

        if ($deleted) {
            header('Location:../../view/hallAllocationMaintainer/hamSuccesV.php');
        } else {
            header('Location:../../view/hallAllocationMaintainer/hamUnsuccesV.php');
        }

    }

?>