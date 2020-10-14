<?php

    session_start();
	require_once('../config/database.php');
	require_once('../model/Model.php');

?>

<?php

    if (isset($_POST['submit'])) {
        $user_id = mysqli_real_escape_string($connect, $_GET['user_id']);
        $date = mysqli_real_escape_string($connect, $_POST['date']);
        $hall = mysqli_real_escape_string($connect, $_POST['hall']);
        $startTime =  mysqli_real_escape_string($connect, $_POST['startTime']);
        $endTime =  mysqli_real_escape_string($connect, $_POST['endTime']);
        $reason = mysqli_real_escape_string($connect, $_POST['reason']);

        $check = Model::checkHall($hall, $date, $startTime, $endTime, $connect);

        if (mysqli_num_rows($check)==1) {
            echo "Already booked.";
        }
        else{
            
            $result = Model::book($user_id, $hall, $date, $startTime, $endTime, $reason, $connect);

            if ($result) {
                echo "Booking Succefull...";
            }

        }

    }

?>