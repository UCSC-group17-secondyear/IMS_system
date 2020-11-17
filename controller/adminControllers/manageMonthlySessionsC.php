<?php
    session_start();
    require_once('../../model/adminModel/manageMonthlySessionsModel.php');
    require_once('../../config/database.php');

    if(isset($_POST['addMSession-submit'])) {
        $subject = $_POST['subject'];
        $calendarYear = $_POST['calendarYear'];
        $month = $_POST['month'];
        $sessionType = $_POST['sessionType'];
        $numOfSessions = $_POST['numOfSessions'];

        $checkMonthlySession = adminModel::checkMonthlySession($subject, $calendarYear, $month, $sessionType, $connect);

        if (mysqli_num_rows($checkMonthlySession)==1) {
            header('Location:../../view/admin/aMonthlySessionExists.php');
        }

        else {
            $result = adminModel::addMonthlySession($subject, $calendarYear, $month, $sessionType, $numOfSessions, $connect);

            if ($result) { 
                header('Location:../../view/admin/aMonthlySessionAdded.php');
            }
            else {
                header('Location:../../view/admin/aMonthlySessionNotAdded.php');
            }
        }
    }
    
    elseif(isset($_POST['assignSession-submit'])) {
        $_SESSION['sessionTypes'] = '';

        $records = adminModel::sessionType($connect);

        if (mysqli_num_rows($records) != 0) {
            while ($record = mysqli_fetch_array($records)) {
                $_SESSION['sessionTypes'] .= "<option value='".$record['sessionType']."'>".$record['sessionType']."</option>";
            }
            header('Location:../../view/admin/aAddSessionPerMonthV.php');
        }
        else {
            header('Location:../../view/admin/aNoSessionTypesAvailableV.php');
        }
    }

    elseif(isset($_POST['monthlySessionDetails-submit'])) {
        $_SESSION['monthlySession'] = '';

        $subject = $_POST['subject'];
        $calendarYear = $_POST['calendarYear'];
        $month = $_POST['month'];
        $sessionType = $_POST['sessionType'];

        $records = adminModel::checkMonthlySession($subject, $calendarYear, $month, $sessionType, $connect);

        if ($records) {
            while ($record = mysqli_fetch_assoc($records)) {
                $_SESSION['monthlySession'] .= "<tr>";
                $_SESSION['monthlySession'] .= "<td>{$record['subject']}</td>";
                $_SESSION['monthlySession'] .= "<td>{$record['calendarYear']}</td>";
                $_SESSION['monthlySession'] .= "<td>{$record['month']}</td>";
                $_SESSION['monthlySession'] .= "<td>{$record['sessionType']}</td>";
                $_SESSION['monthlySession'] .= "<td>{$record['numOfSessions']}</td>";
                $_SESSION['monthlySession'] .= "<tr>";
                header('Location:../../view/admin/aViewMonthlySessionV.php');
            }
        }
        else {
            header('Location:../../view/admin/aNomSessionsAssignedV.php');
        }
    }

    else if(isset($_POST['getMonthlySessionDetails-submit'])) {
        $subject = $_POST['subject'];
        $calendarYear = $_POST['calendarYear'];
        $month = $_POST['month'];
        $sessionType = $_POST['sessionType'];

        $result_set = adminModel::checkMonthlySession($subject, $calendarYear, $month, $sessionType, $connect);

        if ($result_set) {
            if(mysqli_num_rows($result_set)==1){
                $result = mysqli_fetch_assoc($result_set);
                $_SESSION['sessionMid'] = $result['sessionMid'];
                $_SESSION['subject'] = $result['subject'];
                $_SESSION['calendarYear'] = $result['calendarYear'];
                $_SESSION['month'] = $result['month'];
                $_SESSION['sessionType'] = $result['sessionType'];
                $_SESSION['numOfSessions'] = $result['numOfSessions'];

                header('Location:../../view/admin/aUpdateRemoveSessionPerMonthFoundV.php');
            }
            else {
                header('Location:../../view/admin/aQueryFailedV.php');
            }
        }
        else {
            header('Location:../../view/admin/aNomSessionsAssignedV.php');
        }
    }

    elseif(isset($_POST['updateMonthlySession-submit'])) {
        $sessionMid = $_POST['sessionMid'];
        $subject = $_POST['subject'];
        $calendarYear = $_POST['calendarYear'];
        $month = $_POST['month'];
        $sessionType = $_POST['sessionType'];
        $numOfSessions = $_POST['numOfSessions'];

        $result_set = adminModel::updateMonthlySession($sessionMid, $subject, $calendarYear, $month, $sessionType, $numOfSessions, $connect);

        if ($result_set) {
            header('Location:../../view/admin/aMonthlySessionUpdated.php');
        }
        else {
            header('Location:../../view/admin/aMonthlySessionNotUpdated.php');
        }
    }

    elseif(isset($_POST['removeMonthlySession-submit'])) {
        $sessionMid = $_POST['sessionMid'];
        // $subject = $_POST['subject'];
        // $calendarYear = $_POST['calendarYear'];
        // $month = $_POST['month'];
        // $sessionType = $_POST['sessionType'];
        // $numOfSessions = $_POST['numOfSessions'];

        $result_set = adminModel::removeMonthlySession($sessionMid, $connect);

        if ($result_set) {
            header('Location:../../view/admin/aMonthlySessionRemoved.php');
        }
        else {
            header('Location:../../view/admin/aMonthlySessionNotRemoved.php');
        }
    }
?>