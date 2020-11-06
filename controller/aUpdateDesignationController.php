<?php

    session_start();
    require_once('../config/database.php');
    require_once('../model/Model.php');


    if (isset($_GET['designation_id'])) {
        $designation_id = mysqli_real_escape_string($connect, $_GET['designation_id']);

        $results = Model::viewADesign($designation_id, $connect);

        if ($results) {
            if (mysqli_num_rows($results)==1) {
                $result = mysqli_fetch_assoc($results);
                $_SESSION['designation_id'] = $result['designation_id'];
                $_SESSION['designation'] = $result['designation_name'];
                $_SESSION['description'] = $result['description'];
                header('Location:../view/admin/aUpdateDesignationV.php');
            }
        }
        else {
            echo "Database query failed.";
        }
    }

    elseif (isset($_POST['updateDesignation-submit'])) {
        $designation_id = $_SESSION['designation_id'];
        $designation = mysqli_real_escape_string($connect, $_POST['designation']);
        $description = mysqli_real_escape_string($connect, $_POST['description']);

        $checkDesign = Model::checkDesignThree($designation_id, $designation, $connect);

        if (mysqli_num_rows($checkDesign)==1) {
            echo "This designation already exists.";
        }
        else {
            $result = Model::updateDesignation($designation_id, $designation, $description, $connect);

            if ($result) {
                echo "Succesfully updated.";
            }else {
                echo "query failed";
            }
        }

    }
    
    elseif (isset($_POST['updateDesignation'])) {
        $designation = mysqli_real_escape_string($connect, $_POST['designation']);

        $results = Model::viewADesignUsingName($designation, $connect);

        if ($results) {
            if (mysqli_num_rows($results)==1) {
                $result = mysqli_fetch_assoc($results);
                $_SESSION['designation_id'] = $result['designation_id'];
                $_SESSION['designation'] = $result['designation_name'];
                $_SESSION['description'] = $result['description'];
                header('Location:../view/admin/aUpdateDesignationV.php');
            }
        }
        else {
            echo "Database query failed.";
        }
    }

    elseif (isset($_POST['deleteDesignation'])) {
        $designation = mysqli_real_escape_string($connect, $_POST['designation']);

        $result = Model::deleteDesignUsingName($designation, $connect);

        if ($result) {
            echo "Designation successfully deleted.";
        }
        else{
            echo "Database query failed";
        }
    }

?>