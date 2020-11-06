<?php

    session_start();
    require_once('../config/database.php');
    require_once('../model/Model.php');


    if (isset($_GET['hall_id'])) {
        $hall_id = mysqli_real_escape_string($connect, $_GET['hall_id']);

        $results = Model::viewAHall($hall_id, $connect);

        if ($results) {
            if (mysqli_num_rows($results)==1) {
                $result = mysqli_fetch_assoc($results);
                $_SESSION['hall_id'] = $result['hall_id'];
                $_SESSION['hall_name'] = $result['hall_name'];
                $_SESSION['seating_capacity'] = $result['seating_capacity'];
                $_SESSION['location'] = $result['location'];
                $_SESSION['AC'] = $result['AC'];

                header('Location:../view/admin/aUpdateHallV.php');
            }
        }
        else {
            echo "Database query failed.";
        }
    }

    elseif (isset($_POST['updateHall-submit'])) {
        $hall_id = $_SESSION['hall_id'];
        $hall_name = mysqli_real_escape_string($connect, $_POST['hall_name']);
        $location = mysqli_real_escape_string($connect, $_POST['hall_location']);
        $seating_capacity = mysqli_real_escape_string($connect, $_POST['seating_capacity']);
        $ac = mysqli_real_escape_string($connect, $_POST['ac']);

        $checkHall = Model::checkHallThree($hall_id, $hall_name, $connect);

        if (mysqli_num_rows($checkHall)==1) {
            echo "This hall already exists.";
        }
        else {
            $result = Model::updateHall($hall_id, $hall_name, $location, $seating_capacity, $ac, $connect);

            if ($result) {
                echo "Succesfully updated.";
            }else {
                echo "query failed";
            }
        }

    }

    elseif (isset($_POST['updateHall'])) {
        $hall = mysqli_real_escape_string($connect, $_POST['hall']);

        $results = Model::viewAHallUsingName($hall, $connect);

        if ($results) {
            if (mysqli_num_rows($results)==1) {
                $result = mysqli_fetch_assoc($results);
                $_SESSION['hall_id'] = $result['hall_id'];
                $_SESSION['hall_name'] = $result['hall_name'];
                $_SESSION['seating_capacity'] = $result['seating_capacity'];
                $_SESSION['location'] = $result['location'];
                $_SESSION['AC'] = $result['AC'];

                header('Location:../view/admin/aUpdateHallV.php');
            }
        }
        else {
            echo "Database query failed.";
        }
    }

    elseif (isset($_POST['deleteHall'])) {
        $hall = mysqli_real_escape_string($connect, $_POST['hall']);

        $result = Model::deleteHallUsingName($hall, $connect);

        if ($result) {
            echo "Hall successfully deleted.";
        }
        else{
            echo "Database query failed";
        }
    }
    

?>