<?php

    session_start();
    require_once('../config/database.php');
    require_once('../model/Model.php');

    $_SESSION['hall_list'] = '';

    $records = Model::viewHalls($connect);

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

            header('Location:../view/admin/aUpdateRemoveHallV.php');
        }
    }
    else {
        echo "Database query failed.";
    }

?>