 <?php 
    session_start();
    require_once('../../model/adminModel/manageUsersModel.php');
    require_once('../../config/database.php');
    
    $_SESSION['user_list'] = '';
    $users = adminModel::viewList($connect);
    $id = $_GET['user_id'];
    
    if ($users) {
        while ($user = mysqli_fetch_assoc($users)) {
            $_SESSION['user_list'] .= "<tr>";
            $_SESSION['user_list'] .= "<td>{$user['empid']}</td>";
            $_SESSION['user_list'] .= "<td>{$user['initials']}</td>";
            $_SESSION['user_list'] .= "<td>{$user['sname']}</td>";
            $_SESSION['user_list'] .= "<td>{$user['email']}</td>";
            $_SESSION['user_list'] .= "<td>{$user['mobile']}</td>";
            $_SESSION['user_list'] .= "<td>{$user['tp']}</td>";
            $_SESSION['user_list'] .= "<td>{$user['dob']}</td>";
            $_SESSION['user_list'] .= "<td>{$user['designation_name']}</td>";
            $_SESSION['user_list'] .= "<td>{$user['appointment']}</td>";
            $_SESSION['user_list'] .= "<td><a class=\"green\" href=\"../../controller/adminControllers/modifyUserController.php?user_id_two={$user['userId']}&user_id={$id}\">Edit</a></td>";
            $_SESSION['user_list'] .= "<td><a class=\"red\" href=\"../../controller/adminControllers/deleteUserController.php?user_id={$user['userId']}\" onclick=\"return confirm('Are you sure?');\">Delete</a></td>";
            $_SESSION['user_list'] .= "</tr>";
            // echo "hello";
            header('Location:../../view/admin/aUsersV.php');
            
        }
        // header('Location:../view/admin/aUsersV.php');
    }else{
        echo "Database query failed.";
    }

?>