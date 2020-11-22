<?php

    session_start();
    require_once('../config/database.php');
    require_once('../model/Model.php');

    if (isset($_POST['addDepartment-submit'])) {
        
        $dept_name = mysqli_real_escape_string($connect, $_POST['dept_name']);
        $abbr = mysqli_real_escape_string($connect, $_POST['abbriviation']);
        $dept_head = mysqli_real_escape_string($connect, $_POST['dept_head']);
        $dept_head_email = mysqli_real_escape_string($connect, $_POST['dept_head_email']);
        
        
        $checkDept = Model::checkDeptName($dept_name, $connect);

        if (mysqli_num_rows($checkDept)==1) {
            header('Location:../view/admin/aDepartmentExistsTwoV.php');
        }
        else {
            $result = Model::enterDepartment($dept_name, $abbr, $dept_head, $dept_head_email, $connect);
        
            if ($result) {
                header('Location:../view/admin/aDepartmentAddedV.php');
            }
            else{
                header('Location:../view/admin/aDepartmentNotAddedV.php');
            }
        }       
    }
    else {
        echo "No button is clicked.";
    }

?>