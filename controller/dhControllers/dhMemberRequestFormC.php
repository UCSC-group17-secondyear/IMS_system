<?php
    session_start();
	require_once('../../config/database.php');
    require_once('../../model/dhModel.php');
    
    $user_id = mysqli_real_escape_string($connect, $_GET['user']);

    $_SESSION['memberrequestforms'] = '';
    $result = dhModel::getDeptUsingId($user_id, $connect);
    if ($result) {
        if (mysqli_num_rows($result)==1) {
            $rslt = mysqli_fetch_assoc($result);
            $records = dhModel::getDepartmentForms($rslt['department'], $connect);
            
            if ($records) {
                while($record = mysqli_fetch_assoc($records)) {
                    $_SESSION['memberrequestforms'] .= "<tr>";
                    $_SESSION['memberrequestforms'] .= "<td>{$record['empid']}</td>";
                    $_SESSION['memberrequestforms'] .= "<td>{$record['initials']}</td>";
                    $_SESSION['memberrequestforms'] .= "<td>{$record['sname']}</td>";
                    $_SESSION['memberrequestforms'] .= "<td>{$record['department']}</td>";
                    $_SESSION['memberrequestforms'] .= "<td><a href=\"../../controller/dhviewMemberFormC.php?user_id={$record['userId']}\">View</a></td>";
                    $_SESSION['memberrequestforms'] .= "</tr>";

                    header('Location:../../view/departmentHead/dhMembRequestFormV.php');
                }
            }else {
                echo "Database query failed.";
            }
        }  
    }else {
        echo "record 1 is not ok";
    }
?>