<?php
    session_start();
    require_once('../model/Model.php');
    require_once('../config/database.php');

    $errors = array();
    $user_id = '';

    if (isset($_POST['registerMS-submit'])) {
        $user_id = mysqli_real_escape_string($connect, $_GET['user_id']);

        $userInfo = array('department'=>20, 'member_type'=>15, 'health_condition'=>100, 'civil_status'=>10, 'scheme_name'=>7);
		
		foreach ($userInfo as $info=>$maxLen) {
            if (strlen(trim($_POST[$info])) >  $maxLen) {
                $errors[] = $info . ' must be less than ' . $maxLen . ' characters';
            }
        }
        
        if (empty($errors)) {
            $department = mysqli_real_escape_string($connect, $_POST['department']);
            $member_type = mysqli_real_escape_string($connect, $_POST['member_type']);
            $health_condition = mysqli_real_escape_string($connect, $_POST['health_condition']);
            $civil_status = mysqli_real_escape_string($connect, $_POST['civil_status']);
            $scheme_name = mysqli_real_escape_string($connect, $_POST['scheme_name']);
            
            $result = Model::registerMS($user_id, $department, $health_condition, $civil_status, $scheme_name, $member_type, $connect);

            if ($result) {
                $to_email = $_SESSION['email'];
                $subject = "Membership Request";
                $body = "I have requested the membership for the Medical Scheme.";
                $headers = "From: ims.ucsc@gmail.com";

                $sendMail = mail($to_email, $subject, $body, $headers);
                echo "Your membership request has been sent for the approval. You will be inform about the approval later. Thank you.";
            } else {
                echo "Failed result";
            }
        }
    }
?>