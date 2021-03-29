<?php
    session_start();
	require_once('../../config/database.php');
    require_once('../../model/basicModel/registerMSModel.php');

    $loguser = mysqli_real_escape_string($connect, $_GET['loguser']);
    $userdetails = basicModel::view($loguser, $connect);

    if (isset($_POST['register-submit'])) {

        $department = $_SESSION['department_id'];
        $child_details = $_POST['child'];

        foreach ($child_details as $cd) {

            $birthdate = new DateTime($cd['child_dob']);
            $today   = new DateTime('today');
            $age = $birthdate->diff($today)->y;

            if($age <= 18){
                $checkchild = basicModel::checkdependant($loguser, $cd['child_name'], $connect);
                if (mysqli_num_rows($checkchild) == 0) {
                    $dependant = basicModel::adddependant($loguser, $cd['child_name'], $cd['relationship'], $cd['child_dob'], $cd['health_status'], $connect);
                }
            }

        }
        
        $departmentdetails = basicModel::getmailofdh($department, $connect);
        $dd = mysqli_fetch_array($departmentdetails);

        if ($dd) {

            $to_email = $dd['email'];
            $subject = "Membership Request";
            $body =  $_SESSION['empid'] . " have requested the membership for the Medical Scheme.";
            $headers = "From: ims.ucsc@gmail.com";

            $sendMail = mail($to_email, $subject, $body, $headers);
            
            if (mysqli_num_rows($userdetails) == 1) {

                $ud = mysqli_fetch_assoc($userdetails);
                if ($ud['userRole_id'] == "1") {
                    header('Location:../../view/admin/aRegisterMSsuccesV.php');
                } else if ($ud['userRole_id'] == "10") {
                    header('Location:../../view/academicStaffMember/asmRegisterMSsuccesV.php');
                } else if ($ud['userRole_id'] == "9") {
                    header('Location:../../view/attendanceMaintainer/amRegisterMSsuccesV.php');
                } else if ($ud['userRole_id'] == "2") {
                    header('Location:../../view/hallAllocationMaintainer/hamRegisterMSsuccesV.php');
                } else if ($ud['userRole_id'] == "7") {
                    header('Location:../../view/mahapolaSchemeMaintainer/mmRegisterMSsuccesV.php');
                } else if ($ud['userRole_id'] == "4") {
                    header('Location:../../view/medicalSchemeMaintainer/msmRegisterMSsuccesV.php');
                } else if ($ud['userRole_id'] == "6") {
                    header('Location:../../view/reportViewer/rvRegisterMSsuccesV.php');
                } else if ($ud['userRole_id'] == "departmentHead") {
                    header('Location:../../view/departmentHead/dhRegisterMSsuccesV.php');
                } else if ($ud['userRole_id'] == "11") {
                    header('Location:../../view/nonAcademicStaffMember/nasmRegisterMSsuccesV.php');
                }

            }

        }

    }
?>