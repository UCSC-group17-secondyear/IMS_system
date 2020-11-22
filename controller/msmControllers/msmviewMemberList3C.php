<?php
    session_start();
    require_once('../../config/database.php');
    require_once('../../model/Model.php');

    $user_id = mysqli_real_escape_string($connect, $_GET['mem_index']);
    $mem_user_id = mysqli_real_escape_string($connect, $_GET['viewed_member']);
    $result_set = Model::view($user_id, $connect);
    $records = Model::viewuf($user_id, $connect);

    if ($result_set && $records) {
        if(mysqli_num_rows($result_set)==1 && mysqli_num_rows($records)==1){
            $result = mysqli_fetch_assoc($result_set);
            $record = mysqli_fetch_assoc($records);
            $_SESSION['userId'] = $result['userId'];
            $_SESSION['empid'] = $result['empid'];
            $_SESSION['initials'] = $result['initials'];
            $_SESSION['sname'] = $result['sname'];
            $_SESSION['deps'] = $record['department'];
            $_SESSION['health_condition'] = $record['healthcondition'];
            $_SESSION['membert'] = $record['member_type'];
            $_SESSION['civil_status'] = $record['civilstatus'];
            $_SESSION['scheme'] = $record['schemename'];
            $_SESSION['form_submission_date'] = $record['form_submission_date'];
            $_SESSION['acceptance_status'] = $record['acceptance_status'];

            header('Location:../../view/medicalSchemeMaintainer/msmViewMemberDetailsV.php');
        } 
    }

    if (isset($_POST['approvemf-submit'])) {
        $result = msmModel::requestaccept($mem_user_id, $connect);

        if ($result) {
            $to_email = $_SESSION['email'];
            $subject = "Membership Acceptance";
            $body =  "Your request for the membership of Medical scheme have been accepted.";
            $headers = "From: ims.ucsc@gmail.com";

            $sendMail = mail($to_email, $subject, $body, $headers);
            echo "Your membership request has been sent for the approval. You will be inform about the approval later. Thank you.";
        } else {
            echo "Failed result";
        }
    }

    if (isset($_POST['declinemf-submit'])) {
        $result = msmModel::requestdecline($_SESSION['user_id'], $connect);

        if ($result) {
            $to_email = $_SESSION['email'];
            $subject = "Membership Declination";
            $body =  "Your request for the membership of Medical scheme have been declined because the mentioned department is wrong. Try again.";
            $headers = "From: ims.ucsc@gmail.com";

            $sendMail = mail($to_email, $subject, $body, $headers);
            echo "Your membership request has been sent for the approval. You will be inform about the approval later. Thank you.";
        } else {
            echo "Failed result";
        }
    } 

?>