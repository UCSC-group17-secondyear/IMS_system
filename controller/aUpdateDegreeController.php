<?php

    session_start();
    require_once('../config/database.php');
    require_once('../model/Model.php');


    if (isset($_GET['degree_id'])) {
        $degree_id = mysqli_real_escape_string($connect, $_GET['degree_id']);

        $results = Model::viewADegree($degree_id, $connect);

        if ($results) {
            if (mysqli_num_rows($results)==1) {
                $result = mysqli_fetch_assoc($results);
                $_SESSION['degree_id'] = $result['degree_id'];
                $_SESSION['degree_name'] = $result['degree_name'];
                $_SESSION['degree_abbriviation'] = $result['degree_abbriviation'];

                header('Location:../view/admin/aEditDegreeV.php');
            }
        }
        else {
            echo "Database query failed.";
        }
    }

    elseif (isset($_POST['updateDegree-submit'])) {
        $degree_id = $_SESSION['degree_id'];
        $degree_name = mysqli_real_escape_string($connect, $_POST['degree_name']);
        $degree_abbriviation = mysqli_real_escape_string($connect, $_POST['degree_abbriviation']);

        $checkDegree = Model::checkDegreeThree($degree_id, $degree_name, $connect);

        if (mysqli_num_rows($checkDegree)==1) {
            echo "This degree already exists.";
        }
        else {
            $result = Model::updateDegree($degree_id, $degree_name, $degree_abbriviation, $connect);

            if ($result) {
                echo "Succesfully updated.";
            }else {
                echo "query failed";
            }
        }

    }

    elseif (isset($_POST['removeDegree-submit'])) {
        
    }

?>