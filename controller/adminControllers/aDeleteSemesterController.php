<?php

    session_start();
    require_once('../../config/database.php');
    require_once('../../model/adminModel/manageSemestersModel.php');

    if (isset($_GET['sem_id'])) {
        
        $sem_id = mysqli_real_escape_string($connect, $_GET['sem_id']);

        $result = adminModel::deleteSemester($sem_id, $connect);

        if ($result) {
            header('Location:../../view/admin/aSemesterDeletedV.php');
        }
        else{
            header('Location:../../view/admin/aSemesterNotDeletedV.php');
        }

    }

?>