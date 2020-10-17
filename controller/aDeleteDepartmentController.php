<?php

    session_start();
    require_once('../config/database.php');
    require_once('../model/Model.php');

    if (isset($_GET['dept_id'])) {
        
        $dept_id = mysqli_real_escape_string($connect, $_GET['dept_id']);

        $result = Model::deleteDepartment($dept_id, $connect);

        if ($result) {
            echo "Department successfully deleted.";
        }
        else{
            echo "Database query failed";
        }

    }

?>