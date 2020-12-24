<?php
    session_start();
    require_once('../../model/mmModel/mmModel.php');
    require_once('../../config/database.php');

?>

<?php

    if(isset($_POST['mark-mahapola-index-submit'])){
   
        $student_index = mysqli_real_escape_string($connect, $_POST['student_index']);

        $result_student = mmModel::getStuDetailsIndex($student_index, $connect);
        $student_degree = mmModel::getStudentDegree($student_index,$connect);
       
        if(mysqli_num_rows($result_student)==1){

            $stu = mysqli_fetch_assoc($result_student);
            $stu_degree = mysqli_fetch_assoc($student_degree);

            $_SESSION['stu_initials'] = $stu['student_initials'];
            $_SESSION['stu_surname'] = $stu['student_surname'];
            $_SESSION['stu_index'] = $stu['student_index'];
            $_SESSION['stu_degree'] = $stu_degree['degree_name'];

            header('Location:../../view/mahapolaSchemeMaintainer/mmStudentDetailsV.php');
        }

        else{
            echo "No records.";
        }
           
   
    }
?>