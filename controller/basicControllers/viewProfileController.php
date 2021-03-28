<?php

    session_start();
    require_once('../../model/basicModel/manageProfileModel.php');
    require_once('../../config/database.php');

?>

<?php
 
    $user_id = mysqli_real_escape_string($connect, $_GET['user_id']);
    $result_set = basicModel::view($user_id, $connect);

    if ($result_set) {
        if(mysqli_num_rows($result_set)==1){
            $result = mysqli_fetch_assoc($result_set);
            $_SESSION['userId'] = $result['userId'];
            $_SESSION['empid'] = $result['empid'];
            $_SESSION['initials'] = $result['initials'];
            $_SESSION['sname'] = $result['sname'];
            $_SESSION['email'] = $result['email'];
            $_SESSION['mobile'] = $result['mobile'];
            $_SESSION['tp'] = $result['tp'];
            $_SESSION['dob'] = $result['dob'];
            $_SESSION['designation'] = $result['designation_name'];
            $_SESSION['appointment'] = $result['appointment'];

            if ($result['userRole_id'] == 1) {
                header('Location:../../view/admin/aProfileV.php');
            }
            else if ($result['userRole_id'] == 10) {
                header('Location:../../view/academicStaffMember/asmProfileV.php');
            }
            else if ($result['userRole_id'] == 11) {
                header('Location:../../view/nonAcademicStaffMember/nasmProfileV.php');
            }
            else if ($result['userRole_id'] == 9) {
                header('Location:../../view/attendanceMaintainer/amProfileV.php');
            }
            else if ($result['userRole_id'] == 2) {
                header('Location:../../view/hallAllocationMaintainer/hamProfileV.php');
            }
            else if ($result['userRole_id'] == 7) {
                header('Location:../../view/mahapolaSchemeMaintainer/mmProfileV.php');
            }
            else if ($result['userRole_id'] == 4) {
                header('Location:../../view/medicalSchemeMaintainer/msmProfileV.php');
            }
            else if ($result['userRole_id'] == 5) {
                header('Location:../../view/medicalSchemeMember/memProfileV.php');
            }
            else if ($result['userRole_id'] == 6) {
                header('Location:../../view/reportViewer/rvProfileV.php');
            }
            else if ($result['userRole_id'] == 8) {
                header('Location:../../view/departmentHead/dhProfileV.php');
            }
            else if ($result['userRole_id'] == 3) {
                header('Location:../../view/medicalOfficer/moProfileV.php');
            }
            else {
                echo "USER";
            }

        }
        else{
            echo "User not Found!";
        }
    }
    else{
        echo "Query Unsuccessful";
    }

?>