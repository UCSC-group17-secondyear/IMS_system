<?php
    session_start();
    require_once('../../model/mmModel/mmModel.php');
    require_once('../../config/database.php');

?>

<?php

    if(isset($_POST['mark-mahapola-name-submit'])){
   
        $student_initials = mysqli_real_escape_string($connect, $_POST['student_initials']);
        $student_surname = mysqli_real_escape_string($connect, $_POST['student_surname']);
        
        $result_student = mmModel::getStuDetailsName($student_initials,$student_surname, $connect);

        if(mysqli_num_rows($result_student)==1){

            $stu = mysqli_fetch_assoc($result_student);

            $_SESSION['stu_initials'] = $stu['student_initials'];
            $_SESSION['stu_surname'] = $stu['student_surname'];
            $_SESSION['stu_index'] = $stu['student_index'];
            $_SESSION['stu_degree'] = $stu[''];

            header('Location:../../view/mahapolaSchemeMaintainer/mmStudentDetailsV.php');
        }

        else{
            echo "No records.";
        }

    }
?>