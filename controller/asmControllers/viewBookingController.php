<?php

    session_start();
    require_once('../../config/database.php');
    require_once('../../model/asmModel/manageBookingModel.php');
    
    $_SESSION['booking_list'] = '';

    $user_id = mysqli_real_escape_string($connect, $_GET['user_id']);

    $records = asmModel::viewBookings($user_id, $connect);
   
    if ($records) {
        if(mysqli_num_rows($records)==0){
            header('Location:../../view/academicStaffMember/asmNoMoreBookingsV.php');
        }
        else {
            while($record = mysqli_fetch_assoc($records)) {
                $_SESSION['booking_list'] .= "<tr>";
                $_SESSION['booking_list'] .= "<td>{$record['date']}</td>";
                $_SESSION['booking_list'] .= "<td>{$record['start_time']}</td>";
                $_SESSION['booking_list'] .= "<td>{$record['end_time']}</td>";
                $_SESSION['booking_list'] .= "<td>{$record['reason']}</td>";
                $_SESSION['booking_list'] .= "<td>{$record['hall_name']}</td>";
                $_SESSION['booking_list'] .= "<td><a href=\"../../controller/asmControllers/modifyBookingController.php?booking_id={$record['booking_id']}&user_id=$user_id\">Edit</a></td>";
                $_SESSION['booking_list'] .= "<td><a href=\"../../controller/asmControllers/deleteBookingController.php?booking_id={$record['booking_id']}\" onclick=\"return confirm('Are you sure?');\">Delete</a></td>";
                $_SESSION['booking_list'] .= "</tr>";

                header('Location:../../view/academicStaffMember/asmViewBookingListV.php');
            }
        }
        
    }else {
        echo "Database query failed.";
    }

?>