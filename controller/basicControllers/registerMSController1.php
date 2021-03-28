<?php
    session_start();
	require_once('../../config/database.php');
    require_once('../../model/basicModel/registerMSModel.php');
    
    $loguser = mysqli_real_escape_string($connect, $_GET['loguser']);
    $user = basicModel::view($loguser, $connect); 
    $alldepartments = basicModel::departments($connect);
    $allmembertype = basicModel::membertype($connect);
    $membershipstatus = basicModel::getmembershipstatus($loguser, $connect);
    $_SESSION['department'] = '';
    $_SESSION['member_type'] = '';
    $_SESSION['userId'] = '';
    
    if ($user && $alldepartments && $allmembertype && $membershipstatus) {
        $ms = mysqli_fetch_assoc($membershipstatus);
            if (mysqli_num_rows($user) == 1) {
                $u = mysqli_fetch_assoc($user);
    
                $_SESSION['userId'] = $u['userId'];
    
                while ($d = mysqli_fetch_array($alldepartments)) {
                    $_SESSION['department'] .= "<option value='".$d['department_id']."'>".$d['department']."</option>";
                }
    
                while ($m = mysqli_fetch_array($allmembertype)) {
                    $_SESSION['member_type'] .= "<option value='".$m['member_id']."'>".$m['member_type']."</option>";
                }
    
                if ($u['userRole_id'] == 1) {
                    header('Location:../../view/admin/aRegisterToMedicalSchemeP1V.php');
                }
                else if ($u['userRole_id'] == 10) {
                    header('Location:../../view/academicStaffMember/asmRegisterToMedicalSchemeP1V.php');
                }
                else if ($u['userRole_id'] == 11) {
                    header('Location:../../view/nonAcademicStaffMember/nasmRegisterToMedicalSchemeP1V.php');
                }
                else if ($u['userRole_id'] == 9) {
                    header('Location:../../view/attendanceMaintainer/amRegisterToMedicalSchemeP1V.php');
                }
                else if ($u['userRole_id'] == 2) {
                    header('Location:../../view/hallAllocationMaintainer/hamRegisterToMedicalSchemeP1V.php');
                }
                else if ($u['userRole_id'] == 7) {
                    header('Location:../../view/mahapolaSchemeMaintainer/mmRegisterToMedicalSchemeP1V.php');
                }
                else if ($u['userRole_id'] == 4) {
                    header('Location:../../view/medicalSchemeMaintainer/msmRegisterToMedicalSchemeP1V.php');
                }
                else if ($u['userRole_id'] == 6) {
                    header('Location:../../view/reportViewer/rvRegisterToMedicalSchemeP1V.php');
                }
                else if ($u['userRole_id'] == 8) {
                    header('Location:../../view/departmentHead/dhRegisterToMedicalSchemeP1V.php');
                }
                else if ($u['userRole_id'] == 3) {
                    header('Location:../../view/medicalOfficer/moRegisterToMedicalSchemeP1V.php');
                }
            }
        if ($ms['membership_status'] == 2) {
            if (mysqli_num_rows($user) == 1) {
                $u = mysqli_fetch_assoc($user);

                if ($u['userRole_id'] == 1) {
                    header('Location:../../view/admin/aAlreadyRegisteredV.php');
                }
                else if ($u['userRole_id'] == 10) {
                    header('Location:../../view/academicStaffMember/asmAlreadyRegisteredV.php');
                }
                else if ($u['userRole_id'] == 11) {
                    header('Location:../../view/nonAcademicStaffMember/nasmAlreadyRegisteredV.php');
                }
                else if ($u['userRole_id'] == 9) {
                    header('Location:../../view/attendanceMaintainer/amAlreadyRegisteredV.php');
                }
                else if ($u['userRole_id'] == 2) {
                    header('Location:../../view/hallAllocationMaintainer/hamAlreadyRegisteredV.php');
                }
                else if ($u['userRole_id'] == 7) {
                    header('Location:../../view/mahapolaSchemeMaintainer/mmAlreadyRegisteredV.php');
                }
                else if ($u['userRole_id'] == 4) {
                    header('Location:../../view/medicalSchemeMaintainer/msmAlreadyRegisteredV.php');
                }
                else if ($u['userRole_id'] == 6) {
                    header('Location:../../view/reportViewer/rvAlreadyRegisteredV.php');
                }
                else if ($u['userRole_id'] == 8) {
                    header('Location:../../view/departmentHead/dhAlreadyRegisteredV.php');
                }
            }
        }  else if ($ms['membership_status'] == 1) {
            if (mysqli_num_rows($user) == 1) {
                $u = mysqli_fetch_assoc($user);

                if ($u['userRole_id'] == 1) {
                    header('Location:../../view/admin/amembershipStatusV.php');
                }
                else if ($u['userRole_id'] == 10) {
                    header('Location:../../view/academicStaffMember/asmmembershipStatusV.php');
                }
                else if ($u['userRole_id'] == 11) {
                    header('Location:../../view/nonAcademicStaffMember/nasmmembershipStatusV.php');
                }
                else if ($u['userRole_id'] == 9) {
                    header('Location:../../view/attendanceMaintainer/ammembershipStatusV.php');
                }
                else if ($u['userRole_id'] == 2) {
                    header('Location:../../view/hallAllocationMaintainer/hammembershipStatusV.php');
                }
                else if ($u['userRole_id'] == 7) {
                    header('Location:../../view/mahapolaSchemeMaintainer/mmmembershipStatusV.php');
                }
                else if ($u['userRole_id'] == 4) {
                    header('Location:../../view/medicalSchemeMaintainer/msmmembershipStatusV.php');
                }
                else if ($u['userRole_id'] == 6) {
                    header('Location:../../view/reportViewer/rvmembershipStatusV.php');
                }
                else if ($u['userRole_id'] == 8) {
                    header('Location:../../view/departmentHead/dhmembershipStatusV.php');
                }
            }
        } else {
            if (mysqli_num_rows($user) == 1) {
                $u = mysqli_fetch_assoc($user);

                if ($u['userRole_id'] == 1) {
                    header('Location:../../view/admin/anotMemberV.php');
                }
                else if ($u['userRole_id'] == 10) {
                    header('Location:../../view/academicStaffMember/asmnotMemberV.php');
                }
                else if ($u['userRole_id'] == 11) {
                    header('Location:../../view/nonAcademicStaffMember/nasmnotMemberV.php');
                }
                else if ($u['userRole_id'] == 9) {
                    header('Location:../../view/attendanceMaintainer/amnotMemberV.php');
                }
                else if ($u['userRole_id'] == 2) {
                    header('Location:../../view/hallAllocationMaintainer/hamnotMemberV.php');
                }
                else if ($u['userRole_id'] == 7) {
                    header('Location:../../view/mahapolaSchemeMaintainer/mmnotMemberV.php');
                }
                else if ($u['userRole_id'] == 4) {
                    header('Location:../../view/medicalSchemeMaintainer/msmnotMemberV.php');
                }
                else if ($u['userRole_id'] == 6) {
                    header('Location:../../view/reportViewer/rvnotMemberV.php');
                }
                else if ($u['userRole_id'] == 8) {
                    header('Location:../../view/departmentHead/dhnotMemberV.php');
                }
            }
        }     
    }
?>