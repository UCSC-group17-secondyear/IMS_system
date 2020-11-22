<?php

    session_start();
    require_once('../config/database.php');
    require_once('../model/Model.php');

    $_SESSION['dept_list'] = '';

    $records = Model::viewDepartments($connect);

    $isEmpty = Model::isEmptyDept($connect);

    $emp = mysqli_fetch_assoc($isEmpty);

    if ($emp["COUNT(department_id)"]==0) {
        header('Location:../view/admin/aNoDepartmentsAvailableV.php');
    }
    else {
        if ($records) {
            while ($record = mysqli_fetch_assoc($records)) {
                $_SESSION['dept_list'] .= "<tr>";
                $_SESSION['dept_list'] .= "<td>{$record['department']}</td>";
                $_SESSION['dept_list'] .= "<td>{$record['department_abbriviation']}</td>";
                $_SESSION['dept_list'] .= "<td>{$record['department_head']}</td>";
                $_SESSION['dept_list'] .= "<td>{$record['department_head_email']}</td>";
                $_SESSION['dept_list'] .= "<td><a href=\"../../controller/aUpdateDepartmentController.php?dept_id={$record['department_id']}\">Update</a></td>";
                $_SESSION['dept_list'] .= "<td><a href=\"../../controller/aDeleteDepartmentController.php?dept_id={$record['department_id']}\" onclick=\"return confirm('Are you sure?');\">Delete</a></td>";
                $_SESSION['dept_list'] .= "</tr>";

                header('Location:../view/admin/aViewDepartmentV.php');
            }
        }
        else {
            header('Location:../view/admin/aNoDepartmentsAvailableV.php');
        }
    }

?>