<?php
    session_start();
    require_once('../../config/database.php');
    require_once('../../model/rvModel/rvViewMedicalMembersModel.php');

    $_SESSION['medical_members'] = '';

    $medical_members = rvModel::fetchmembers($connect);

    if ($medical_members) {
        while ($mm = mysqli_fetch_assoc($medical_members)) {
            $_SESSION['medical_members'] .= "<tr>";
            $_SESSION['medical_members'] .= "<td>{$mm['empid']}</td>";
            $_SESSION['medical_members'] .= "<td>{$mm['initials']}</td>";
            $_SESSION['medical_members'] .= "<td>{$mm['sname']}</td>";
            $_SESSION['medical_members'] .= "<td>{$mm['department']}</td>";
            $_SESSION['medical_members'] .= "<td>{$mm['healthcondition']}</td>";
            $_SESSION['medical_members'] .= "<td>{$mm['civilstatus']}</td>";
            $_SESSION['medical_members'] .= "<td>{$mm['schemename']}</td>";
            $_SESSION['medical_members'] .= "<td>{$mm['member_type']}</td>";
            $_SESSION['medical_members'] .= "</tr>";

            header('Location:../../view/reportViewer/rvMedicalMemberlistV.php');
        }
    }
    else {
        header('Location:../../view/reportViewer/rvNoMedicalMembersV.php');
    }

?>