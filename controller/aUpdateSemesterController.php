<?php

    session_start();
    require_once('../config/database.php');
    require_once('../model/Model.php');


    if (isset($_GET['sem_id'])) {
        $sem_id = mysqli_real_escape_string($connect, $_GET['sem_id']);

        $results = Model::viewASem($sem_id, $connect);

        if ($results) {
            if (mysqli_num_rows($results)==1) {
                $result = mysqli_fetch_assoc($results);
                $_SESSION['sem_id'] = $result['sem_id'];
                $_SESSION['semester'] = $result['semester'];
                $_SESSION['academic_year'] = $result['academic_year'];
                $_SESSION['start_date'] = $result['start_date'];
                $_SESSION['end_date'] = $result['end_date'];

                header('Location:../view/admin/aUpdateSemesterV.php');
            }
        }
        else {
            echo "Database query failed.";
        }
    }

    elseif (isset($_POST['addSemester-submit'])) {
        
        $sem_id = $_SESSION['sem_id'];
        $semester = mysqli_real_escape_string($connect, $_POST['semester']);
        $academic_year = mysqli_real_escape_string($connect, $_POST['academic_year']);
        $start_date = mysqli_real_escape_string($connect, $_POST['start_date']);
        $end_date = mysqli_real_escape_string($connect, $_POST['end_date']);

        // echo $sem_id;
        // echo $semester;
        // echo $academic_year;
        // echo $start_date;
        // echo $end_date;

        $result = Model::updateSemester($sem_id, $semester, $academic_year, $start_date, $end_date, $connect);

        if ($result) {
            header('Location:../view/admin/aSemesterUpdatedV.php');
        }else {
            header('Location:../view/admin/aSemesterNotUpdatedV.php');
        }
    }

    elseif (isset($_POST['updateSemester'])) {
        $academic_year = mysqli_real_escape_string($connect, $_POST['academic_year']);
        $semester = mysqli_real_escape_string($connect, $_POST['semester']);

        $results = Model::viewASemUsingName($academic_year, $semester, $connect);

        if ($results) {
            if (mysqli_num_rows($results)==1) {
                $result = mysqli_fetch_assoc($results);
                $_SESSION['sem_id'] = $result['sem_id'];
                $_SESSION['semester'] = $result['semester'];
                $_SESSION['academic_year'] = $result['academic_year'];
                $_SESSION['start_date'] = $result['start_date'];
                $_SESSION['end_date'] = $result['end_date'];

                header('Location:../view/admin/aUpdateSemesterV.php');
            }
        }
        else {
            echo "Database query failed.";
        }
    }

    elseif (isset($_POST['deleteSemester'])) {
        $academic_year = mysqli_real_escape_string($connect, $_POST['academic_year']);
        $semester = mysqli_real_escape_string($connect, $_POST['semester']);

        $result = Model::deleteSemUsingName($academic_year, $semester, $connect);

        if ($result) {
            header('Location:../view/admin/aSemesterDeletedTwoV.php');
        }
        else{
            header('Location:../view/admin/aSemesterNotDeletedTwoV.php');
        }
    }
    

?>