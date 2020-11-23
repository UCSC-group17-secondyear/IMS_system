<?php
    session_start();
	require_once('../../config/database.php');
    require_once('../../model/Model.php');

    $errors = array();
    $user_id = mysqli_real_escape_string($connect, $_GET['user_id']);
    $result_set = Model::view($user_id, $connect);
    $_SESSION['children_no'] = '';

    if (isset($_POST['registerNext2-submit'])) {
        $user_id = mysqli_real_escape_string($connect, $_GET['user_id']);

        $userInfo = array('department'=>20, 'member_type'=>15, 'health_condition'=>100, 'civil_status'=>10, 'scheme'=>8, 'spouse_name'=>50, 'relationship'=>8, 'dob'=>20, 'health_status'=>100);
		
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
            $children_no = mysqli_real_escape_string($connect, $_POST['children_no']);

            $medical = Model::registerMS($user_id, $department, $health_condition, $civil_status, $member_type, $scheme, $connect);
            $dependant = Model::adddependant($user_id, $spouse_name, $spouse_relationship, $spouse_dob, $spouse_healthstatus, $connect);

            $_SESSION['children_no'] = $children_no;
        }

        if ($children_no > 0 && $records) {
            if (mysqli_num_rows($result_set)==1) {
                $result = mysqli_fetch_assoc($result_set);

                if ($result['userRole'] == "admin") {
                    header('Location:../../view/admin/aRegisterToMedicalSchemeP3V.php');
                } else if ($result['userRole'] == "academicStaffMemb") {
                    header('Location:../../view/academicStaffMember/asmRegisterToMedicalSchemeP3V.php');
                } else if ($result['userRole'] == "nonAcademicStaffMemb") {
                    header('Location:../../view/nonAcademicStaffMember/nasmRegisterToMedicalSchemeP3V.php');
                } else if ($result['userRole'] == "attendanceMain") {
                    header('Location:../../view/attendanceMaintainer/amRegisterMedicalSchemep3V.php');
                } else if ($result['userRole'] == "hallAllocationMain") {
                    header('Location:../../view/hallAllocationMaintainer/hamRegisterToMedicalSchemeP3V.php');
                } else if ($result['userRole'] == "mahapolaSchemeMain") {
                    header('Location:../../view/mahapolaSchemeMaintainer/mmRegisterToMedicalSchemeP3V.php');
                } else if ($result['userRole'] == "medicalSchemeMain") {
                    header('Location:../../view/medicalSchemeMaintainer/msmRegisterToMedicalSchemeP3V.php');
                } else if ($result['userRole'] == "recordsViewer") {
                    header('Location:../../view/reportViewer/rvRegisterToMedicalSchemeP3V.php');
                } else if ($result['userRole'] == "schemeHead") {
                    header('Location:../../view/schemeHead/dhRegisterMedicalSchemeP3V.php');
                } else if ($result['userRole'] == "medicalOfficer") {
                    header('Location:../../view/medicalOfficer/moRegisterToMedicalSchemeP3V.php');
                } else {
                    echo "USER";
                }

            }
        } else {
            
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
        } else if ($result['userRole'] == "schemeHead") {
            header('Location:../../view/schemeHead/dhViewSchemeDetailsV.php');
        } else if ($result['userRole'] == "medicalSchemeMember") {
            header('Location:../../view/medicalSchemeMember/moViewSchemeDetailsV.php');
        } else {
            echo "USER";
        }
    }
?>