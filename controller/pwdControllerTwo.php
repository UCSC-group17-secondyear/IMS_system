<?php
    session_start();
    require_once('../model/Model.php');
    require_once('../config/database.php');

    if(isset($_POST['codecheck-submit'])) 
    {   
        $randNum = $_SESSION['randNum'];
        $code = mysqli_real_escape_string($connect,$_POST['code']);//$_POST['code'];
        //echo $code;
        //echo $randNum;
        if ($code==$randNum) 
        {
            header('Location:../view/basic/resetPwdV.php');
            // include '../view/basic/resetPwdV.php';
        }
        else {
            echo "Sorry. The number you entered is incorrect!";
        }
    }
    else {
        echo "Submit button has not been pressed!";
    }

?>