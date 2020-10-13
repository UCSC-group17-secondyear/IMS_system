<?php
    session_start();
    require_once('../../model/amModel.php');
    require_once('../../config/database.php');

    if (isset($_POST['saveStd-submit'])) {
        $index_no = $_POST['$index_no'];
        $registrstion_no = $_POST['$registrstion_no'];
        $initials = $_POST['initials'];
        $last_name = $_POST['last_name'];
        $email = $_POST['email'];
        $academic_year = $_POST['academic_year'];
        $degree = $_POST['degree'];

        $result = amModel::updateStd($index_no, $registrstion_no, $initials, $last_name, $email, $academic_year, $degree, $connect);

        if ($result) {
            echo "Changes updated successfully.";
        }
        else {
            echo "Failed result";
        }
    }
?>