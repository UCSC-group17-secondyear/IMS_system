<?php
    session_start();
	require_once('../../config/database.php');
    require_once('../../model/Model.php');

    $errors = array();
    $user_id = mysqli_real_escape_string($connect, $_GET['user_id']);
    $result_set = Model::view($user_id, $connect);

    $records = Model::scheme($connect);
    $scheme_1_details = Model::getscheme('Scheme 1', $connect);
    $scheme_2_details = Model::getscheme('Scheme 2', $connect);
    $scheme_3_details = Model::getscheme('Scheme 3', $connect);
    $_SESSION['scheme'] = '';
    $_SESSION['children'] = '';

    if (isset($_POST['registerNext-submit'])) {
        $user_id = mysqli_real_escape_string($connect, $_GET['user_id']);

        $userInfo = array('department'=>20, 'member_type'=>15, 'health_condition'=>100, 'civil_status'=>10, 'scheme'=>8);
		
		foreach ($userInfo as $info=>$maxLen) {
            if (strlen(trim($_POST[$info])) >  $maxLen) {
                $errors[] = $info . ' must be less than ' . $maxLen . ' characters';
            }
        }
        
        if (empty($errors)) {
            $department = $_SESSION['deps'];
            $member_type = $_SESSION['member_type'];
            $health_condition = $_SESSION['health_condition'];
            $civil_status = $_SESSION['civil_status'];
            $scheme = mysqli_real_escape_string($connect, $_POST['scheme']);
            
            $spouse_name = mysqli_real_escape_string($connect, $_POST['spouse_name']);
            $spouse_relationship = mysqli_real_escape_string($connect, $_POST['relationship']);
            $spouse_dob = mysqli_real_escape_string($connect, $_POST['dob']);
            $spouse_healthstatus = mysqli_real_escape_string($connect, $_POST['health_status']);

            $medical = Model::registerMS($user_id, $department, $health_condition, $civil_status, $member_type, $scheme, $connect);
            $dependant = Model::adddependant($user_id, $spouse_name, $spouse_relationship, $spouse_dob, $spouse_healthstatus, $connect);

            $resultttt = Model::dept($department, $connect);
            $data = mysqli_fetch_array($resultttt);

            if ($medical && $dependant) {
                $to_email = $data['department_head_email'];
                $subject = "Membership Request";
                $body =  $_SESSION['empid'] . " have requested the membership for the Medical Scheme.";
                $headers = "From: ims.ucsc@gmail.com";

                $sendMail = mail($to_email, $subject, $body, $headers);
                // echo "Your membership request has been sent for the approval. You will be inform about the approval later. Thank you.";
            } else {
                echo "query failed";
            }
        }
    }

    if (isset($_POST['viewschemedetails-submit'])) {
        if ($result['userRole'] == "admin") {
            header('Location:../../view/admin/aViewSchemeDetailsV.php');
        } else if ($result['userRole'] == "academicStaffMemb") {
            header('Location:../../view/academicStaffMember/asmViewSchemeDetailsV.php');
        } else if ($result['userRole'] == "attendanceMain") {
            header('Location:../../view/attendanceMaintainer/amViewSchemeDetailsV.php');
        } else if ($result['userRole'] == "hallAllocationMain") {
            header('Location:../../view/hallAllocationMaintainer/hamViewSchemeDetailsV.php');
        } else if ($result['userRole'] == "mahapolaSchemeMain") {
            header('Location:../../view/mahapolaSchemeMaintainer/mmViewSchemeDetailsV.php');
        } else if ($result['userRole'] == "medicalSchemeMain") {
            header('Location:../../view/medicalSchemeMaintainer/msmViewSchemeDetailsV.php');
        } else if ($result['userRole'] == "recordsViewer") {
            header('Location:../../view/reportViewer/rvViewSchemeDetailsV.php');
        } else if ($result['userRole'] == "departmentHead") {
            header('Location:../../view/departmentHead/dhViewSchemeDetailsV.php');
        } else if ($result['userRole'] == "medicalSchemeMember") {
            header('Location:../../view/medicalSchemeMember/moViewSchemeDetailsV.php');
        } else {
            echo "USER";
        }
    }
?>