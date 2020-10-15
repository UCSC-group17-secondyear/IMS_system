<?php 
    require_once('../../model/adminModel/manageMonthlySessionsModel.php');
    require_once('../../config/database.php');

    if(isset($_POST['addMSession-submit'])) {
        $year = $_POST['year'];
        $month = $_POST['month'];
        $subject = $_POST['subject'];
        $sessionType = $_POST['sessionType'];
        $numOfSessions = $_POST['numOfSessions'];

        $result = adminModel::addMonthlySession($year, $month, $subject, $sessionType, $numOfSessions,$connect);

        if ($result) {
            echo "Monthly Session is added successfully";
        }
        else {
            echo "Monthly Session was not added";
        }
    }
?>