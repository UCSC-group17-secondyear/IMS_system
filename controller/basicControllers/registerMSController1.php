<?php
    session_start();
	require_once('../../config/database.php');
    require_once('../../model/Model.php');
    
    $user_id = mysqli_real_escape_string($connect, $_GET['user_id']);
    $result_set = Model::view($user_id, $connect); 
    $records1 = Model::department($connect);
    $records2 = Model::membertype($connect);
    $records3 = Model::healthcondition($connect);
    $_SESSION['deps'] = '';
    $_SESSION['member_type'] = '';
    $_SESSION['health_condition'] = '';
    
    if ($result_set && $records1 && $records2 && $records3) {
        if (mysqli_num_rows($result_set)==1) {
            $result = mysqli_fetch_assoc($result_set);

            $_SESSION['userId'] = $result['userId'];

            while ($record1 = mysqli_fetch_array($records1)) {
                $_SESSION['deps'] .= "<option value='".$record1['department']."'>".$record1['department']."</option>";
            }

            while ($record2 = mysqli_fetch_array($records2)) {
                $_SESSION['member_type'] .= "<option value='".$record2['member_type']."'>".$record2['member_type']."</option>";
            }

            while ($record3 = mysqli_fetch_array($records3)) {
                $_SESSION['health_condition'] .= "<option value='".$record3['hname']."'>".$record3['hname']."</option>";
            }

            if ($result['userRole'] == "admin") {
                header('Location:../../view/admin/aRegisterToMedicalSchemeP1V.php');
            }
            else if ($result['userRole'] == "academicStaffMemb") {
                header('Location:../../view/academicStaffMember/asmRegisterToMedicalSchemeP1V.php');
            }
            else if ($result['userRole'] == "nonAcademicStaffMemb") {
                header('Location:../../view/nonAcademicStaffMember/nasmRegisterToMedicalSchemeP1V.php');
            }
            else if ($result['userRole'] == "attendanceMain") {
                header('Location:../../view/attendanceMaintainer/amRegisterToMedicalSchemeP1V.php');
            }
            else if ($result['userRole'] == "hallAllocationMain") {
                header('Location:../../view/hallAllocationMaintainer/hamRegisterToMedicalSchemeP1V.php');
            }
            else if ($result['userRole'] == "mahapolaSchemeMain") {
                header('Location:../../view/mahapolaSchemeMaintainer/mmRegisterToMedicalSchemeP1V.php');
            }
            else if ($result['userRole'] == "medicalSchemeMain") {
                header('Location:../../view/medicalSchemeMaintainer/msmRegisterToMedicalSchemeP1V.php');
            }
            else if ($result['userRole'] == "recordsViewer") {
                header('Location:../../view/reportViewer/rvRegisterToMedicalSchemeP1V.php');
            }
            else if ($result['userRole'] == "departmentHead") {
                header('Location:../../view/departmentHead/dhRegisterToMedicalSchemeP1V.php');
            }
            else if ($result['userRole'] == "medicalOfficer") {
                header('Location:../../view/medicalOfficer/moRegisterToMedicalSchemeP1V.php');
            }
            else {
                echo "USER";
            }
        }
        
    }else {
        echo "records are not ok";
    }
?>