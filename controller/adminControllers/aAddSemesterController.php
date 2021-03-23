<?php

    session_start();
    require_once('../../config/database.php');
    require_once('../../model/adminModel/manageSemestersModel.php');

    if (isset($_POST['addSemester-submit'])) {
        
        $semester = mysqli_real_escape_string($connect, $_POST['semester']);
        $academic_year = mysqli_real_escape_string($connect, $_POST['academic_year']);
        $start_date = mysqli_real_escape_string($connect, $_POST['start_date']);
        $end_date = mysqli_real_escape_string($connect, $_POST['end_date']);

        if ($semester=='FirstSemester') {       
            $digit = 1;
        }
        else {
            $digit = 0;
        }

        $result = adminModel::enterSemester($semester, $academic_year, $digit, $start_date, $end_date, $connect);
        
        if ($result) {
            header('Location:../../view/admin/aSemesterAddedV.php');
        }
        else{
            header('Location:../../view/admin/aSemesterNotAddedV.php');
        }
    }

?>