<?php
    session_start();
    require_once('../../config/database.php');
    require_once('../../model/dhModel.php');

    $userid = mysqli_real_escape_string($connect, $_GET['amiamember']);
    $member_mail = dhModel::getmail($userid, $connect);

    if (isset($_POST['acceptdms-submit'])) {
        $result = dhModel::requestaccept($userid, $connect);
        $mm = mysqli_fetch_assoc($member_mail);

        if ($result) {
            $to_email = $mm['email'];
            $subject = "Membership Acceptance by Department Head";
            $body =  "Your request for the membership of Medical scheme have been accepted by the department head.";
            $headers = "From: ims.ucsc@gmail.com";

            $sendMail = mail($to_email, $subject, $body, $headers);

            header('Location:../../view/departmentHead/dhAcceptedSuccesV.php');
        }
    }

    if (isset($_POST['declinedms-submit'])) {
        $result = dhModel::requestdecline($userid, $connect);
        $mm = mysqli_fetch_assoc($member_mail);

        if ($result) {
            $to_email = $mm['email'];
            $subject = "Membership Declination by Department Head";
            $body =  "Your request for the membership of Medical scheme have been declined by the department head because the mentioned department is wrong. Try again.";
            $headers = "From: ims.ucsc@gmail.com";

            $sendMail = mail($to_email, $subject, $body, $headers);

            header('Location:../../view/departmentHead/dhDeclinedSuccessV.php');
        }
    }
?>