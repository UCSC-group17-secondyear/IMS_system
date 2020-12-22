<?php

    session_start();
	require_once('../../config/database.php');
    require_once('../../model/asmModel/manageBookingModel.php');

    $booking_id = mysqli_real_escape_string($connect, $_GET['booking_id']);
    $user_id = mysqli_real_escape_string($connect, $_GET['user_id']);

    $result_set = asmModel::viewABook($booking_id, $connect);
    if ($result_set) {
        if(mysqli_num_rows($result_set)==1) {
            $result = mysqli_fetch_assoc($result_set);
            $_SESSION['booking_id'] = $result['booking_id'];
            $_SESSION['date'] = $result['date'];
            $_SESSION['start_time'] = $result['start_time'];
            $_SESSION['end_time'] = $result['end_time'];
            $_SESSION['reason'] = $result['reason'];
            $_SESSION['hall_name'] = $result['hall_name'];
            $_SESSION['user_id'] = $user_id;

            header('Location:../../view/academicStaffMember/asmUpdateBookingV.php');
        }
    }

?>