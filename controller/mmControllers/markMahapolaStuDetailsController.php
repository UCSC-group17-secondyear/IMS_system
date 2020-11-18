<?php
    session_start();
    require_once('../../model/mmModel.php');
    require_once('../../config/database.php');

?>

<?php

        //$student_index = mysqli_real_escape_string($connect, $_GET['student_index']);

        if(isset($_POST['mark-submit'])){

            // $mahapola_eligibility = mysqli_real_escape_string($connect, $_POST['mahapola_eligibility']);
            // $mahapola_category = mysqli_real_escape_string($connect, $_POST['mahapola_category']);

            // $result = Model::markStudentMahapola($student_index, $mahapola_category,$mahapola_eligibility,$connect);

            // if($result){
            //     echo "Marked succesfully";
            // }
            // else{
            //     echo "Query Unsuccsfull";
            // }

            header('Location:../../view/mahapolaSchemeMaintainer/mmStudentDetailsSaveV.php');
            
        }
?>