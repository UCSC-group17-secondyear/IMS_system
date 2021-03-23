<?php

    session_start();
    require_once('../../config/database.php');
    require_once('../../model/adminModel/manageDepartmentsModel.php');

    if (isset($_POST['addDepartment-submit'])) {
        
        $dept_name = mysqli_real_escape_string($connect, $_POST['dept_name']);
        $abbr = mysqli_real_escape_string($connect, $_POST['abbriviation']);
        $dept_head = mysqli_real_escape_string($connect, $_POST['dept_head']);
        
        $checkDept = adminModel::checkDeptName($dept_name, $connect);

        if (mysqli_num_rows($checkDept)==1) {
            header('Location:../../view/admin/aDepartmentExistsTwoV.php');
        }
        else {
            $getUId = adminModel::getUId($dept_head, $connect);

            if ($getUId) {
                while ($rec = mysqli_fetch_assoc($getUId)) {
                    $u_id = $rec['userId'];
                }
            }
            else {
                header('Location:../../view/admin/aDepartmentNotAddedV.php');
            }

            $add_flag = adminModel::addFlag($u_id, $connect);

            if($add_flag) {
                $result = adminModel::enterDepartment($dept_name, $abbr, $u_id, $connect);
        
                if ($result) {
                    header('Location:../../view/admin/aDepartmentAddedV.php');
                }
                else{
                    header('Location:../../view/admin/aDepartmentNotAddedV.php');
                }
            }

        }       
    }
    else {
        $_SESSION['ids'] = '';

        $records = adminModel::getIds($connect);

        if ($records) {
            while ($record = mysqli_fetch_array($records)) {
                echo $_SESSION['ids'] .= "<option value='".$record['empid']."'>".$record['empid']."</option>";
			}
        }

        header('Location:../../view/admin/aAddDepartmentV.php');
    }

?>