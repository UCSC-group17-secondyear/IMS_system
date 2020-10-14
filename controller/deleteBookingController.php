<?php

    session_start();
    require_once('../model/Model.php');
    require_once('../config/database.php');

?>

<?php

    if (isset($_GET['booking_id'])) {

        $booking_id = mysqli_real_escape_string($connect, $_GET['booking_id']);

        $result = Model::deleteBooking($booking_id, $connect);

        if ($result) {
            header('Location:../view/academicStaffMember/asmViewBookingListV.php?msg=book_deleted');
        }
        else {
            header('Location:../view/academicStaffMember/asmViewBookingListV.php?err=delete_failed');
        }

    }

?>