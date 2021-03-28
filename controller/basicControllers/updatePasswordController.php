<?php
    session_start();
    require_once('../../model/basicModel/manageProfileModel.php');
    require_once('../../config/database.php');

?>

<?php

    $user_id = mysqli_real_escape_string($connect, $_GET['user_id']);
    $result_set = basicModel::view($user_id, $connect);
    
    if ($result_set) {
        if (mysqli_num_rows($result_set)==1) {
            $result = mysqli_fetch_assoc($result_set);

            $_SESSION['userId'] = $result['userId'];

            if ($result['userRole_id'] == 1) {
                header('Location:../../view/admin/aUpdatePasswordV.php');
            }
            else if ($result['userRole_id'] == 10) {
                header('Location:../../view/academicStaffMember/asmUpdatePasswordV.php');
            }
            else if ($result['userRole_id'] == 11) {
                header('Location:../../view/nonAcademicStaffMember/nasmUpdatePasswordV.php');
            }
            else if ($result['userRole_id'] == 9) {
                header('Location:../../view/attendanceMaintainer/amUpdatePasswordV.php');
            }
            else if ($result['userRole_id'] == 2) {
                header('Location:../../view/hallAllocationMaintainer/hamUpdatePasswordV.php');
            }
            else if ($result['userRole_id'] == 7) {
                header('Location:../../view/mahapolaSchemeMaintainer/mmUpdatePasswordV.php');
            }
            else if ($result['userRole_id'] == 4) {
                header('Location:../../view/medicalSchemeMaintainer/msmUpdatePasswordV.php');
            }
            else if ($result['userRole_id'] == 5) {
                header('Location:../../view/medicalSchemeMember/memUpdatePasswordV.php');
            }
            else if ($result['userRole_id'] == 6) {
                header('Location:../../view/reportViewer/rvUpdatePasswordV.php');
            }
            else if ($result['userRole_id'] == 8) {
                header('Location:../../view/departmentHead/dhUpdatePasswordV.php');
            }
            else if ($result['userRole_id'] == 3) {
                header('Location:../../view/medicalOfficer/moUpdatePasswordV.php');
            }
            else {
                echo "USER";
            }
        }
    }

?>