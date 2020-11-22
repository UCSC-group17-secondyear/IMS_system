<?php

    session_start();
    require_once('../config/database.php');
    require_once('../model/Model.php');

    $_SESSION['semester_list'] = '';

    $records = Model::viewSemesters($connect);

    $isEmpty = Model::isEmptySem($connect);

    $emp = mysqli_fetch_assoc($isEmpty);

    if ($emp["COUNT(sem_id)"]==0) {
        header('Location:../view/admin/aNoSemestersAvailableV.php');
    }
    else {
        if ($records) {
            while ($record = mysqli_fetch_assoc($records)) {
                $_SESSION['semester_list'] .= "<tr>";
                $_SESSION['semester_list'] .= "<td>{$record['semester']}</td>";
                $_SESSION['semester_list'] .= "<td>{$record['academic_year']}</td>";
                $_SESSION['semester_list'] .= "<td>{$record['start_date']}</td>";
                $_SESSION['semester_list'] .= "<td>{$record['end_date']}</td>";
                $_SESSION['semester_list'] .= "<td><a href=\"../../controller/aUpdateSemesterController.php?sem_id={$record['sem_id']}\">Edit</a></td>";
                $_SESSION['semester_list'] .= "<td><a href=\"../../controller/aDeleteSemesterController.php?sem_id={$record['sem_id']}\" onclick=\"return confirm('Are you sure?');\">Delete</a></td>";
                $_SESSION['semester_list'] .= "</tr>";

                header('Location:../view/admin/aViewSemesterV.php');
            }
        }
        else {
            echo "Database query failed.";
        }
    }

?>