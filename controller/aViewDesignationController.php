<?php

    session_start();
    require_once('../config/database.php');
    require_once('../model/Model.php');

    $_SESSION['designation_list'] = '';

    $records = Model::viewDesignations($connect);

    if ($records) {
        while ($record = mysqli_fetch_assoc($records)) {
            $_SESSION['designation_list'] .= "<tr>";
            $_SESSION['designation_list'] .= "<td>{$record['designation_name']}</td>";
            $_SESSION['designation_list'] .= "<td>{$record['description']}</td>";
            $_SESSION['designation_list'] .= "<td><a href=\"../../controller/aUpdateDesignationController.php?designation_id={$record['designation_id']}\">Update</a></td>";
            $_SESSION['designation_list'] .= "<td><a href=\"../../controller/aDeleteDesignationController.php?designation_id={$record['designation_id']}\" onclick=\"return confirm('Are you sure?');\">Delete</a></td>";
            $_SESSION['designation_list'] .= "</tr>";

            header('Location:../view/admin/aUpdateRemoveDesignationV.php');
        }
    }
    else {
        echo "Database query failed.";
    }

?>