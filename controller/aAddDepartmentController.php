<?php

    session_start();
    require_once('../config/database.php');
    require_once('../model/Model.php');

    if (isset($_POST['addDepartment-submit'])) {
        
        $dept_name = mysqli_real_escape_string($connect, $_POST['dept_name']);
        $dept_head = mysqli_real_escape_string($connect, $_POST['dept_head']);
        $description = mysqli_real_escape_string($connect, $_POST['description']);
        
        $checkDept = Model::checkDeptName($dept_name, $connect);

        if (mysqli_num_rows($checkDept)==1) {
            echo "This hall already exist.";
        }
        else {

            $result = Model::enterDepartment($dept_name, $dept_head, $description, $connect);
        
            if ($result) {
                echo "Successfully entered department.";
            }
            else{
                echo "Query failed";
            }
        }
        
    }

?>