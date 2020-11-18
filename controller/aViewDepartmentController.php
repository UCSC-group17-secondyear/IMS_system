<?php

    session_start();
    require_once('../config/database.php');
    require_once('../model/Model.php');

    $_SESSION['dept_list'] = '';

    $records = Model::viewDepartments($connect);

    if ($records) {
        while ($record = mysqli_fetch_assoc($records)) {
            $_SESSION['dept_list'] .= "<tr>";
            $_SESSION['dept_list'] .= "<td>{$record['department']}</td>";
            $_SESSION['dept_list'] .= "<td>{$record['department_head']}</td>";
            $_SESSION['dept_list'] .= "<td>{$record['department_head_email']}</td>";
            $_SESSION['dept_list'] .= "<td>{$record['description']}</td>";
            $_SESSION['dept_list'] .= "<td><a href=\"../../controller/aUpdateDepartmentController.php?dept_id={$record['department_id']}\">Update</a></td>";
            $_SESSION['dept_list'] .= "<td><a href=\"../../controller/aDeleteDepartmentController.php?dept_id={$record['department_id']}\" onclick=\"return confirm('Are you sure?');\">Delete</a></td>";
            $_SESSION['dept_list'] .= "</tr>";

            header('Location:../view/admin/aViewDepartmentV.php');
        }
    }
    else {
        header('Location:../view/admin/aQueryFailedV.php');
    }

?>