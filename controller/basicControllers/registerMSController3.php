<?php
    session_start();
	require_once('../../config/database.php');
    require_once('../../model/basicModel/registerMSModel.php');

    $loguser = mysqli_real_escape_string($connect, $_GET['loguser']);
    $userdetails = basicModel::view($loguser, $connect);
    $_SESSION['children_no'] = '';

    if (isset($_POST['registerNext2-submit'])) {
        
        $department = $_SESSION['department_id'];
        $member_type = $_SESSION['member_id'];
        $health_condition = $_SESSION['health_condition'];
        $civil_status = $_SESSION['civil_status'];

        $scheme = mysqli_real_escape_string($connect, $_POST['scheme']);
        $spouse_name = mysqli_real_escape_string($connect, $_POST['spouse_name']);
        $spouse_relationship = mysqli_real_escape_string($connect, $_POST['relationship']);
        $spouse_dob = mysqli_real_escape_string($connect, $_POST['dob']);
        $spouse_healthstatus = mysqli_real_escape_string($connect, $_POST['health_status']);
        $children_no = mysqli_real_escape_string($connect, $_POST['children_no']);

        $checkspouse = basicModel::checkdependant($loguser, $spouse_name, $connect);
        if (mysqli_num_rows($checkspouse) != 0) {
            $dependant = basicModel::adddependant($loguser, $spouse_name, $spouse_relationship, $spouse_dob, $spouse_healthstatus, $connect);
        }
        
        $medical = basicModel::registerMS($loguser, $department, $health_condition, $civil_status, $member_type, $scheme, $connect);

        $_SESSION['children_no'] = $children_no;

        if ($_SESSION['children_no'] != 0) {

            if (mysqli_num_rows($userdetails) == 1) {

                $ud = mysqli_fetch_assoc($userdetails);
                if ($ud['userRole'] == "admin") {
                    header('Location:../../view/admin/aRegisterToMedicalSchemeP3V.php');
                } else if ($ud['userRole'] == "academicStaffMemb") {
                    header('Location:../../view/academicStaffMember/asmRegisterToMedicalSchemeP3V.php');
                } else if ($ud['userRole'] == "nonAcademicStaffMemb") {
                    header('Location:../../view/nonAcademicStaffMember/nasmRegisterToMedicalSchemeP3V.php');
                } else if ($ud['userRole'] == "attendanceMain") {
                    header('Location:../../view/attendanceMaintainer/amRegisterMedicalSchemep3V.php');
                } else if ($ud['userRole'] == "hallAllocationMain") {
                    header('Location:../../view/hallAllocationMaintainer/hamRegisterToMedicalSchemeP3V.php');
                } else if ($ud['userRole'] == "mahapolaSchemeMain") {
                    header('Location:../../view/mahapolaSchemeMaintainer/mmRegisterToMedicalSchemeP3V.php');
                } else if ($ud['userRole'] == "medicalSchemeMain") {
                    header('Location:../../view/medicalSchemeMaintainer/msmRegisterToMedicalSchemeP3V.php');
                } else if ($ud['userRole'] == "recordsViewer") {
                    header('Location:../../view/reportViewer/rvRegisterToMedicalSchemeP3V.php');
                } else if ($ud['userRole'] == "departmentHead") {
                    header('Location:../../view/departmentHead/dhRegisterToMedicalSchemeP3V.php');
                } else if ($ud['userRole'] == "medicalOfficer") {
                    header('Location:../../view/medicalOfficer/moRegisterToMedicalSchemeP3V.php');
                }

            }

        } else {

            if ($medical) {

                $departmentdetails = basicModel::getmailofdh($department, $connect);
                $dd = mysqli_fetch_array($departmentdetails);

                if ($dd) {

                    $to_email = $dd['email'];
                    $subject = "Membership Request";
                    $body =  $_SESSION['empid'] . " have requested the membership for the Medical Scheme.";
                    $headers = "From: ims.ucsc@gmail.com";

                    $sendMail = mail($to_email, $subject, $body, $headers);

                }

                if (mysqli_num_rows($userdetails) == 1) {

                    $ud = mysqli_fetch_assoc($userdetails);
                    if ($ud['userRole'] == "admin") {
                        header('Location:../../view/admin/aRegisterMSsuccesV.php');
                    } else if ($ud['userRole'] == "academicStaffMemb") {
                        header('Location:../../view/academicStaffMember/asmRegisterMSsuccesV.php');
                    } else if ($ud['userRole'] == "attendanceMain") {
                        header('Location:../../view/attendanceMaintainer/amRegisterMSsuccesV.php');
                    } else if ($ud['userRole'] == "hallAllocationMain") {
                        header('Location:../../view/hallAllocationMaintainer/hamRegisterMSsuccesV.php');
                    } else if ($ud['userRole'] == "mahapolaSchemeMain") {
                        header('Location:../../view/mahapolaSchemeMaintainer/mmRegisterMSsuccesV.php');
                    } else if ($ud['userRole'] == "medicalSchemeMain") {
                        header('Location:../../view/medicalSchemeMaintainer/msmRegisterMSsuccesV.php');
                    } else if ($ud['userRole'] == "recordsViewer") {
                        header('Location:../../view/reportViewer/rvRegisterMSsuccesV.php');
                    } else if ($ud['userRole'] == "departmentHead") {
                        header('Location:C:../../view/departmentHead/dhRegisterMSsuccesV.php');
                    } else if ($ud['userRole'] == "medicalSchemeMember") {
                        header('Location:../../view/medicalSchemeMember/moRegisterMSsuccesV.php');
                    }

                }

            }
           
        }

    }
?>