<?php
    session_start();
    require_once('../../model/dhModel.php');
    require_once('../../config/database.php');

    if (isset($_POST['acceptmr-submit'])) {
        $result = Model::requestaccept($_SESSION['user_id'], $connect);

        if ($result) {
            $to_email = $_SESSION['email'];
            $subject = "Membership Acceptance by Department Head";
            $body =  "Your request for the membership of Medical scheme have been accepted by the department head.";
            $headers = "From: ims.ucsc@gmail.com";

            $sendMail = mail($to_email, $subject, $body, $headers);
            echo "Your membership request has been sent for the approval. You will be inform about the approval later. Thank you.";

            header('Location:../../view/departmentHead/dhAcceptedSuccessV.php');
        } else {
            echo "Failed result";
        }
    }

    if (isset($_POST['declinemr-submit'])) {
        $result = Model::requestdecline($_SESSION['user_id'], $connect);

        if ($result) {
            $to_email = $_SESSION['email'];
            $subject = "Membership Declination by Department Head";
            $body =  "Your request for the membership of Medical scheme have been declined by the department head because the mentioned department is wrong. Try again.";
            $headers = "From: ims.ucsc@gmail.com";

            $sendMail = mail($to_email, $subject, $body, $headers);
            echo "Your membership request has been sent for the approval. You will be inform about the approval later. Thank you.";

            header('Location:../../view/departmentHead/dhDeclinedSuccessV.php');
        } else {
            echo "Failed result";
        }
    }
?>