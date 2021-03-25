<?php

    session_start();
    require_once('../../model/adminModel/manageUsersModel.php');
    require_once('../../config/database.php');

?>

<?php
    $_SESSION['posts'] = '';
    $_SESSION['design'] = '';
    $user_id = mysqli_real_escape_string($connect, $_GET['user_id_two']);
    $_SESSION['userId'] = mysqli_real_escape_string($connect, $_GET['user_id']);

    $result_set = adminModel::view($user_id, $connect);
    $records = adminModel::designation($connect);
    $records2 = adminModel::viewPosts($connect);

    if ($result_set && $records && $records2) {
        if (mysqli_num_rows($result_set)==1) {
            $result = mysqli_fetch_assoc($result_set);
            $_SESSION['userIdTwo'] = $result['userId'];
            $_SESSION['empid'] = $result['empid'];
            $_SESSION['initials'] = $result['initials'];
            $_SESSION['sname'] = $result['sname'];
            $_SESSION['email'] = $result['email'];
            $_SESSION['mobile'] = $result['mobile'];
            $_SESSION['tp'] = $result['tp'];
            $_SESSION['dob'] = $result['dob'];
            $_SESSION['designation'] = $result['designation_name'];
            $_SESSION['post'] = $result['post_name'];
            $_SESSION['appointment'] = $result['appointment'];

            while ($record = mysqli_fetch_array($records)) {
                $_SESSION['design'] .= "<option value='".$record['designation_id']."'>".$record['designation_name']."</option>";
            }
            
            while ($record2 = mysqli_fetch_array($records2)) {
                $_SESSION['posts'] .= "<option value='".$record2['post_id']."'>".$record2['post_name']."</option>";
			}

            header('Location:../../view/admin/aModifyUserV.php');
        }
    }

?>