<?php

    session_start();
    require_once('../config/database.php');
    require_once('../model/Model.php');

    $_SESSION['hall_list'] = '';

    $records = Model::viewHalls($connect);

    $isEmpty = Model::isEmptyHall($connect);

    $emp = mysqli_fetch_assoc($isEmpty);

    if ($emp["COUNT(hall_id)"]==0) {
        header('Location:../view/admin/aNoHallsAvailableV.php');
    }
    else{
        if ($records) {
            while ($record = mysqli_fetch_assoc($records)) {
                $_SESSION['hall_list'] .= "<tr>";
                $_SESSION['hall_list'] .= "<td>{$record['hall_name']}</td>";
                $_SESSION['hall_list'] .= "<td>{$record['seating_capacity']}</td>";
                $_SESSION['hall_list'] .= "<td>{$record['location']}</td>";
                $_SESSION['hall_list'] .= "<td>{$record['AC']}</td>";
                $_SESSION['hall_list'] .= "<td><a href=\"../../controller/aUpdateHallController.php?hall_id={$record['hall_id']}\">Update</a></td>";
                $_SESSION['hall_list'] .= "<td><a href=\"../../controller/aDeleteHallController.php?hall_id={$record['hall_id']}\" onclick=\"return confirm('Are you sure?');\">Delete</a></td>";
                $_SESSION['hall_list'] .= "</tr>";

                header('Location:../view/admin/aViewHallV.php');
            }
        }
        else {
            echo "Database query failed.";
        }
    }


?>