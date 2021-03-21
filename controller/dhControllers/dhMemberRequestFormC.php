<?php
    session_start();
	require_once('../../config/database.php');
    require_once('../../model/dhModel/dhViewRequestedFormModel.php');
    
    $user_id = mysqli_real_escape_string($connect, $_GET['user']);

    $_SESSION['memberrequestforms'] = '';
    $result = dhModel::getDeptUsingId($user_id, $connect);

    if ($result) {
        if (mysqli_num_rows($result) == 1) {
            $rslt = mysqli_fetch_assoc($result);
            $headsdepartment = dhModel::getDepartmentForms($rslt['department'], $connect);
            
            if (mysqli_num_rows($headsdepartment) > 0) {
                while($hd = mysqli_fetch_assoc($headsdepartment)) {
                    $_SESSION['memberrequestforms'] .= "<tr>";
                    $_SESSION['memberrequestforms'] .= "<td>{$hd['empid']}</td>";
                    $_SESSION['memberrequestforms'] .= "<td>{$hd['initials']}</td>";
                    $_SESSION['memberrequestforms'] .= "<td>{$hd['sname']}</td>";
                    $_SESSION['memberrequestforms'] .= "<td>{$hd['department']}</td>";
                    $_SESSION['memberrequestforms'] .= "<td><a href=\"../../controller/dhControllers/dhviewMemberForm1C.php?userrr={$hd['userId']}\">View</a></td>";
                    $_SESSION['memberrequestforms'] .= "</tr>";
                }
                header('Location:../../view/departmentHead/dhMembRequestFormV.php');
            } else {
                header('Location:../../view/departmentHead/dhNoFormsV.php');
            } 
        } 
    }
?>