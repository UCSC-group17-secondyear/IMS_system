<?php

    session_start();
    require_once('../../model/asmModel/manageBookingModel.php');
    require_once('../../config/database.php');

?>

<?php

    if (isset($_GET['booking_id'])) {

        $booking_id = mysqli_real_escape_string($connect, $_GET['booking_id']);

        $result = asmModel::deleteBooking($booking_id, $connect);

        if ($result) {
            header('Location:../../view/academicStaffMember/asmDeletedBookingV.php');
        }
        else {
            header('Location:../../view/academicStaffMember/asmNotDeletedBookingV.php');
        }

    }

?>