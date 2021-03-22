<?php
    session_start();
	require_once('../../config/database.php');
    require_once('../../model/basicModel/registerMSModel.php');
    
    $user_id = mysqli_real_escape_string($connect, $_GET['user_id']);
    $user = basicModel::view($user_id, $connect); 
    $alldepartments = basicModel::departments($connect);
    $allmembertype = basicModel::membertype($connect);
    $membershipstatus = basicModel::getmembershipstatus($user_id, $connect);
    $_SESSION['department'] = '';
    $_SESSION['member_type'] = '';
    $_SESSION['userId'] = '';
    
    if ($user && $alldepartments && $allmembertype && $membershipstatus) {
        $ms = mysqli_fetch_assoc($membershipstatus);
        if ($ms['membership_status'] == 3) {
            if (mysqli_num_rows($user) == 1) {
                $u = mysqli_fetch_assoc($user);
    
                $_SESSION['userId'] = $u['userId'];
    
                while ($d = mysqli_fetch_array($alldepartments)) {
                    $_SESSION['department'] .= "<option value='".$d['department_id']."'>".$d['department']."</option>";
                }
    
                while ($m = mysqli_fetch_array($allmembertype)) {
                    $_SESSION['member_type'] .= "<option value='".$m['member_id']."'>".$m['member_type']."</option>";
                }
    
                if ($u['userRole'] == "admin") {
                    header('Location:../../view/admin/aRegisterToMedicalSchemeP1V.php');
                }
                else if ($u['userRole'] == "academicStaffMemb") {
                    header('Location:../../view/academicStaffMember/asmRegisterToMedicalSchemeP1V.php');
                }
                else if ($u['userRole'] == "nonAcademicStaffMemb") {
                    header('Location:../../view/nonAcademicStaffMember/nasmRegisterToMedicalSchemeP1V.php');
                }
                else if ($u['userRole'] == "attendanceMain") {
                    header('Location:../../view/attendanceMaintainer/amRegisterToMedicalSchemeP1V.php');
                }
                else if ($u['userRole'] == "hallAllocationMain") {
                    header('Location:../../view/hallAllocationMaintainer/hamRegisterToMedicalSchemeP1V.php');
                }
                else if ($u['userRole'] == "mahapolaSchemeMain") {
                    header('Location:../../view/mahapolaSchemeMaintainer/mmRegisterToMedicalSchemeP1V.php');
                }
                else if ($u['userRole'] == "medicalSchemeMain") {
                    header('Location:../../view/medicalSchemeMaintainer/msmRegisterToMedicalSchemeP1V.php');
                }
                else if ($u['userRole'] == "recordsViewer") {
                    header('Location:../../view/reportViewer/rvRegisterToMedicalSchemeP1V.php');
                }
                else if ($u['userRole'] == "departmentHead") {
                    header('Location:../../view/departmentHead/dhRegisterToMedicalSchemeP1V.php');
                }
                else if ($u['userRole'] == "medicalOfficer") {
                    header('Location:../../view/medicalOfficer/moRegisterToMedicalSchemeP1V.php');
                }
            }
        } else if ($ms['membership_status'] == 2) {
            if (mysqli_num_rows($user) == 1) {
                $u = mysqli_fetch_assoc($user);

                if ($u['userRole'] == "admin") {
                    header('Location:../../view/admin/aAlreadyRegisteredV.php');
                }
                else if ($u['userRole'] == "academicStaffMemb") {
                    header('Location:../../view/academicStaffMember/asmAlreadyRegisteredV.php');
                }
                else if ($u['userRole'] == "nonAcademicStaffMemb") {
                    header('Location:../../view/nonAcademicStaffMember/nasmAlreadyRegisteredV.php');
                }
                else if ($u['userRole'] == "attendanceMain") {
                    header('Location:../../view/attendanceMaintainer/amAlreadyRegisteredV.php');
                }
                else if ($u['userRole'] == "hallAllocationMain") {
                    header('Location:../../view/hallAllocationMaintainer/hamAlreadyRegisteredV.php');
                }
                else if ($u['userRole'] == "mahapolaSchemeMain") {
                    header('Location:../../view/mahapolaSchemeMaintainer/mmAlreadyRegisteredV.php');
                }
                else if ($u['userRole'] == "medicalSchemeMain") {
                    header('Location:../../view/medicalSchemeMaintainer/msmAlreadyRegisteredV.php');
                }
                else if ($u['userRole'] == "recordsViewer") {
                    header('Location:../../view/reportViewer/rvAlreadyRegisteredV.php');
                }
                else if ($u['userRole'] == "departmentHead") {
                    header('Location:../../view/departmentHead/dhAlreadyRegisteredV.php');
                }
            }
        }  else if ($ms['membership_status'] == 1) {
            if (mysqli_num_rows($user) == 1) {
                $u = mysqli_fetch_assoc($user);

                if ($u['userRole'] == "admin") {
                    header('Location:../../view/admin/amembershipStatusV.php');
                }
                else if ($u['userRole'] == "academicStaffMemb") {
                    header('Location:../../view/academicStaffMember/asmmembershipStatusV.php');
                }
                else if ($u['userRole'] == "nonAcademicStaffMemb") {
                    header('Location:../../view/nonAcademicStaffMember/nasmmembershipStatusV.php');
                }
                else if ($u['userRole'] == "attendanceMain") {
                    header('Location:../../view/attendanceMaintainer/ammembershipStatusV.php');
                }
                else if ($u['userRole'] == "hallAllocationMain") {
                    header('Location:../../view/hallAllocationMaintainer/hammembershipStatusV.php');
                }
                else if ($u['userRole'] == "mahapolaSchemeMain") {
                    header('Location:../../view/mahapolaSchemeMaintainer/mmmembershipStatusV.php');
                }
                else if ($u['userRole'] == "medicalSchemeMain") {
                    header('Location:../../view/medicalSchemeMaintainer/msmmembershipStatusV.php');
                }
                else if ($u['userRole'] == "recordsViewer") {
                    header('Location:../../view/reportViewer/rvmembershipStatusV.php');
                }
                else if ($u['userRole'] == "departmentHead") {
                    header('Location:../../view/departmentHead/dhmembershipStatusV.php');
                }
            }
        } else {
            if (mysqli_num_rows($user) == 1) {
                $u = mysqli_fetch_assoc($user);

                if ($u['userRole'] == "admin") {
                    header('Location:../../view/admin/anotMemberV.php');
                }
                else if ($u['userRole'] == "academicStaffMemb") {
                    header('Location:../../view/academicStaffMember/asmnotMemberV.php');
                }
                else if ($u['userRole'] == "nonAcademicStaffMemb") {
                    header('Location:../../view/nonAcademicStaffMember/nasmnotMemberV.php');
                }
                else if ($u['userRole'] == "attendanceMain") {
                    header('Location:../../view/attendanceMaintainer/amnotMemberV.php');
                }
                else if ($u['userRole'] == "hallAllocationMain") {
                    header('Location:../../view/hallAllocationMaintainer/hamnotMemberV.php');
                }
                else if ($u['userRole'] == "mahapolaSchemeMain") {
                    header('Location:../../view/mahapolaSchemeMaintainer/mmnotMemberV.php');
                }
                else if ($u['userRole'] == "medicalSchemeMain") {
                    header('Location:../../view/medicalSchemeMaintainer/msmnotMemberV.php');
                }
                else if ($u['userRole'] == "recordsViewer") {
                    header('Location:../../view/reportViewer/rvnotMemberV.php');
                }
                else if ($u['userRole'] == "departmentHead") {
                    header('Location:../../view/departmentHead/dhnotMemberV.php');
                }
            }
        }     
    }
?>