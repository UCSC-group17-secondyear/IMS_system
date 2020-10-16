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
        $description = mysqli_real_escape_string($connect, $_POST['description']);

        $checkDept = Model::checkDeptThree($dept_id, $department, $connect);

        if (mysqli_num_rows($checkDept)==1) {
            echo "This department already exists.";
        }
        else {
            $result = Model::updateDepartment($dept_id, $department, $description, $connect);

            if ($result) {
                echo "Succesfully updated.";
            }else {
                echo "query failed";
            }
        }

    }
    

?>