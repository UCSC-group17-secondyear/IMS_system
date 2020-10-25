<?php
    session_start();
    require_once('../model/Model.php');
    require_once('../config/database.php');

?>

<?php

    if(isset($_POST['mahapola-mark-submit'])){

    $student_index = mysqli_real_escape_string($connect, $_GET['student_index']);

    $result_set = Model::getStuDetailsIndex($student_index, $connect);

    if($result_set){
        if(mysqli_num_rows($result_set)==1){

            $result = mysqli_fetch_assoc($result_set);

            $_SESSION['student_initials'] = $result['student_initials'];
            $_SESSION['student_surname'] = $result['student_surname'];
            $_SESSION['student_index'] = $result['student_index'];
            $_SESSION['degree'] = $result['degree'];

            header('Location:../view/mahapolaSchemeMaintainer/mmStudentDetailsV.php');
        }

        else{
            echo "Student not Found!";
        }
    }
    else
        {
            echo "Query Unsuccessful";   
        }
    }
?>