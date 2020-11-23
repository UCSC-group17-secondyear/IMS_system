<?php
    session_start();
    require_once('../../config/database.php');
    require_once('../../model/msmModel.php');

    $mem_user_id = mysqli_real_escape_string($connect, $_GET['viewed_member']);
    $mem_email = msmModel::getmail($mem_user_id, $connect);

    if (isset($_POST['approvemf-submit'])) {
        $result = msmModel::requestaccept($mem_user_id, $connect);

        if ($result) {
            $to_email = $mem_email;
            $subject = "Membership Acceptance";
            $body =  "Your request for the membership of Medical scheme have been accepted  by the Medical Scheme Maintainer. Now you are a medical scheme member of IMSystem.";
            $headers = "From: ims.ucsc@gmail.com";

            $sendMail = mail($to_email, $subject, $body, $headers);
            
            header('Location:../../view/medicalSchemeMaintainer/msmAcceptedSuccesV.php');
        }
    }

    if (isset($_POST['declinemf-submit'])) {
        $result = msmModel::requestdecline($mem_user_id, $connect);

        if ($result) {
            $to_email = $mem_email;
            $subject = "Membership Declination";
            $body =  "Your request for the membership of Medical scheme have been declined by the Medical Scheme Maintainer because the mentioned department is wrong. Try again.";
            $headers = "From: ims.ucsc@gmail.com";

            $sendMail = mail($to_email, $subject, $body, $headers);
            
            header('Location:../../view/medicalSchemeMaintainer/msmDeclinedSuccesV.php');
        }
    } 

?>