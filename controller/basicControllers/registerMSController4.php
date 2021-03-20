<?php
    session_start();
	require_once('../../config/database.php');
    require_once('../../model/basicModel/registerMSModel.php');

    $errors = array();
    $user_id = mysqli_real_escape_string($connect, $_GET['user_id']);
    $result_set = basicModel::view($user_id, $connect);

    if (isset($_POST['register-submit'])) {
        $user_id = mysqli_real_escape_string($connect, $_GET['user_id']);

        $department = $_SESSION['deps'];
        $child_details = $_POST['child'];

        foreach($child_details as $cd){

            // $userInfo = array($cd['child_name']=>50, $cd['relationship']=>8, $cd['child_dob']=>20, $cd['health_status']=>100);
    
            // foreach ($userInfo as $info=>$maxLen) {
            //     if (strlen(trim($_POST[$info])) >  $maxLen) {
            //         $errors[] = $info . ' must be less than ' . $maxLen . ' characters';
            //     }
            // }

            if (empty($errors)) {
                $birthdate = new DateTime($cd['child_dob']);
                $today   = new DateTime('today');
                $age = $birthdate->diff($today)->y;

                if($age >= 18){
                    $dependant = basicModel::adddependant($user_id, $cd['child_name'], $cd['relationship'], $cd['child_dob'], $cd['health_status'], $connect);
                }
            }
        }
        
        $resultttt = basicModel::dept($department, $connect);
        $data = mysqli_fetch_array($resultttt);

        if ($data) {
            $to_email = $data['department_head_email'];
            $subject = "Membership Request";
            $body =  $_SESSION['empid'] . " have requested the membership for the Medical Scheme.";
            $headers = "From: ims.ucsc@gmail.com";

            $sendMail = mail($to_email, $subject, $body, $headers);
            
            if (mysqli_num_rows($result_set)==1) {
                $result = mysqli_fetch_assoc($result_set);
                if ($result['userRole'] == "admin") {
                    header('Location:../../view/admin/aRegisterMSsuccesV.php');
                } else if ($result['userRole'] == "academicStaffMemb") {
                    header('Location:../../view/academicStaffMember/asmRegisterMSsuccesV.php');
                } else if ($result['userRole'] == "attendanceMain") {
                    header('Location:../../view/attendanceMaintainer/amRegisterMSsuccesV.php');
                } else if ($result['userRole'] == "hallAllocationMain") {
                    header('Location:../../view/hallAllocationMaintainer/hamRegisterMSsuccesV.php');
                } else if ($result['userRole'] == "mahapolaSchemeMain") {
                    header('Location:../../view/mahapolaSchemeMaintainer/mmRegisterMSsuccesV.php');
                } else if ($result['userRole'] == "medicalSchemeMain") {
                    header('Location:../../view/medicalSchemeMaintainer/msmRegisterMSsuccesV.php');
                } else if ($result['userRole'] == "recordsViewer") {
                    header('Location:../../view/reportViewer/rvRegisterMSsuccesV.php');
                } else if ($result['userRole'] == "departmentHead") {
                    header('Location:../../view/departmentHead/dhRegisterMSsuccesV.php');
                } else if ($result['userRole'] == "nonAcademicStaffMemb") {
                    header('Location:../../view/nonAcademicStaffMember/nasmRegisterMSsuccesV.php');
                }
            }
        }
    }
?>