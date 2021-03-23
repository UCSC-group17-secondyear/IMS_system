<?php

    session_start();
    require_once('../../model/asmModel/manageBookingModel.php');
    require_once('../../model/adminModel/manageHallsModel.php');
    require_once('../../config/database.php');

    if (isset($_POST['submit'])) {
        $booking_id = mysqli_real_escape_string($connect, $_GET['booking_id']);
        $user_id = mysqli_real_escape_string($connect, $_GET['user_id']);
        $date = mysqli_real_escape_string($connect, $_POST['date']);
        $hall = mysqli_real_escape_string($connect, $_POST['hall']);
        $startTime =  mysqli_real_escape_string($connect, $_POST['startTime']);
        $endTime =  mysqli_real_escape_string($connect, $_POST['endTime']);
        $reason = mysqli_real_escape_string($connect, $_POST['reason']);

        $getHallId = asmModel::getHallId($hall, $connect);

        if ($getHallId) {
            while ($rec = mysqli_fetch_assoc($getHallId)) {
                $h_id = $rec['hall_id'];
            }
        }

        $check = adminModel::checkHallTwo($h_id, $date, $startTime, $endTime, $booking_id, $connect);

        if (mysqli_num_rows($check)==1) {
            header('Location:../../view/academicStaffMember/asmAllReadyBookedTwoV.php');
        }
        else{
            
            $result = asmModel::updateBook($booking_id, $h_id, $date, $startTime, $endTime, $reason, $connect);

            if ($result) {
                header('Location:../../view/academicStaffMember/asmUpdatedBookingV.php');
            }
            else {
                header('Location:../../view/academicStaffMember/asmNotUpdatedBookingV.php');
            }

        }

    }

?>