<?php

    session_start();
    require_once('../../config/database.php');
    require_once('../../model/adminModel/manageHallsModel.php');

    if (isset($_POST['addHall-submit'])) {
        
        $hall_name = mysqli_real_escape_string($connect, $_POST['hall_name']);
        $hall_location = mysqli_real_escape_string($connect, $_POST['hall_location']);
        $seating_capacity = mysqli_real_escape_string($connect, $_POST['seating_capacity']);
        $ac = mysqli_real_escape_string($connect, $_POST['ac']);
        
        $checkHall = adminModel::checkHallName($hall_name, $connect);

        if (mysqli_num_rows($checkHall)==1) {
            header('Location:../../view/admin/aHallExistsTwoV.php');
        }
        else{

            $result = adminModel::enterHall($hall_name, $hall_location, $seating_capacity, $ac, $connect);
        
            if ($result) {
                header('Location:../../view/admin/aHallAddedV.php');
            }
            else{
                header('Location:../../view/admin/aHallNotAddedV.php');
            }
        }

    }

?>