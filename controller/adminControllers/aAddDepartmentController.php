<?php

    session_start();
    require_once('../../config/database.php');
    require_once('../../model/adminModel/manageDepartmentsModel.php');

    if (isset($_POST['addDepartment-submit'])) {
        
        $dept_name = mysqli_real_escape_string($connect, $_POST['dept_name']);
        $abbr = mysqli_real_escape_string($connect, $_POST['abbriviation']);
        $post = mysqli_real_escape_string($connect, $_POST['post']);
        
        $checkDept = adminModel::checkDeptName($dept_name, $connect);

        if (mysqli_num_rows($checkDept)==1) {
            header('Location:../../view/admin/aDepartmentExistsTwoV.php');
        }
        else {
            $getPost = adminModel::getPostUsingName($post, $connect);

            if ($getPost) {
                while ($rec = mysqli_fetch_assoc($getPost)) {
                    $p_id = $rec['pst_id']; echo '<br>';
                }
            }
            else {
                header('Location:../../view/admin/aDepartmentNotAddedV.php');
            }

            // $add_flag = adminModel::addFlag($u_id, $connect);
                $result = adminModel::enterDepartment($dept_name, $abbr, $p_id, $connect);
        
                if ($result) {
                    header('Location:../../view/admin/aDepartmentAddedV.php');
                }
                else{
                    header('Location:../../view/admin/aDepartmentNotAddedV.php');
                }
            

        }       
    }
    else {
        $_SESSION['post'] = '';

        $records = adminModel::getPost($connect);

        if ($records) {
            while ($record = mysqli_fetch_array($records)) {
                $_SESSION['post'] .= "<option value='".$record['post_name']."'>".$record['post_name']."</option>";
			}
        }

        header('Location:../../view/admin/aAddDepartmentV.php');
    }

?>