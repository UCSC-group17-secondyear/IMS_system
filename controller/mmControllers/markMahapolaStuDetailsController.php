<?php
    session_start();
    require_once('../../model/mmModel/mmModel.php');
    require_once('../../config/database.php');

?>

<?php

        if(isset($_POST['mark-submit'])){

            $student_index = $_SESSION['stu_index'];
            $mahapola_nominated = mysqli_real_escape_string($connect, $_POST['mahapola-nominated']);
            // echo $student_index;
            // echo $mahapola_nominated;

            if($mahapola_nominated=='1'){
                $mahapola_category = mysqli_real_escape_string($connect, $_POST['mahapola-category']);
               //echo $mahapola_category;
            }

            $result_mahapola = mmModel::updateMahapolaStuDetails($student_index, $mahapola_nominated, $mahapola_category, $connect);

            if($result_mahapola){
                header('Location:../../view/mahapolaSchemeMaintainer/mmStudentDetailsSaveV.php');
                //echo "Updated";
            }
            else{
                echo "Query Failed";
            }

            
        }
?>