<?php

    session_start();
    require_once('../config/database.php');
    require_once('../model/Model.php');

    if (isset($_GET['degree_id'])) {
        
        $degree_id = mysqli_real_escape_string($connect, $_GET['degree_id']);

        $result = Model::deleteDegree($degree_id, $connect);

        if ($result) {
            echo "Degree successfully deleted.";
        }
        else{
            echo "Database query failed";
        }

    }

?>