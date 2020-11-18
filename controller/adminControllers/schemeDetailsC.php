<?php

    session_start();
    require_once('../model/Model.php');
    require_once('../config/database.php');

?>

<?php
 
    $user_id = mysqli_real_escape_string($connect, $_GET['user_id']);
    // echo $user_id;
    $result_set = Model::view($user_id, $connect);

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
            $_SESSION['designation'] = $result['designation'];
            $_SESSION['appointment'] = $result['appointment'];

            if ($result['userRole'] == "admin") {
                header('Location:../view/admin/aProfileV.php');
            }
            else if ($result['userRole'] == "academicStaffMemb") {
                header('Location:../view/academicStaffMember/asmProfileV.php');
            }
            else if ($result['userRole'] == "nonAcademicStaffMemb") {
                header('Location:../view/nonAcademicStaffMember/nasmProfileV.php');
            }
            else if ($result['userRole'] == "attendanceMain") {
                header('Location:../view/attendanceMaintainer/amProfileV.php');
            }
            else if ($result['userRole'] == "hallAllocationMain") {
                header('Location:../view/hallAllocationMaintainer/hamProfileV.php');
            }
            else if ($result['userRole'] == "mahapolaSchemeMain") {
                header('Location:../view/mahapolaSchemeMaintainer/mmProfileV.php');
            }
            else if ($result['userRole'] == "medicalSchemeMain") {
                header('Location:../view/medicalSchemeMaintainer/msmProfileV.php');
            }
            else if ($result['userRole'] == "medicalSchemeMemb") {
                header('Location:../view/medicalSchemeMember/memProfileV.php');
            }
            else if ($result['userRole'] == "recordsViewer") {
                header('Location:../view/reportViewer/rvProfileV.php');
            }
            else if ($result['userRole'] == "departmentHead") {
                header('Location:../view/departmentHead/dhProfileV.php');
            }
            else if ($result['userRole'] == "medicalOfficer") {
                header('Location:../view/medicalOfficer/moProfileV.php');
            }
            else {
                echo "USER";
            }
        }
        else{
            header('Location:../view/medicalOfficer/aQueryFailedV.php');
            // echo "User not Found!";
        }
    }
    else{
        header('Location:../view/medicalOfficer/aQueryFailedV.php');
    }

?>