<?php

    session_start();
    require_once('../../config/database.php');
    require_once('../../model/adminModel/manageSemestersModel.php');

    if (isset($_POST['addSemester-submit'])) {
        
        $semester = mysqli_real_escape_string($connect, $_POST['semester']);
        $academic_year = mysqli_real_escape_string($connect, $_POST['academic_year']);
        echo $start_date = mysqli_real_escape_string($connect, $_POST['start_date']);
        echo $end_date = mysqli_real_escape_string($connect, $_POST['end_date']);

        if (strtotime($start_date)>strtotime($end_date)) {
            header('Location:../../view/admin/aCheckDateV.php');
        }
        else {
            if ($semester=='First Semester') {       
                $digit = 1;
            }
            else {
                $digit = 2;
            }

            $_SESSION['sem'] = $digit;
            $_SESSION['yr'] = $academic_year;

            $result = adminModel::enterSemester($semester, $academic_year, $digit, $start_date, $end_date, $connect);
            
            if ($result) {
                header('Location:../../view/admin/aSemesterAddedV.php');
            }
            else{
                header('Location:../../view/admin/aSemesterNotAddedV.php');
            }
        }
        
    }
    else {
        $records = adminModel::getSemAndYr($connect);

        if ($records) {
            while ($record = mysqli_fetch_array($records)) {

                $academic_year = $record['academic_year'];
                $semester = $record['semester'];
                $stu_id = $record['std_id']; echo "<br>";

                if ($semester==1) {
                    $semester = 2;

                    $result = adminModel::updateStudent($stu_id, $semester, $academic_year, $connect);

                    if ($result) {
                        header('Location:../../view/admin/aStudentUpdatedV.php');
                    }else {
                        header('Location:../../view/admin/aStudentUpdatedV.php');
                    } 

                }
                elseif ($semester==2) {
                    if ($academic_year==4) {
                        
                        $result = adminModel::deleteStudent($stu_id,$connect);

                        if ($result) {
                            header('Location:../../view/admin/aStudentUpdatedV.php');
                        }
                        else{
                            header('Location:../../view/admin/aStudentUpdatedV.php');
                        }

                    }
                    else {
                        $semester = 1;
                        $academic_year = $academic_year+1;

                        $result = adminModel::updateStudent($stu_id, $semester, $academic_year, $connect);

                        if ($result) {
                            header('Location:../../view/admin/aStudentUpdatedV.php');
                        }else {
                            header('Location:../../view/admin/aStudentUpdatedV.php');
                        } 
                    }
                }
			}
        }

    }

?>