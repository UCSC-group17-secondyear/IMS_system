<?php
    session_start();
    require_once('../../model/dhModel.php');
    require_once('../../config/database.php');

    $errors = array();
    $user_id = '';

    if(isset($_GET['userrr'])) {
        $user_id = mysqli_real_escape_string($connect, $_GET['userrr']);
        $_SESSION['user_id'] = $user_id;
        
        $result_set = dhModel::funct($user_id, $connect);

        if ($result_set) {
            if (mysqli_num_rows($result_set) == 1) {
                $result = mysqli_fetch_assoc($result_set);
                
                $_SESSION['empid'] = $result['empid'];
                $_SESSION['initials'] = $result['initials'];
                $_SESSION['sname'] = $result['sname'];
                $_SESSION['email'] = $result['email'];
                $_SESSION['designation'] = $result['designation'];
                $_SESSION['department'] = $result['department'];
                $_SESSION['healthcondition'] = $result['healthcondition'];
                $_SESSION['civilstatus'] = $result['civilstatus'];
                $_SESSION['scheme'] = $result['schemename'];
                $_SESSION['member_type'] = $result['member_type'];
                $_SESSION['acceptance_status'] = $result['acceptance_status'];
            }
            header('Location:../../view/departmentHead/dhViewMemberV.php');
        }else {
            echo "query failed";
        }
    }
?>