<?php

    session_start();
    require_once('../../model/basicModel/manageProfileModel.php');
    require_once('../../model/adminModel/manageDesignationsModel.php');
    require_once('../../config/database.php');

?>

<?php
    $_SESSION['design'] = '';
    $_SESSION['posts'] = '';
    $user_id = mysqli_real_escape_string($connect, $_GET['user_id']);
    $result_set = basicModel::view($user_id, $connect);
    $records = adminModel::designation($connect);
    $records2 = adminModel::getPost($connect);

    if ($result_set && $records && $records2) {
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

            while ($record = mysqli_fetch_array($records)) {
                $_SESSION['design'] .= "<option value='".$record['designation_id']."'>".$record['designation_name']."</option>";
            }

            if ($result['userRole'] == "admin") {
                header('Location:../../view/admin/aUpdateProfileV.php');
            }
            else if ($result['userRole'] == "academicStaffMemb") {
                header('Location:../../view/academicStaffMember/asmUpdateProfileV.php');
            }
            else if ($result['userRole'] == "nonAcademicStaffMemb") {
                header('Location:../../view/nonAcademicStaffMember/nasmUpdateProfileV.php');
            }
            else if ($result['userRole'] == "attendanceMain") {
                header('Location:../../view/attendanceMaintainer/amUpdateProfileV.php');
            }
            else if ($result['userRole'] == "hallAllocationMain") {
                header('Location:../../view/hallAllocationMaintainer/hamUpdateProfileV.php');
            }
            else if ($result['userRole'] == "mahapolaSchemeMain") {
                header('Location:../../view/mahapolaSchemeMaintainer/mmUpdateProfileV.php');
            }
            else if ($result['userRole'] == "medicalSchemeMain") {
                header('Location:../../view/medicalSchemeMaintainer/msmUpdateProfileV.php');
            }
            else if ($result['userRole'] == "medicalSchemeMemb") {
                header('Location:../../view/medicalSchemeMember/memUpdateProfileV.php');
            }
            else if ($result['userRole'] == "recordsViewer") {
                header('Location:../../view/reportViewer/rvUpdateProfileV.php');
            }
            else if ($result['userRole'] == "departmentHead") {
                header('Location:../../view/departmentHead/dhUpdateProfileV.php');
            }
            else if ($result['userRole'] == "medicalOfficer") {
                header('Location:../../view/medicalOfficer/moUpdateProfileV.php');
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