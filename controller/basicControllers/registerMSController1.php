<?php
    session_start();
	require_once('../../config/database.php');
    require_once('../../model/basicModel/registerMSModel.php');
    
    $user_id = mysqli_real_escape_string($connect, $_GET['user_id']);
    $result_set = basicModel::view($user_id, $connect); 
    $records1 = basicModel::departments($connect);
    $records2 = basicModel::membertype($connect);
    $records4 = basicModel::civilstatus($connect);
    $records5 = basicModel::getmembershipstatus($user_id, $connect);
    $_SESSION['deps'] = '';
    $_SESSION['member_type'] = '';
    $_SESSION['civil_status'] = '';
    
    if ($result_set && $records1 && $records2 && $records4 && $records5) {
        $membership = mysqli_fetch_assoc($records5);
        if ($membership['membership_status'] == 3) {
            if (mysqli_num_rows($result_set) == 1) {
                $result = mysqli_fetch_assoc($result_set);
    
                $_SESSION['userId'] = $result['userId'];
    
                while ($record1 = mysqli_fetch_array($records1)) {
                    $_SESSION['deps'] .= "<option value='".$record1['department']."'>".$record1['department']."</option>";
                }
    
                while ($record2 = mysqli_fetch_array($records2)) {
                    $_SESSION['member_type'] .= "<option value='".$record2['member_type']."'>".$record2['member_type']."</option>";
                }
    
                while ($record4 = mysqli_fetch_array($records4)) {
                    $_SESSION['civil_status'] .= "<option value='".$record4['csname']."'>".$record4['csname']."</option>";
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
        } else if ($membership['membership_status'] == 2) {
            if (mysqli_num_rows($result_set) == 1) {
                $result = mysqli_fetch_assoc($result_set);

                if ($result['userRole'] == "admin") {
                    header('Location:../../view/admin/aAlreadyRegisteredV.php');
                }
                else if ($result['userRole'] == "academicStaffMemb") {
                    header('Location:../../view/academicStaffMember/asmAlreadyRegisteredV.php');
                }
                else if ($result['userRole'] == "nonAcademicStaffMemb") {
                    header('Location:../../view/nonAcademicStaffMember/nasmAlreadyRegisteredV.php');
                }
                else if ($result['userRole'] == "attendanceMain") {
                    header('Location:../../view/attendanceMaintainer/amAlreadyRegisteredV.php');
                }
                else if ($result['userRole'] == "hallAllocationMain") {
                    header('Location:../../view/hallAllocationMaintainer/hamAlreadyRegisteredV.php');
                }
                else if ($result['userRole'] == "mahapolaSchemeMain") {
                    header('Location:../../view/mahapolaSchemeMaintainer/mmAlreadyRegisteredV.php');
                }
                else if ($result['userRole'] == "medicalSchemeMain") {
                    header('Location:../../view/medicalSchemeMaintainer/msmAlreadyRegisteredV.php');
                }
                else if ($result['userRole'] == "recordsViewer") {
                    header('Location:../../view/reportViewer/rvAlreadyRegisteredV.php');
                }
                else if ($result['userRole'] == "departmentHead") {
                    header('Location:../../view/departmentHead/dhAlreadyRegisteredV.php');
                }
                else {
                    echo "USER";
                }
            }
        }  else if ($membership['membership_status'] == 1) {
            if (mysqli_num_rows($result_set) == 1) {
                $result = mysqli_fetch_assoc($result_set);

                if ($result['userRole'] == "admin") {
                    header('Location:../../view/admin/amembershipStatusV.php');
                }
                else if ($result['userRole'] == "academicStaffMemb") {
                    header('Location:../../view/academicStaffMember/asmmembershipStatusV.php');
                }
                else if ($result['userRole'] == "nonAcademicStaffMemb") {
                    header('Location:../../view/nonAcademicStaffMember/nasmmembershipStatusV.php');
                }
                else if ($result['userRole'] == "attendanceMain") {
                    header('Location:../../view/attendanceMaintainer/ammembershipStatusV.php');
                }
                else if ($result['userRole'] == "hallAllocationMain") {
                    header('Location:../../view/hallAllocationMaintainer/hammembershipStatusV.php');
                }
                else if ($result['userRole'] == "mahapolaSchemeMain") {
                    header('Location:../../view/mahapolaSchemeMaintainer/mmmembershipStatusV.php');
                }
                else if ($result['userRole'] == "medicalSchemeMain") {
                    header('Location:../../view/medicalSchemeMaintainer/msmmembershipStatusV.php');
                }
                else if ($result['userRole'] == "recordsViewer") {
                    header('Location:../../view/reportViewer/rvmembershipStatusV.php');
                }
                else if ($result['userRole'] == "departmentHead") {
                    header('Location:../../view/departmentHead/dhmembershipStatusV.php');
                }
                else {
                    echo "USER";
                }
            }
        } else {
            if (mysqli_num_rows($result_set) == 1) {
                $result = mysqli_fetch_assoc($result_set);

                if ($result['userRole'] == "admin") {
                    header('Location:../../view/admin/anotMemberV.php');
                }
                else if ($result['userRole'] == "academicStaffMemb") {
                    header('Location:../../view/academicStaffMember/asmnotMemberV.php');
                }
                else if ($result['userRole'] == "nonAcademicStaffMemb") {
                    header('Location:../../view/nonAcademicStaffMember/nasmnotMemberV.php');
                }
                else if ($result['userRole'] == "attendanceMain") {
                    header('Location:../../view/attendanceMaintainer/amnotMemberV.php');
                }
                else if ($result['userRole'] == "hallAllocationMain") {
                    header('Location:../../view/hallAllocationMaintainer/hamnotMemberV.php');
                }
                else if ($result['userRole'] == "mahapolaSchemeMain") {
                    header('Location:../../view/mahapolaSchemeMaintainer/mmnotMemberV.php');
                }
                else if ($result['userRole'] == "medicalSchemeMain") {
                    header('Location:../../view/medicalSchemeMaintainer/msmnotMemberV.php');
                }
                else if ($result['userRole'] == "recordsViewer") {
                    header('Location:../../view/reportViewer/rvnotMemberV.php');
                }
                else if ($result['userRole'] == "departmentHead") {
                    header('Location:../../view/departmentHead/dhnotMemberV.php');
                }
                else {
                    echo "USER";
                }
            }
        }     
    }
?>