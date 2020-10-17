<?php

    session_start();
    require_once('../config/database.php');
    require_once('../model/Model.php');

    if (isset($_POST['addSemester-submit'])) {
        
        $semester = mysqli_real_escape_string($connect, $_POST['semester']);
        $academic_year = mysqli_real_escape_string($connect, $_POST['academic_year']);
        $start_date = mysqli_real_escape_string($connect, $_POST['start_date']);
        $end_date = mysqli_real_escape_string($connect, $_POST['end_date']);

        $result = Model::enterSemester($semester, $academic_year, $start_date, $end_date, $connect);
        
        if ($result) {
            echo "Successfully entered semester";
        }
        else{
            echo "Query failed";
        }
    }

?>