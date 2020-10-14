<?php

    session_start();
    require_once('../model/Model.php');
    require_once('../config/database.php');

    if (isset($_POST['submit'])) {
        $booking_id = mysqli_real_escape_string($connect, $_GET['booking_id']);
        $user_id = mysqli_real_escape_string($connect, $_GET['user_id']);
        $date = mysqli_real_escape_string($connect, $_POST['date']);
        $hall = mysqli_real_escape_string($connect, $_POST['hall']);
        $startTime =  mysqli_real_escape_string($connect, $_POST['startTime']);
        $endTime =  mysqli_real_escape_string($connect, $_POST['endTime']);
        $reason = mysqli_real_escape_string($connect, $_POST['reason']);

        $check = Model::checkHallTwo($hall, $date, $startTime, $endTime, $booking_id, $connect);

        if (mysqli_num_rows($check)==1) {
            echo "Already booked.";
        }
        else{
            
            $result = Model::updateBook($booking_id, $hall, $date, $startTime, $endTime, $reason, $connect);

            if ($result) {
                echo "Booking Succefull...";
            }

        }

    }

?>