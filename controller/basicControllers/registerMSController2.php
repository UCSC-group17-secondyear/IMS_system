<?php
    session_start();
	require_once('../../config/database.php');
    require_once('../../model/Model.php');

    $errors = array();
    $user_id = mysqli_real_escape_string($connect, $_GET['user_id']);
    $result_set = Model::view($user_id, $connect);

    $records = Model::scheme($connect);
    $records1 = Model::healthcondition($connect);
    $scheme_1_details = Model::getscheme('Scheme 1', $connect);
    $scheme_2_details = Model::getscheme('Scheme 2', $connect);
    $scheme_3_details = Model::getscheme('Scheme 3', $connect);
    $_SESSION['scheme'] = '';
    $_SESSION['health_status'] = '';
    $_SESSION['children'] = '';

    if (isset($_POST['registerNext-submit'])) {
        $user_id = mysqli_real_escape_string($connect, $_GET['user_id']);

        if (empty($errors)) {
            $department = mysqli_real_escape_string($connect, $_POST['department']);
            $member_type = mysqli_real_escape_string($connect, $_POST['member_type']);
            $health_condition = mysqli_real_escape_string($connect, $_POST['health_condition']);
            $civil_status = mysqli_real_escape_string($connect, $_POST['civil_status']);

            $_SESSION['deps'] = $department;
            $_SESSION['member_type'] = $member_type;
            $_SESSION['health_condition'] = $health_condition;
            $_SESSION['civil_status'] = $civil_status;
        }

        if ($result_set && $records1 && $scheme_1_details && $scheme_2_details && $scheme_3_details) {
            if (mysqli_num_rows($result_set)==1) {
                $result = mysqli_fetch_assoc($result_set);
                $scheme_1 = mysqli_fetch_assoc($scheme_1_details);
                $scheme_2 = mysqli_fetch_assoc($scheme_2_details);
                $scheme_3 = mysqli_fetch_assoc($scheme_3_details);
    
                $_SESSION['userId'] = $result['userId'];

                while ($record1 = mysqli_fetch_array($records1)) {
                    $_SESSION['health_status'] .= "<option value='".$record3['hname']."'>".$record3['hname']."</option>";
                }
    
                $date_diff = Model::getservicemonths($user_id, $connect);
                $submit_diff = mysqli_fetch_array($date_diff);
                $months = (int)$submit_diff[0]/30;
               
                if ($_SESSION['member_type'] == "Temporary") {
                    if ($months >= $scheme_3['temporaryStaff']) {
                        $_SESSION['scheme'] .= "<option value='Scheme 3'>Scheme 3</option>";
                    } else {
                        if ($result['userRole'] == "admin") {
                            header('Location:../../view/admin/aRegisterMSerrorV.php');
                        } else if ($result['userRole'] == "academicStaffMemb") {
                            header('Location:../../view/academicStaffMember/asmRegisterMSerrorV.php');
                        } else if ($result['userRole'] == "nonAcademicStaffMemb") {
                            header('Location:../../view/nonAcademicStaffMember/nasmRegisterMSerrorV.php');
                        } else if ($result['userRole'] == "attendanceMain") {
                            header('Location:../../view/attendanceMaintainer/amRegisterMSerrorVhp');
                        } else if ($result['userRole'] == "hallAllocationMain") {
                            header('Location:../../view/hallAllocationMaintainer/hamRegisterMSerrorV.php');
                        } else if ($result['userRole'] == "mahapolaSchemeMain") {
                            header('Location:../../view/mahapolaSchemeMaintainer/mmRegisterMSerrorV.php');
                        } else if ($result['userRole'] == "medicalSchemeMain") {
                            header('Location:../../view/medicalSchemeMaintainer/msmRegisterMSerrorV.php');
                        } else if ($result['userRole'] == "recordsViewer") {
                            header('Location:../../view/reportViewer/rvRegisterMSerrorV.php');
                        } else if ($result['userRole'] == "departmentHead") {
                            header('Location:../../view/departmentHead/dhRegisterMSerrorVhp');
                        } else if ($result['userRole'] == "medicalOfficer") {
                            header('Location:../../view/medicalOfficer/moRegisterMSerrorV.php');
                        } else {
                            echo "USER";
                        }
                    }
                } else if ($_SESSION['member_type'] == "Contract") {
                    if ($months >= $scheme_1['contractStaff']) {
                        $_SESSION['scheme'] .= "<option value='Scheme 1'>Scheme 1</option>";
                    }
                    if ($months >= $scheme_2['contractStaff']) {
                        $_SESSION['scheme'] .= "<option value='Scheme 2'>Scheme 2</option>";
                    }
                    if ($months >= $scheme_3['contractStaff']) {
                        $_SESSION['scheme'] .= "<option value='Scheme 3'>Scheme 3</option>";
                    }
                    
                    if ($months < $scheme_3['contractStaff']) {
                        if ($result['userRole'] == "admin") {
                            header('Location:../../view/admin/aRegisterMSerrorV.php');
                        } else if ($result['userRole'] == "academicStaffMemb") {
                            header('Location:../../view/academicStaffMember/asmRegisterMSerrorV.php');
                        } else if ($result['userRole'] == "nonAcademicStaffMemb") {
                            header('Location:../../view/nonAcademicStaffMember/nasmRegisterMSerrorV.php');
                        } else if ($result['userRole'] == "attendanceMain") {
                            header('Location:../../view/attendanceMaintainer/amRegisterMSerrorVhp');
                        } else if ($result['userRole'] == "hallAllocationMain") {
                            header('Location:../../view/hallAllocationMaintainer/hamRegisterMSerrorV.php');
                        } else if ($result['userRole'] == "mahapolaSchemeMain") {
                            header('Location:../../view/mahapolaSchemeMaintainer/mmRegisterMSerrorV.php');
                        } else if ($result['userRole'] == "medicalSchemeMain") {
                            header('Location:../../view/medicalSchemeMaintainer/msmRegisterMSerrorV.php');
                        } else if ($result['userRole'] == "recordsViewer") {
                            header('Location:../../view/reportViewer/rvRegisterMSerrorV.php');
                        } else if ($result['userRole'] == "departmentHead") {
                            header('Location:../../view/departmentHead/dhRegisterMSerrorVhp');
                        } else if ($result['userRole'] == "medicalOfficer") {
                            header('Location:../../view/medicalOfficer/moRegisterMSerrorV.php');
                        } else {
                            echo "USER";
                        }
                    }              
                } else if ($_SESSION['member_type'] == "Permanent") {
                    if ($months >= $scheme_1['permanentStaff']) {
                        $_SESSION['scheme'] .= "<option value='Scheme 1'>Scheme 1</option>";
                    }
                    if ($months >= $scheme_2['permanentStaff']) {
                        $_SESSION['scheme'] .= "<option value='Scheme 2'>Scheme 2</option>";
                    }
                    if ($months >= $scheme_3['permanentStaff']) {
                        $_SESSION['scheme'] .= "<option value='Scheme 3'>Scheme 3</option>";
                    }
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
        }else {
            echo "records are not ok";
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
        } else if ($result['userRole'] == "departmentHead") {
            header('Location:../../view/departmentHead/dhViewSchemeDetailsV.php');
        } else if ($result['userRole'] == "medicalSchemeMember") {
            header('Location:../../view/medicalSchemeMember/moViewSchemeDetailsV.php');
        } else {
            echo "USER";
        }
    }
?>