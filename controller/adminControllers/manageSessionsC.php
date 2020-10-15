<?php 
    require_once('../../model/adminModel/manageSessionsModel.php');
    require_once('../../config/database.php');

    if(isset($_POST['addSession-submit'])) {
        $sessionType = $_POST['sessionType'];

        $result = adminModel::addSessionType($sessionType, $connect);

        if ($result) {
            echo "Session is added successfully";
        }
        else {
            echo "Session was not added";
        }
    }
?>