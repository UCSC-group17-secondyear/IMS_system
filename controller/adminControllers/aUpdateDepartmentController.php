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
                $_SESSION['d_head'] = $result['empid'];
                $_SESSION['abbriviation'] = $result['department_abbriviation'];

                header('Location:../../view/admin/aUpdateDepartmentV.php');
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
        $new_head = mysqli_real_escape_string($connect, $_POST['dept_head']);
        $abbriviation = mysqli_real_escape_string($connect, $_POST['abbriviation']);

        $old_head = $_SESSION['d_head'];

        $checkDept = adminModel::checkDeptThree($dept_id, $department, $connect);

        if (mysqli_num_rows($checkDept)==1) {
            header('Location:../../view/admin/aDepartmentExistsV.php');
        }
        else {
            $remove_dh = adminModel::removeOldDh($old_head, $connect);

            if ($remove_dh) {

                $getUId = adminModel::getUId($new_head, $connect);

                if ($getUId) {
                    while ($rec = mysqli_fetch_assoc($getUId)) {
                        echo $u_id = $rec['userId'];
                    }
                }
                else {
                    header('Location:../../view/admin/aDepartmentNotAddedV.php');
                }

                $add_flag = adminModel::addFlag($u_id, $connect);

                if ($add_flag) {
                    $result = adminModel::updateDepartment($dept_id, $department, $u_id, $abbriviation, $connect);

                    if ($result) {
                        header('Location:../../view/admin/aDepartmentUpdatedV.php');
                    }else {
                        header('Location:../../view/admin/aDepartmentNotUpdatedV.php');
                    } 
                }
                               
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
                $_SESSION['d_head'] = $result['empid'];
                $_SESSION['abbriviation'] = $result['department_abbriviation'];

                $_SESSION['ids'] = '';

                $records = adminModel::getIds($connect);

                if ($records) {
                    while ($record = mysqli_fetch_array($records)) {
                        echo $_SESSION['ids'] .= "<option value='".$record['empid']."'>".$record['empid']."</option>";
                    }
                }

                header('Location:../../view/admin/aUpdateDepartmentV.php');
            }
        }
        else {
            echo "Database query failed.";
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