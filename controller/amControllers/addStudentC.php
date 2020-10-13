<?php 
    require_once('../../model/amModel.php');
    require_once('../../config/database.php');

    if(isset($_POST['addStudent-submit'])) {
        $index_no = $_POST['index_no'];
        $registrstion_no = $_POST['registrstion_no'];
        $initials = $_POST['initials'];
        $last_name = $_POST['last_name'];
        $email = $_POST['email'];
        $academic_year = $_POST['academic_year'];
        $degree = $_POST['degree'];

        $result = amModel::addStudent($index_no, $registrstion_no, $initials, $last_name, $email, $academic_year, $degree, $connect);

        if ($result) {
            echo "user role is added successfully";
        }
        else {
            echo "user role DID not added";
        }
    }
    else {
        echo "button not clicked";
    }
?>