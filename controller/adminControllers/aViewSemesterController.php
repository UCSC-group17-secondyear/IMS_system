<?php

    session_start();
    require_once('../../config/database.php');
    require_once('../../model/adminModel/manageSemestersModel.php');

    $_SESSION['semester_list'] = '';

    $records = adminModel::viewSemesters($connect);

    $isEmpty = adminModel::isEmptySem($connect);

    $emp = mysqli_fetch_assoc($isEmpty);

    if ($emp["COUNT(sem_id)"]==0) {
        header('Location:../../view/admin/aNoSemestersAvailableV.php');
    }
    else {
        if ($records) {
            while ($record = mysqli_fetch_assoc($records)) {
                $_SESSION['semester_list'] .= "<tr>";
                $_SESSION['semester_list'] .= "<td>{$record['academic_year']}</td>";
                $_SESSION['semester_list'] .= "<td>{$record['semester']}</td>";
                $_SESSION['semester_list'] .= "<td>{$record['start_date']}</td>";
                $_SESSION['semester_list'] .= "<td>{$record['end_date']}</td>";
                $_SESSION['semester_list'] .= "<td><a class=\"green\" href=\"../../controller/adminControllers/aUpdateSemesterController.php?sem_id={$record['sem_id']}\">Update</a></td>";
                $_SESSION['semester_list'] .= "<td><a class=\"red\" href=\"../../controller/adminControllers/aDeleteSemesterController.php?sem_id={$record['sem_id']}\" onclick=\"return confirm('Are you sure?');\">Delete</a></td>";
                $_SESSION['semester_list'] .= "</tr>";

                header('Location:../../view/admin/aViewSemesterV.php');
            }
        }
        else {
            echo "Database query failed.";
        }
    }

?>