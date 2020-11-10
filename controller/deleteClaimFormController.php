<?php
    session_start();
    require_once('../model/Model.php');
    require_once('../config/database.php');
?>

<?php

        $moEmail = Model::getMoEmail($connect);
        $email = mysqli_fetch_array($moEmail);
        $new_mail = $email['email'];

        if (isset($_GET['claim_form_no'])) {
            $user_id = mysqli_real_escape_string($connect, $_GET['user_id']);
            $claim_form_no = mysqli_real_escape_string($connect, $_GET['claim_form_no']);
            
            $result = Model::deleteClaimForm($claim_form_no,$user_id, $connect);
    
            if ($result) {
                $to_email = $new_mail;
                $subject = "New claim form submitted.";
                $body = "New OPD claim form submited by {$user_id}";
                $headers = "From: imsSystem17@gmail.com";

                mail($to_email, $subject, $body, $headers);
                echo "Deleted successfully...";
                //header('Location:../view/medicalSchemeMember/memDeleteClaimFormSuccessV.php');
            }
           
        }
?>