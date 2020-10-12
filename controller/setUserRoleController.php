<?php

    session_start();
	require_once('../config/database.php');
    require_once('../model/Model.php');
    
    if (isset($_POST['userRole-submit'])) {
        
        $empid = mysqli_real_escape_string($connect, $_POST['empid']);
        $userRole = mysqli_real_escape_string($connect, $_POST['userRole']);

        $checkEmpid = Model::checkEmpid($empid, $connect);

        if (mysqli_num_rows($checkEmpid) == 1) {
            
            $result = Model::setUserRole($empid, $userRole, $connect);

            if ($result) {
                echo "User role updated successfully..";
            }
            else{
                echo "Query is incorrect.";
            }
        }
        else {
            echo "Employee id is incorrect.";
        }

    }

?>