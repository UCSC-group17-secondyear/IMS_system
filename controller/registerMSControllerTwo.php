<?php
    session_start();
    require_once('../model/Model.php');
    require_once('../config/database.php');

    $errors = array();
    $user_id = '';

    if (isset($_POST['registerMS-submit'])) {
        $user_id = mysqli_real_escape_string($connect, $_GET['user_id']);

        $userInfo = array('department'=>20, 'health_condition'=>100, 'civil_status'=>10, 'scheme_name'=>7);
		
		foreach ($userInfo as $info=>$maxLen) {
            if (strlen(trim($_POST[$info])) >  $maxLen) {
                $errors[] = $info . ' must be less than ' . $maxLen . ' characters';
            }
        }
        
        if (empty($errors)) {
            $health_condition = mysqli_real_escape_string($connect, $_POST['health_condition']);
            $civil_status = mysqli_real_escape_string($connect, $_POST['civil_status']);
            $scheme_name = mysqli_real_escape_string($connect, $_POST['scheme_name']);
            $department = mysqli_real_escape_string($connect, $_POST['department']);
    
            $result = Model::registerMS($user_id, $department, $health_condition, $civil_status, $scheme_name, $connect);

            if ($result) {
                echo "Your membership request has been sent for the approval. You will be inform about the approval later. Thank you.";
            } else {
                echo "Failed result";
            }
        }
    }
?>