<?php
    session_start();
    require_once('../../config/database.php');
    require_once('../../model/dhModel/dhViewRequestedFormModel.php');

    if (isset($_GET['viewmember'])) {

        $viewmember = mysqli_real_escape_string($connect, $_GET['viewmember']);
        $_SESSION['viewed_member_userid'] = $viewmember;
        
        $memberdetails = dhModel::getDetails($viewmember, $connect);

        if (mysqli_num_rows($memberdetails) == 1) {
            $md = mysqli_fetch_assoc($memberdetails);
            
            $_SESSION['empid'] = $md['empid'];
            $_SESSION['initials'] = $md['initials'];
            $_SESSION['sname'] = $md['sname'];
            $_SESSION['email'] = $md['email'];
            $_SESSION['designation'] = $md['designation_name'];
            $_SESSION['department'] = $md['department'];
            $_SESSION['healthcondition'] = $md['healthcondition'];
            $_SESSION['civilstatus'] = $md['married'];
            $_SESSION['scheme'] = $md['schemeName'];
            $_SESSION['member_type'] = $md['member_type'];
            $_SESSION['acceptance_status'] = $md['acceptance_status'];
        }
        header('Location:../../view/departmentHead/dhViewMemberV.php');

    } elseif (isset($_GET['amiamember'])) {
        $userid = mysqli_real_escape_string($connect, $_GET['amiamember']);
        $member_mail = dhModel::getmail($userid, $connect);

        if (isset($_POST['acceptedms-submit'])) {
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
    }
?>