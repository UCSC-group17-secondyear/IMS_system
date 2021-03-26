<?php
    session_start();
	require_once('../../config/database.php');
    require_once('../../model/dhModel/dhViewCertifiedFormModel.php');
    
    $user_id = mysqli_real_escape_string($connect, $_GET['certified_user']);

    $_SESSION['certifiedforms'] = '';
    $department = dhModel::getDeptUsingId($user_id, $connect);
    if ($department) {
        if (mysqli_num_rows($department)==1) {
            $d = mysqli_fetch_assoc($department);
            $certified_forms = dhModel::getDepartmentCertifiedForms($d['department_id'], $connect);
            
            if ($certified_forms) {
                while($cf = mysqli_fetch_assoc($certified_forms)) {
                    $_SESSION['certifiedforms'] .= "<tr>";
                    $_SESSION['certifiedforms'] .= "<td>{$cf['empid']}</td>";
                    $_SESSION['certifiedforms'] .= "<td>{$cf['initials']}</td>";
                    $_SESSION['certifiedforms'] .= "<td>{$cf['sname']}</td>";
                    $_SESSION['certifiedforms'] .= "<td>{$cf['department']}</td>";
                    if($cf['acceptance_status'] == 1){
                        $_SESSION['certifiedforms'] .= "<td><a class=\"green\">Approved</a></td>";
                    } else {
                        $_SESSION['certifiedforms'] .= "<td><a class=\"red\">Declined</a></td>";
                    }
                    $_SESSION['certifiedforms'] .= "<td><a href=\"../../controller/dhControllers/dhviewMemberForm1C.php?viewmember={$cf['userId']}\">View</a></td>";
                    $_SESSION['certifiedforms'] .= "</tr>";                    
                }
                header('Location:../../view/departmentHead/dhCertifiedFormV.php');
            }else {
                echo "Database query failed.";
            }
        }  
    } else {
        header('Location:../../view/departmentHead/dhNoFormsV.php');
    }
?>