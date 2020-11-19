<?php
    session_start();
	require_once('../../config/database.php');
    require_once('../../model/Model.php');

    $errors = array();
    $user_id = mysqli_real_escape_string($connect, $_GET['user_id']);
    $result_set = Model::view($user_id, $connect);

    if (isset($_POST['register-submit'])) {
        $user_id = mysqli_real_escape_string($connect, $_GET['user_id']);

        $department = $_SESSION['deps'];

        // $userInfo = array('child_name'=>50, 'relationship'=>8, 'child_dob'=>20, 'health_status'=>100);
		
		// foreach ($userInfo as $info=>$maxLen) {
        //     if (strlen(trim($_POST[$info])) >  $maxLen) {
        //         $errors[] = $info . ' must be less than ' . $maxLen . ' characters';
        //     }
        // }
        
        if (empty($errors)) {
            $no = $_SESSION['children_no'];
            for($i=0; $i<$no; $i++){
                $child_name = mysqli_real_escape_string($connect, $_POST["child_name.$i"]);
                $child_relationship = mysqli_real_escape_string($connect, $_POST["relationship.$i"]);
                $child_dob = mysqli_real_escape_string($connect, $_POST["child_dob.$i"]);
                $child_healthstatus = mysqli_real_escape_string($connect, $_POST["health_status.$i"]);
                
                $dependant = Model::adddependant($user_id, $child_name, $child_relationship, $child_dob, $child_healthstatus, $connect);
                
                $date_diff = Model::getage($user_id, $child_name, $connect);
                $submit_diff = mysqli_fetch_array($date_diff);
                $age = (int)$submit_diff[0];

                if($age >= 18){
                    $dependant = Model::deletedependant($user_id, $child_name, $connect);
                }
            }

            $resultttt = Model::dept($department, $connect);
            $data = mysqli_fetch_array($resultttt);

            if ($data) {
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