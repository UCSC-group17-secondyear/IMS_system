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
                $_SESSION['abbriviation'] = $result['department_abbriviation'];

                header('Location:../view/admin/aUpdateDepartmentV.php');
            }
            else {
                header('Location:../../view/admin/aQueryFailedV.php');
                // echo "more than one row (duplicate scheme names)";
            }
        }
        else {
            header('Location:../../view/admin/aQueryFailedV.php');
        }
    }

    elseif (isset($_POST['updateDepartment-submit'])) {
        $dept_id = $_SESSION['dept_id'];
        $department = mysqli_real_escape_string($connect, $_POST['department']);
        $department_head = mysqli_real_escape_string($connect, $_POST['dept_head']);
        $department_head_email = mysqli_real_escape_string($connect, $_POST['dept_head_email']);
        $abbriviation = mysqli_real_escape_string($connect, $_POST['abbriviation']);

        $checkDept = Model::checkDeptThree($dept_id, $department, $connect);

        if (mysqli_num_rows($checkDept)==1) {
            header('Location:../view/admin/aDepartmentExistsV.php');
        }
        else {
            $result = Model::updateDepartment($dept_id, $department, $department_head, $department_head_email, $abbriviation, $connect);

            if ($result) {
                header('Location:../view/admin/aDepartmentUpdatedV.php');
            }else {
                header('Location:../view/admin/aDepartmentNotUpdatedV.php');
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
                $_SESSION['abbriviation'] = $result['department_abbriviation'];

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
            header('Location:../view/admin/aDepartmentDeletedTwoV.php');
        }
        else{
            header('Location:../view/admin/aDepartmentNotDeletedTwoV.php');
        }
    }
    

?>