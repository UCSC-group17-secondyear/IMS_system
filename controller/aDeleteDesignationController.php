<?php

    session_start();
    require_once('../config/database.php');
    require_once('../model/Model.php');

    if (isset($_GET['designation_id'])) {
        
        $designation_id = mysqli_real_escape_string($connect, $_GET['designation_id']);

        $result = Model::deleteDesignation($designation_id, $connect);

        if ($result) {
            echo "Designation successfully deleted.";
        }
        else{
            echo "Database query failed";
        }

    }

?>