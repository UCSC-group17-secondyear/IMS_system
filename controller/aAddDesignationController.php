<?php

    session_start();
    require_once('../config/database.php');
    require_once('../model/Model.php');

    if (isset($_POST['addDesignation-submit'])) {
        
        $designation = mysqli_real_escape_string($connect, $_POST['designation']);
        $description = mysqli_real_escape_string($connect, $_POST['description']);
        
        $checkDesignation = Model::checkDesignationName($designation, $connect);

        if (mysqli_num_rows($checkDesignation)==1) {
            header('Location:../view/admin/aDesignationExistsTwoV.php');
        }
        else {

            $result = Model::enterDesignation($designation, $description, $connect);
        
            if ($result) {
                header('Location:../view/admin/aDesignationAddedV.php');
            }
            else{
                header('Location:../view/admin/aDesignationNotAddedV.php');
            }
        }
        
    }

?>