<?php

    session_start();
    require_once('../../config/database.php');
    require_once('../../model/adminModel/manageDepartmentsModel.php');

    $_SESSION['dept_list'] = '';

    $records = adminModel::viewDepartments($connect);

    $isEmpty = adminModel::isEmptyDept($connect);

    $emp = mysqli_fetch_assoc($isEmpty);

    if ($emp["COUNT(department_id)"]==0) {
        header('Location:../../view/admin/aNoDepartmentsAvailableV.php');
    }
    else {
        if ($records) {
            while ($record = mysqli_fetch_assoc($records)) {
                $_SESSION['dept_list'] .= "<tr>";
                $_SESSION['dept_list'] .= "<td>{$record['department']}</td>";
                $_SESSION['dept_list'] .= "<td>{$record['department_abbriviation']}</td>";
                $_SESSION['dept_list'] .= "<td>{$record['department_head']}</td>";
                $_SESSION['dept_list'] .= "<td>{$record['department_head_email']}</td>";
                $_SESSION['dept_list'] .= "<td><a class=\"green\" href=\"../../controller/adminControllers/aUpdateDepartmentController.php?dept_id={$record['department_id']}\">Update</a></td>";
                $_SESSION['dept_list'] .= "<td><a class=\"red\" href=\"../../controller/adminControllers/aDeleteDepartmentController.php?dept_id={$record['department_id']}\" onclick=\"return confirm('Are you sure?');\">Delete</a></td>";
                $_SESSION['dept_list'] .= "</tr>";

                header('Location:../../view/admin/aViewDepartmentV.php');
            }
        }
        else {
            header('Location:../../view/admin/aNoDepartmentsAvailableV.php');
        }
    }

?>