<?php
    session_start();
	require_once('../config/database.php');
    require_once('../model/Model.php');
    
    $user_id = mysqli_real_escape_string($connect, $_GET['user_id']);
    $result_set = Model::view($user_id, $connect); 
    $records1 = Model::department($connect);
    $records2 = Model::scheme($connect);
    $_SESSION['deps'] = '';
    $_SESSION['scheme'] = '';
    
    if ($result_set && $records1 && $records2) {
        if (mysqli_num_rows($result_set)==1) {
            $result = mysqli_fetch_assoc($result_set);

            $_SESSION['userId'] = $result['userId'];
            $_SESSION['empid'] = $result['empid'];
            $_SESSION['initials'] = $result['initials'];
            $_SESSION['sname'] = $result['sname'];
            $_SESSION['email'] = $result['email'];
            $_SESSION['mobile'] = $result['mobile'];
            $_SESSION['tp'] = $result['tp'];
            $_SESSION['dob'] = $result['dob'];
            $_SESSION['designation'] = $result['designation'];
            $_SESSION['appointment'] = $result['appointment'];

            while ($record1 = mysqli_fetch_array($records1)) {
                $_SESSION['deps'] .= "<option value='". $record1['department']."'>". $record1['department']."</option>";
            }

            while ($record2 = mysqli_fetch_array($records2)) {
                $_SESSION['scheme'] .= "<option value='". $record2['schemename']."'>". $record2['schemename']."</option>";
            }

            if ($result['userRole'] == "admin") {
                header('Location:../view/admin/aRegisterToMedicalSchemeV.php');
            }
            else if ($result['userRole'] == "academicStaffMemb") {
                header('Location:../view/academicStaffMember/asmRegisterToMedicalSchemeV.php');
            }
            else if ($result['userRole'] == "attendanceMain") {
                header('Location:../view/attendanceMaintainer/amRegisterMedicalSchemeV.php');
            }
            else if ($result['userRole'] == "hallAllocationMain") {
                header('Location:../view/hallAllocationMaintainer/hamRegisterToMedicalSchemeV.php');
            }
            else if ($result['userRole'] == "mahapolaSchemeMain") {
                header('Location:../view/mahapolaSchemeMaintainer/mmRegisterToMedicalSchemeV.php');
            }
            else if ($result['userRole'] == "medicalSchemeMain") {
                header('Location:../view/medicalSchemeMaintainer/msmRegisterToMedicalSchemeV.php');
            }
            else if ($result['userRole'] == "recordsViewer") {
                header('Location:../view/recordsViewer/rvRegisterToMedicalSchemeV.php');
            }
            else if ($result['userRole'] == "departmentHead") {
                header('Location:../view/departmentHead/dhRegisterMedicalSchemeV.php');
            }
            else if ($result['userRole'] == "medicalOfficer") {
                header('Location:../view/medicalOfficer/moRegisterToMedicalSchemeV.php');
            }
            else {
                echo "USER";
            }
        }
        
    }else {
        echo "record 1 is not ok";
    }
?>