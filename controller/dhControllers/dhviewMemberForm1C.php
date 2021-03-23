<?php
    session_start();
    require_once('../../config/database.php');
    require_once('../../model/dhModel/dhViewRequestedFormModel.php');

    $errors = array();
    $viewmember = '';

    if(isset($_GET['viewmember'])) {
        $viewmember = mysqli_real_escape_string($connect, $_GET['viewmember']);
        $_SESSION['viewed_member_userid'] = $viewmember;
        
        $memberdetails = dhModel::getDetails($viewmember, $connect);

        if ($memberdetails) {
            if (mysqli_num_rows($memberdetails) == 1) {
                $md = mysqli_fetch_assoc($memberdetails);
                
                $_SESSION['empid'] = $md['empid'];
                $_SESSION['initials'] = $md['initials'];
                $_SESSION['sname'] = $md['sname'];
                $_SESSION['email'] = $md['email'];
                $_SESSION['designation'] = $md['designation'];
                $_SESSION['department'] = $md['department'];
                $_SESSION['healthcondition'] = $md['healthcondition'];
                $_SESSION['civilstatus'] = $md['married'];
                $_SESSION['scheme'] = $md['schemeName'];
                $_SESSION['member_type'] = $md['member_type'];
                $_SESSION['acceptance_status'] = $md['acceptance_status'];
            }
            header('Location:../../view/departmentHead/dhViewMemberV.php');
        }
    }
?>