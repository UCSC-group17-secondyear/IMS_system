<?php
    session_start();
    require_once('../model/Model.php');
    require_once('../config/database.php');

    if (isset($_POST['savepwd']))
    {   
        $pwd = mysqli_real_escape_string($connect, $_POST['pwd']);
        $conpwd = mysqli_real_escape_string($connect, $_POST['conpwd']);
        $uname = $_SESSION['uname'];
        // echo $uname;

        if ($pwd==$conpwd) {
            $hashed_pwd = sha1($pwd);
            $res = Model::updatePassword($uname, $hashed_pwd, $connect);
            if ($res) {
                echo "Your password has been reset successfully!";
            }
            else {
                echo "Password has not been reset!";
            }
        }
        
    }

?>