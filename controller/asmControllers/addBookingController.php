<?php

    session_start();
    include('../../config/database.php');
    include('../../model/adminModel/manageHallsModel.php');
    include('../../model/asmModel/manageBookingModel.php');

    if (isset($_GET['user_id']) && !isset($_POST['add-book-submit'])) {
        $user_id = mysqli_real_escape_string($connect, $_GET['user_id']);
        // $records = adminModel::hall($connect);
        $today = date('Y-m-d');

        $records = asmModel::getSemEndDate($today, $connect);

        $answers = asmModel::getRole($user_id, $connect);

        $answer = mysqli_fetch_assoc($answers);

        $role = $answer['userRole_id'];
        $_SESSION['role'] = $role;

        // $_SESSION['halls'] = '';

        if ($records) {
            
            while ($record = mysqli_fetch_array($records)) {
                $_SESSION['max-date'] = $record['end_date'];
                $_SESSION['sem_id'] = $record['sem_id'];
             }

            if ($role == 2) {
                header('Location:../../view/hallAllocationMaintainer/hamAddBookingV.php');
            }
            elseif ($role == 10) {
                header('Location:../../view/academicStaffMember/asmAddBookingV.php');
            }

        }
    }

    if (isset($_POST['add-book-submit']) && isset($_GET['hall'])) {
        $user_id = mysqli_real_escape_string($connect, $_GET['user_id']);
        $date = mysqli_real_escape_string($connect, $_POST['date']);
        $startTime =  mysqli_real_escape_string($connect, $_POST['startTime']);
        $endTime =  mysqli_real_escape_string($connect, $_POST['endTime']);

        $_SESSION['date'] = $date;
        $_SESSION['startTime'] = $startTime;
        $_SESSION['endTime'] = $endTime;

        $sem_id = $_SESSION['sem_id'];

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
                            header('Location:../../view/hallAllocationMaintainer/hamAddBookingTwoV.php');
                        }
                        elseif ($_SESSION['role'] == 10) {
                            header('Location:../../view/academicStaffMember/asmAddBookingTwoV.php');
                        }
                    }
                }

            }
        }
    }

    if (isset($_POST['add-book-submit']) && !isset($_GET['hall'])) {
        $user_id = mysqli_real_escape_string($connect, $_GET['user_id']);
        $hall = mysqli_real_escape_string($connect, $_POST['hall']);
        $reason = mysqli_real_escape_string($connect, $_POST['reason']);

        $date = $_SESSION['date'];
        $startTime =  $_SESSION['startTime'];
        $endTime =  $_SESSION['endTime'];

        $check = asmModel::checkHall($hall, $date, $startTime, $endTime, $connect);
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

            $result = asmModel::book($user_id, $hall, $sem_id, $date, $startTime, $endTime, $reason, $connect);

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