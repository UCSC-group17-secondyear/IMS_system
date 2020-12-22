<?php

    session_start();
    require_once('../../config/database.php');
    require_once('../../model/adminModel/manageDesignationsModel.php');

    if (isset($_GET['designation_id'])) {
        
        $designation_id = mysqli_real_escape_string($connect, $_GET['designation_id']);

        $result = adminModel::deleteDesignation($designation_id, $connect);

        if ($result) {
            header('Location:../../view/admin/aDesignationDeletedV.php');
        }
        else{
            header('Location:../../view/admin/aDesignationNotDeletedV.php');
        }

    }

?>