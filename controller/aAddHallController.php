<?php

    session_start();
    require_once('../config/database.php');
    require_once('../model/Model.php');

    if (isset($_POST['addHall-submit'])) {
        
        $hall_name = mysqli_real_escape_string($connect, $_POST['hall_name']);
        $hall_location = mysqli_real_escape_string($connect, $_POST['hall_location']);
        $seating_capacity = mysqli_real_escape_string($connect, $_POST['seating_capacity']);
        $ac = mysqli_real_escape_string($connect, $_POST['ac']);
        // echo $hall_name;
        $checkHall = Model::checkHallName($hall_name, $connect);

        if (mysqli_num_rows($checkHall)==1) {
            echo "This hall already exist.";
        }
        else{

            $result = Model::enterHall($hall_name, $hall_location, $seating_capacity, $ac, $connect);
        
            if ($result) {
                echo "Successfully entered hall";
            }
            else{
                echo "Query failed";
            }
        }

        
    }

?>