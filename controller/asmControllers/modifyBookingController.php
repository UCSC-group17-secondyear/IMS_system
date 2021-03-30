<?php

    session_start();
	require_once('../../config/database.php');
    require_once('../../model/asmModel/manageBookingModel.php');

    if (isset($_GET['booking_id']) && isset($_GET['user_id']) && !(isset($_POST['submit-continue'])) &&!(isset($_POST['add-book-submit'])) ) {
        $booking_id = mysqli_real_escape_string($connect, $_GET['booking_id']);
        $user_id = mysqli_real_escape_string($connect, $_GET['user_id']);

        
        $answers = asmModel::getRole($user_id, $connect);

        $answer = mysqli_fetch_assoc($answers);

        $role = $answer['userRole_id'];
        $_SESSION['role'] = $role;

        $today = date('Y-m-d');
        $records = asmModel::getSemEndDate($today, $connect);
        if ($records) {

            while ($record = mysqli_fetch_array($records)) {
                $_SESSION['max-date'] = $record['end_date'];
                $_SESSION['sem_id'] = $record['sem_id'];
            }
            
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

                    if ($role == 2) {
                        header('Location:../../view/hallAllocationMaintainer/hamUpdateBookingV.php');
                    }
                    elseif ($role == 10) {
                        header('Location:../../view/academicStaffMember/asmUpdateBookingV.php');
                    }

                }
            }
        }
    }
    elseif (isset($_POST['submit-continue'])) {
        $booking_id = mysqli_real_escape_string($connect, $_GET['booking_id']);
        $user_id = mysqli_real_escape_string($connect, $_GET['user_id']);
        $date = mysqli_real_escape_string($connect, $_POST['date']);
        $startTime =  mysqli_real_escape_string($connect, $_POST['startTime']);
        $endTime =  mysqli_real_escape_string($connect, $_POST['endTime']);

        $_SESSION['date'] = $date;
        $_SESSION['startTime'] = $startTime;
        $_SESSION['endTime'] = $endTime;
        
        $getDay = asmModel::getDay($date,$connect);

        if ($getDay) {
            $rec = mysqli_fetch_assoc($getDay);
            $day = $rec['day_name'];

            $not_avail_halls[] = '';
            $all_halls[] = '';

            $records = asmModel::getNotAvailableHalls($day, $sem_id, $startTime, $endTime, $connect);
            if ($records) {
                while ($rec = mysqli_fetch_assoc($records)) {
                    $not_avail_halls[] = $rec['hall_id'];
                }
                
                $results = asmModel::allHalls($connect);
                if ($results) {
                    while ($result = mysqli_fetch_assoc($results)) {
                        $all_halls[] = $result['hall_id'];
                    }
                     
                    $avail_halls = array_diff($all_halls,$not_avail_halls);

                    $_SESSION['available_halls'] = '';
                
                    if (count($avail_halls)>0) {
                        for($i =1; $i<count($all_halls) ; $i++){
                            $getHalls = asmModel::getHallNames($avail_halls[$i],$connect);
                            $hall = mysqli_fetch_assoc($getHalls);

                            if ($hall) {
                                echo $_SESSION['available_halls'] .= "<option value='".$hall['hall_id']."'>".$hall['hall_name']."</option>";
                            }

                        }
                        
                        if ($_SESSION['role'] == 2) {
                            header('Location:../../view/hallAllocationMaintainer/hamUpdateBookingTwoV.php');
                        }
                        elseif ($_SESSION['role'] == 10) {
                            header('Location:../../view/academicStaffMember/asmUpdateBookingTwoV.php');
                        }
                        
                    }
                }
            }
        }
    }
    elseif (isset($_POST['add-book-submit'])) {

            $booking_id = mysqli_real_escape_string($connect, $_GET['booking_id']);
            $user_id = mysqli_real_escape_string($connect, $_GET['user_id']);
            $hall = mysqli_real_escape_string($connect, $_POST['hall']);
            $reason = mysqli_real_escape_string($connect, $_POST['reason']);

            $date = $_SESSION['date'];
            $startTime =  $_SESSION['startTime'];
            $endTime =  $_SESSION['endTime'];
            $sem_id = $_SESSION['sem_id'];

            $check = asmModel::checkHallTwo($h_id, $date, $startTime, $endTime, $booking_id, $connect);

            if (mysqli_num_rows($check)==1) {
                header('Location:../../view/academicStaffMember/asmAllReadyBookedTwoV.php');
            }
            else{
                
                $result = asmModel::updateBook($booking_id, $hall, $sem_id, $date, $startTime, $endTime, $reason, $connect);

                if ($result) {

                    if ($_SESSION['role'] == 2) {
                        header('Location:../../view/hallAllocationMaintainer/hamBookingAddedV.php');
                    }
                    elseif ($_SESSION['role'] == 10) {
                        header('Location:../../view/academicStaffMember/asmBookingAddedV.php');
                    }
                    
                }
                else {
                    if ($_SESSION['role'] == 2) {
                        header('Location:../../view/hallAllocationMaintainer/hamBookingNotAddedV.php');
                    }
                    elseif ($_SESSION['role'] == 10) {
                        header('Location:../../view/academicStaffMember/asmBookingNotAddedV.php');
                    }
                }

            }

        
    }


?>