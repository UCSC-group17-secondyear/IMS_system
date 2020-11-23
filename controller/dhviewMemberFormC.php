<?php
    session_start();
    require_once('../model/Model.php');
    require_once('../config/database.php');

?>

<?php
    $errors = array();
    $user_id = '';

    // $user_id = mysqli_real_escape_string($connect, $_GET['user_id']);
    // $email = Model::getemailbyid($user_id, $connect);
    if(isset($_GET['user_id'])) {
        $user_id = mysqli_real_escape_string($connect, $_GET['user_id']);
        $_SESSION['user_id'] = $user_id;
        
        $result_set = Model::funct($user_id, $connect);

        if ($result_set) {
            if (mysqli_num_rows($result_set)==1) {
                $result = mysqli_fetch_assoc($result_set);
                $_SESSION['empid'] = $result['empid'];
                $_SESSION['initials'] = $result['initials'];
                $_SESSION['sname'] = $result['sname'];
                $_SESSION['email'] = $result['email'];
                $_SESSION['designation'] = $result['designation'];
                $_SESSION['department'] = $result['department'];
                $_SESSION['healthcondition'] = $result['healthcondition'];
                $_SESSION['civilstatus'] = $result['civilstatus'];
                $_SESSION['scheme'] = $result['schemename'];
                $_SESSION['member_type'] = $result['member_type'];

                header('Location:../view/departmentHead/dhViewMemberV.php');
            }
        }else {
            echo "query failed";
        }
    }

    if (isset($_POST['acceptmr-submit'])) {
        $result = Model::requestaccept($_SESSION['user_id'], $connect);

        if ($result) {
            $to_email = $_SESSION['email']; //methenta ennone athanin view karana user ge email address eka
            $subject = "Membership Acceptance by Department Head";
            $body =  "Your request for the membership of Medical scheme have been accepted by the department head.";
            $headers = "From: ims.ucsc@gmail.com";

            $sendMail = mail($to_email, $subject, $body, $headers);
            echo "Your membership request has been sent for the approval. You will be inform about the approval later. Thank you.";
        } else {
            echo "Failed result";
        }
    }

    if (isset($_POST['declinemr-submit'])) {
        $result = Model::requestdecline($_SESSION['user_id'], $connect);

        if ($result) {
            $to_email = $_SESSION['email']; //methenta ennone athanin view karana user ge email address eka
            $subject = "Membership Declination by Department Head";
            $body =  "Your request for the membership of Medical scheme have been declined by the department head because the mentioned department is wrong. Try again.";
            $headers = "From: ims.ucsc@gmail.com";

            $sendMail = mail($to_email, $subject, $body, $headers);
            echo "Your membership request has been sent for the approval. You will be inform about the approval later. Thank you.";
        } else {
            echo "Failed result";
        }
    }    

?>