<?php

    session_start();
    include('../../config/database.php');
    include('../../model/adminModel/manageHallsModel.php');
    include('../../model/asmModel/manageBookingModel.php');

    if (isset($_GET['user_id']) && !isset($_POST['add-book-submit'])) {
        $user_id = mysqli_real_escape_string($connect, $_GET['user_id']);
        $records = adminModel::hall($connect);

        $answers = asmModel::getRole($user_id, $connect);

        $answer = mysqli_fetch_assoc($answers);

        $role = $answer['userRole_id'];
        $_SESSION['role'] = $role;

        $_SESSION['halls'] = '';

        if ($records) {
            
            while ($record = mysqli_fetch_array($records)) {
                $_SESSION['halls'] .= "<option value='".$record['hall_name']."'>". $record['hall_name']."</option>";
            }

            if ($role == 2) {
                header('Location:../../view/hallAllocationMaintainer/hamAddBookingV.php');
            }
            elseif ($role == 10) {
                header('Location:../../view/academicStaffMember/asmAddBookingV.php');
            }

        }
    }

    if (isset($_POST['add-book-submit'])) {
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

        $check = asmModel::checkHall($h_id, $date, $startTime, $endTime, $connect);
        if (mysqli_num_rows($check)==1) {
            if ($_SESSION['role'] == 2) {
                header('Location:../../view/hallAllocationMaintainer/hamAllReadyBookedV.php');
            }
            elseif ($_SESSION['role'] == 10) {
                header('Location:../../view/academicStaffMember/asmAllReadyBookedV.php');
            }            
        }
        else{
            $getSemId = asmModel::getSemId($date, $connect);

            if ($getSemId) {
                while ($rec2 = mysqli_fetch_assoc($getSemId)) {
                    $sem_id = $rec2['sem_id'];
                }
            }

            $result = asmModel::book($user_id, $h_id, $sem_id, $date, $startTime, $endTime, $reason, $connect);

            if ($result) {

                if ($_SESSION['role'] == 2) {
                    header('Location:../../view/hallAllocationMaintainer/hamBookingAddedV.php');
                }
                elseif ($_SESSION['role'] == 10) {
                    header('Location:../../view/academicStaffMember/asmBookingAddedV.php');
                }
                
            }
        }

    }
    

?>