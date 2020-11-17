<?php

    session_start();
    require_once('../config/database.php');
    require_once('../model/Model.php');

    if (isset($_GET['hall_id'])) {
        
        $hall_id = mysqli_real_escape_string($connect, $_GET['hall_id']);

        $result = Model::deleteHall($hall_id, $connect);

        if ($result) {
            header('Location:../view/admin/aHallDeletedV.php');
        }
        else{
            header('Location:../view/admin/aHallNotDeletedV.php');
        }

    }

?>