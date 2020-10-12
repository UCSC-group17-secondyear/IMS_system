<?php

    session_start();
    require_once('../model/Model.php');
    require_once('../config/database.php');

?>

<?php

    if (isset($_GET['user_id'])) {
        
        $user_id = mysqli_real_escape_string($connect, $_GET['user_id']);

        if ($user_id==$_SESSION['user_id']) {
            echo "Cannot delete current user.[Admin]";
        }
        else {
            $result = Model::deleteUser($user_id, $connect);

            if ($result) {
                header('Location:userListController.php?msg=user_deleted');
            }
            else {
                header('Location:userListController.php?err=delete_failed');
            }
        }

    } else{
        echo "User id is not passed to controller.";
    }

?>