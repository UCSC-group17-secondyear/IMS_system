<?php
    session_start();
    require_once('../../config/database.php');
    require_once('../../model/mmModel/mmModel.php');
?>

<?php

    if(isset($_POST['display-list'])){

        $batch_no = mysqli_real_escape_string($connect, $_POST['batch_no']);
        $degreeId = mysqli_real_escape_string($connect, $_POST['degree']);
        echo $batch_no;
        echo $degreeId;

        $result_nominated = mmModel::getNominatedList($batch_no, $degreeId, $connect);
        //print_r($result_nominated);

        $_SESSION['nominated_stu'] = '';

        if(mysqli_num_rows($result_nominated)>0){
            while($row_nominated = mysqli_fetch_assoc($result_nominated)){

                $_SESSION['nominated_stu'] .= "<tr>";
                $_SESSION['nominated_stu'] .= "<td>{$row_nominated['student_index']}</td>";
                $_SESSION['nominated_stu'] .= "<td>{$row_nominated['student_initials']}.{$row_nominated['student_surname']}</td>";

                header('Location:../../view/mahapolaSchemeMaintainer/mmNominatedListV.php');
            }
        }
       
    }


?>