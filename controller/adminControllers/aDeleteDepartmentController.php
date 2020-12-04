<?php

    session_start();
    require_once('../../config/database.php');
    require_once('../../model/adminModel/manageDepartmentsModel.php');

    if (isset($_GET['dept_id'])) {
        
        $dept_id = mysqli_real_escape_string($connect, $_GET['dept_id']);

        $result = adminModel::deleteDepartment($dept_id, $connect);

        if ($result) {
            header('Location:../../view/admin/aDepartmentDeletedV.php');
        }
        else{
            header('Location:../../view/admin/aDepartmentNotDeletedV.php');
        }

    }

?>