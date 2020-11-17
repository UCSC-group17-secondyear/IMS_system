<?php

    session_start();
    require_once("../config/database.php");
    require_once("../model/Model.php");

    if (!isset($_POST['hall-submit'])) {
        $records = Model::hall($connect);

        $_SESSION['halls'] = '';

        if ($records) {
                
            while ($record = mysqli_fetch_array($records)) {
                $_SESSION['halls'] .= "<option value='".$record['hall_name']."'>". $record['hall_name']."</option>";
            }
            header('Location:../view/academicStaffMember/asmHallDetailsV.php');
        }
    }

    elseif (isset($_POST['hall-submit'])) {
        $hall = mysqli_escape_string($connect, $_POST['hall']);
        $_SESSION['halls'] = '';

        $records = Model::viewAHallUsingName($hall, $connect);

        if ($records) {
            while ($record = mysqli_fetch_assoc($records)) {
                $_SESSION['halls'] .= "<tr>";
                $_SESSION['halls'] .= "<td>{$record['hall_name']}</td>";
                $_SESSION['halls'] .= "<td>{$record['AC']}</td>";
                $_SESSION['halls'] .= "<td>{$record['seating_capacity']}</td>";
                $_SESSION['halls'] .= "<td>{$record['location']}</td>";
                $_SESSION['halls'] .= "</tr>";

                header('Location:../view/academicStaffMember/asmViewHallDetailsV.php');
            }
        }
    }
?>