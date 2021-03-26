<?php

    session_start();
    require_once('../../config/database.php');
    require_once('../../model/adminModel/manageDepartmentsModel.php');

    if (isset($_GET['dept_id'])) {
        $dept_id = mysqli_real_escape_string($connect, $_GET['dept_id']);

        $results = adminModel::viewADept($dept_id, $connect);

        if ($results) {
            if (mysqli_num_rows($results)==1) {
                $result = mysqli_fetch_assoc($results);
                $_SESSION['dept_id'] = $result['department_id'];
                $_SESSION['department'] = $result['department'];
                $_SESSION['post'] = $result['post'];
                $_SESSION['abbriviation'] = $result['department_abbriviation'];

                header('Location:../../view/admin/aUpdateDepartmentV.php');
            }
            else {
                header('Location:../../view/admin/aQueryFailedV.php');
            }
        }
        else {
            header('Location:../../view/admin/aQueryFailedV.php');
        }
    }

    elseif (isset($_POST['updateDepartment-submit'])) {
        $dept_id = $_SESSION['dept_id'];
        $department = mysqli_real_escape_string($connect, $_POST['department']);
        $post_name = mysqli_real_escape_string($connect, $_POST['post']);
        $abbriviation = mysqli_real_escape_string($connect, $_POST['abbriviation']);

        $checkDept = adminModel::checkDeptThree($dept_id, $department, $connect);

        if (mysqli_num_rows($checkDept)==1) {
            header('Location:../../view/admin/aDepartmentExistsV.php');
        }
        else {
            $getPost = adminModel::getPostUsingName($post_name, $connect);

            if ($getPost) {
                while ($rec = mysqli_fetch_assoc($getPost)) {
                    $p_id = $rec['pst_id'];
                }
            }
    
                else {
                    header('Location:../../view/admin/aDepartmentNotAddedV.php');
                }

                    $result = adminModel::updateDepartment($dept_id, $department, $p_id, $abbriviation, $connect);

                    if ($result) {
                        header('Location:../../view/admin/aDepartmentUpdatedV.php');
                    }else {
                        header('Location:../../view/admin/aDepartmentNotUpdatedV.php');
                    } 

        }

    }

    elseif (isset($_POST['updateDepartment'])) {
        $department = mysqli_real_escape_string($connect, $_POST['department']);

        $results = adminModel::viewADeptUsingName($department, $connect);

        if ($results) {
            if (mysqli_num_rows($results)==1) {
                $result = mysqli_fetch_assoc($results);
                $_SESSION['dept_id'] = $result['department_id'];
                $_SESSION['department'] = $result['department'];
                $_SESSION['post'] = $result['post_name'];
                $_SESSION['abbriviation'] = $result['department_abbriviation'];

                $_SESSION['ids'] = '';

                $records = adminModel::getPost($connect);

                if ($records) {
                    while ($record = mysqli_fetch_array($records)) {
                        $_SESSION['post'] .= "<option value='".$record['post_name']."'>".$record['post_name']."</option>";
                    }
                }

                header('Location:../../view/admin/aUpdateDepartmentV.php');
            }
        }
        else {
            header('Location:../../view/admin/aQueryFailedV.php');
        }
    }

    elseif (isset($_POST['deleteDepartment'])) {
        $department = mysqli_real_escape_string($connect, $_POST['department']);

        $result = adminModel::deleteDeptUsingName($department, $connect);

        if ($result) {
            header('Location:../../view/admin/aDepartmentDeletedTwoV.php');
        }
        else{
            header('Location:../../view/admin/aDepartmentNotDeletedTwoV.php');
        }
    }
    

?>