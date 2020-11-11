<?php

    session_start();
    require_once('../../config/database.php');
    require_once('../../model/adminModel/manageDegreesModel.php');

    $_SESSION['degree_list'] = '';

    $records = adminModel::viewDegrees($connect);

    if ($records) {
        while ($record = mysqli_fetch_assoc($records)) {
            $_SESSION['degree_list'] .= "<tr>";
            $_SESSION['degree_list'] .= "<td>{$record['degree_name']}</td>";
            $_SESSION['degree_list'] .= "<td>{$record['degree_abbriviation']}</td>";
            $_SESSION['degree_list'] .= "<td><a href=\"../../controller/aUpdateDegreeController.php?degree_id={$record['degree_id']}\">Edit</a></td>";
            $_SESSION['degree_list'] .= "<td><a href=\"../../controller/aDeleteDegreeController.php?degree_id={$record['degree_id']}\" onclick=\"return confirm('Are you sure?');\">Delete</a></td>";
            $_SESSION['degree_list'] .= "</tr>";

            header('Location:../../view/admin/aUpdateRemoveDegreeV.php');
        }
    }
    else {
        echo "Database query failed.";
    }

?>