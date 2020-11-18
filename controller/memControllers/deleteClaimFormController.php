<?php
    session_start();
    require_once('../../config/database.php');
    require_once('../../model/memModel.php');
?>

<?php

        $moEmail = memModel::getMoEmail($connect);
        $email = mysqli_fetch_array($moEmail);
        $new_mail = $email['email'];

        if (isset($_GET['claim_form_no'])) {
            $user_id = mysqli_real_escape_string($connect, $_GET['user_id']);
            $claim_form_no = mysqli_real_escape_string($connect, $_GET['claim_form_no']);
            
            $result = memModel::deleteClaimForm($claim_form_no,$user_id, $connect);
    
            if ($result) {
                $to_email = $new_mail;
                $subject = "Claim Form Deleted.";
                $body = "Claim Form {$claim_form_no} has been deleted by {$user_id}";
                $headers = "From: imsSystem17@gmail.com";

                mail($to_email, $subject, $body, $headers);
                //echo "Deleted successfully...";
                header('Location:../../view/medicalSchemeMember/memDeleteClaimFormSuccessV.php');
            }
           
        }
?>