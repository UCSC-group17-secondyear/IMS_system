<?php

    session_start();
    include('../config/database.php');
    include('../model/Model.php');
	// require_once('../../config/database.php');
    // require_once('../../model/Model.php');

    $user_id = mysqli_real_escape_string($connect, $_GET['user_id']);
    $records = Model::hall($connect);

    $_SESSION['halls'] = '';

    if ($records) {
        
        while ($record = mysqli_fetch_array($records)) {
            $_SESSION['halls'] .= "<option value='".$record['hall_name']."'>". $record['hall_name']."</option>";
        }

        header('Location:../view/academicStaffMember/asmAddBookingV.php');

    }

?>