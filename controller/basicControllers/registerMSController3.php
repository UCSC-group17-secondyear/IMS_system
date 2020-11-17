<?php
    session_start();
	require_once('../../config/database.php');
    require_once('../../model/Model.php');
    
    $user_id = mysqli_real_escape_string($connect, $_GET['user_id']);
    $result_set = Model::view($user_id, $connect);
    $records = Model::scheme($connect);
    $_SESSION['scheme'] = '';
    
    // Load details to the Register to the Medical Scheme - Part 2
    if ($result_set && $records) {
        if (mysqli_num_rows($result_set)==1) {
            $result = mysqli_fetch_assoc($result_set);

            $_SESSION['userId'] = $result['userId'];

            $date_diff = Model::getservicemonths($user_id,$connect);
            $submit_diff = mysqli_fetch_array($date_diff);
            $months = (int)$submit_diff/30;

            $scheme_1_details = Model::getscheme("Scheme 1", $connect);
            $scheme_2_details = Model::getscheme("Scheme 2", $connect);
            $scheme_3_details = Model::getscheme("Scheme 3", $connect);

            $scheme_1 = mysqli_fetch_assoc($scheme_1_details);
            $scheme_2 = mysqli_fetch_assoc($scheme_2_details);
            $scheme_3 = mysqli_fetch_assoc($scheme_3_details);

            if ($scheme_1_details && $scheme_2_details && $scheme_3_details) {            
                if ($_SESSION['member_type'] == "Temporary") {
                    if ()
                } else if ($_SESSION['member_type'] == "Contract") {
                    
                } else if ($_SESSION['member_type'] == "Permanent") {
                    
                }
                while ($record2 = mysqli_fetch_array($records2)) {
                    $_SESSION['scheme'] .= "<option value='".$record2['schemename']."'>".$record2['schemename']."</option>";
                }

                if ($result['userRole'] == "admin") {
                    header('Location:../../view/admin/aRegisterToMedicalSchemeP2V.php');
                } else if ($result['userRole'] == "academicStaffMemb") {
                    header('Location:../../view/academicStaffMember/asmRegisterToMedicalSchemeP2V.php');
                } else if ($result['userRole'] == "nonAcademicStaffMemb") {
                    header('Location:../../view/nonAcademicStaffMember/nasmRegisterToMedicalSchemeP2V.php');
                } else if ($result['userRole'] == "attendanceMain") {
                    header('Location:../../view/attendanceMaintainer/amRegisterMedicalSchemep2V.php');
                } else if ($result['userRole'] == "hallAllocationMain") {
                    header('Location:../../view/hallAllocationMaintainer/hamRegisterToMedicalSchemeP2V.php');
                } else if ($result['userRole'] == "mahapolaSchemeMain") {
                    header('Location:../../view/mahapolaSchemeMaintainer/mmRegisterToMedicalSchemeP2V.php');
                } else if ($result['userRole'] == "medicalSchemeMain") {
                    header('Location:../../view/medicalSchemeMaintainer/msmRegisterToMedicalSchemeP2V.php');
                } else if ($result['userRole'] == "recordsViewer") {
                    header('Location:../../view/reportViewer/rvRegisterToMedicalSchemeP2V.php');
                } else if ($result['userRole'] == "departmentHead") {
                    header('Location:../../view/departmentHead/dhRegisterMedicalSchemeP2V.php');
                } else if ($result['userRole'] == "medicalOfficer") {
                    header('Location:../../view/medicalOfficer/moRegisterToMedicalSchemeP2V.php');
                } else {
                    echo "USER";
                }
            }
        }
        
    }else {
        echo "records are not ok";
    }
?>