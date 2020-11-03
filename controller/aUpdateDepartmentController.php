<?php

    session_start();
    require_once('../config/database.php');
    require_once('../model/Model.php');


    if (isset($_GET['dept_id'])) {
        $dept_id = mysqli_real_escape_string($connect, $_GET['dept_id']);

        $results = Model::viewADept($dept_id, $connect);

        if ($results) {
            if (mysqli_num_rows($results)==1) {
                $result = mysqli_fetch_assoc($results);
                $_SESSION['dept_id'] = $result['department_id'];
                $_SESSION['department'] = $result['department'];
                $_SESSION['dept_head'] = $result['department_head'];
                $_SESSION['dept_head_email'] = $result['department_head_email'];
                $_SESSION['description'] = $result['description'];

                header('Location:../view/admin/aUpdateDepartmentV.php');
            }
        }
        else {
            echo "Database query failed.";
        }
    }

    elseif (isset($_POST['updateDepartment-submit'])) {
        $dept_id = $_SESSION['dept_id'];
        $department = mysqli_real_escape_string($connect, $_POST['department']);
        $department_head = mysqli_real_escape_string($connect, $_POST['dept_head']);
        $department_head_email = mysqli_real_escape_string($connect, $_POST['dept_head_email']);
        $description = mysqli_real_escape_string($connect, $_POST['description']);

        $checkDept = Model::checkDeptThree($dept_id, $department, $connect);

        if (mysqli_num_rows($checkDept)==1) {
            echo "This department already exists.";
        }
        else {
            $result = Model::updateDepartment($dept_id, $department, $department_head, $department_head_email, $description, $connect);

            if ($result) {
                echo "Succesfully updated.";
            }else {
                echo "query failed";
            }
        }

    }

    elseif (isset($_POST['updateDepartment'])) {
        $department = mysqli_real_escape_string($connect, $_POST['department']);

        $results = Model::viewADeptUsingName($department, $connect);

        if ($results) {
            if (mysqli_num_rows($results)==1) {
                $result = mysqli_fetch_assoc($results);
                $_SESSION['dept_id'] = $result['department_id'];
                $_SESSION['department'] = $result['department'];
                $_SESSION['dept_head'] = $result['department_head'];
                $_SESSION['dept_head_email'] = $result['department_head_email'];
                $_SESSION['description'] = $result['description'];

                header('Location:../view/admin/aUpdateDepartmentV.php');
            }
        }
        else {
            echo "Database query failed.";
        }
    }

    elseif (isset($_POST['deleteDepartment'])) {
        $department = mysqli_real_escape_string($connect, $_POST['department']);

        $result = Model::deleteDeptUsingName($department, $connect);

        if ($result) {
            echo "Department successfully deleted.";
        }
        else{
            echo "Database query failed";
        }
    }
    

?>