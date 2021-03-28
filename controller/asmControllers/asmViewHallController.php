<?php

    session_start();
    require_once("../../config/database.php");
    require_once("../../model/adminModel/manageHallsModel.php");
    require_once("../../model/asmModel/manageBookingModel.php");

    if (!isset($_POST['hall-submit'])) {
        $user_id = mysqli_real_escape_string($connect, $_GET['user_id']);
        $records = adminModel::hall($connect);

        $answers = asmModel::getRole($user_id, $connect);

        $answer = mysqli_fetch_assoc($answers);

        $role = $answer['userRole_id'];
        $_SESSION['role'] = $role;

        $_SESSION['halls'] = '';

        if ($records) {
                
            while ($record = mysqli_fetch_array($records)) {
                $_SESSION['halls'] .= "<option value='".$record['hall_name']."'>". $record['hall_name']."</option>";
            }
            
            if ($role == 2) {
                header('Location:../../view/hallAllocationMaintainer/hamHallDetailsV.php');
            }
            elseif ($role == 10) {
                header('Location:../../view/academicStaffMember/asmHallDetailsV.php');
            }
            
        }
    }

    elseif (isset($_POST['hall-submit'])) {
        $hall = mysqli_escape_string($connect, $_POST['hall']);
        $_SESSION['halls'] = '';

        $records = adminModel::viewAHallUsingName($hall, $connect);

        if ($records) {
            while ($record = mysqli_fetch_assoc($records)) {
                $_SESSION['halls'] .= "<tr>";
                $_SESSION['halls'] .= "<td>{$record['hall_name']}</td>";
                $_SESSION['halls'] .= "<td>{$record['AC']}</td>";
                $_SESSION['halls'] .= "<td>{$record['seating_capacity']}</td>";
                $_SESSION['halls'] .= "<td>{$record['location']}</td>";
                $_SESSION['halls'] .= "</tr>";

                if ($_SESSION['role'] == 2) {
                    header('Location:../../view/hallAllocationMaintainer/hamViewHallDetailsV.php');
                }
                elseif ($_SESSION['role'] == 10) {
                    header('Location:../../view/academicStaffMember/asmViewHallDetailsV.php');
                }
                
            }
        }
    }
?>