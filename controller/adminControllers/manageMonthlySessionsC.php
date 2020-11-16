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
            // echo "monthly sesison already exists";
        }

        else {
            $result = adminModel::addMonthlySession($subject, $calendarYear, $month, $sessionType, $numOfSessions, $connect);

            if ($result) { 
                header('Location:../../view/admin/aMonthlySessionAdded.php');
                // echo "Monthly Session is added successfully";
            }
            else {
                header('Location:../../view/admin/aMonthlySessionNotAdded.php');
                // echo "Monthly Session was not added";
            }
        }
    }
    
    elseif(isset($_POST['assignSession-submit'])) {
        $_SESSION['sessionTypes'] = '';

        $records = adminModel::sessionType($connect);

        if ($records) {
            while ($record = mysqli_fetch_array($records)) {
                $_SESSION['sessionTypes'] .= "<option value='".$record['sessionType']."'>".$record['sessionType']."</option>";
            }
            header('Location:../../view/admin/aAddSessionPerMonthV.php');
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
            echo "sorry there are no sessions assigned yet";
        }
    }

    // elseif(isset($_POST['viewMonthlySessions-submit'])) {
    //     $_SESSION['monthlySessionTypes'] = '';

    //     $records = adminModel::viewMonthlySessions($connect);
    // }
?>