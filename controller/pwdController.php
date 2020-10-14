<?php
  session_start();
  require_once('../model/Model.php');
  require_once('../config/database.php');

  if (isset($_POST['submit_uname']))
  {
    $uname = $_POST['empid'];
    $result = Model::checkEmpid($uname, $connect);

    if ($result) 
    {
      if (mysqli_num_rows($result)==1) 
      {
        $randNum = mt_rand(0, mt_getrandmax());

        $key = mysqli_fetch_assoc($result);

        $to_email = $key['email'];
        $subject = "Reset passsword";
        $body = "You are given a number here. Enter this number in the websit to verify that you are the real owner of the account. Your verification number: ".$randNum.". Thank you.";
        $headers = "From: ims.ucsc@gmail.com";

        $sendMail = mail($to_email, $subject, $body, $headers);

        if ($sendMail) 
         {  //echo $randNum;
           $_SESSION['randNum'] = $randNum;
           $_SESSION['uname'] = $uname;
           //echo $_SESSION['randNum'];
          // header('Location:../view/basic/adminV.php');
          header('Location:../view/basic/checkRandNumV.php');
          // include '../view/basic/checkRandNumV.php';

          // if(isset($_POST['codecheck-submit'])) 
          // {
          //   $code = mysqli_real_escape_string($connect,$_POST['code']);//$_POST['code'];
          //   if ($code==$randNum) 
          //   {
          //     header('Location:../view/basic/resetPwdV.php');
          //     // include '../view/basic/resetPwdV.php';
          //     if (isset($_POST['savepwd']))
          //     {
          //       $res = Model::updatePassword($uname, $pwd, $connect);
          //       if ($res) {
          //         echo "Your password has been reset successfully!";
          //       }
          //       else {
          //         echo "Password has not been reset!";
          //       }
          //     }
          //   }
          //   else {
          //     echo "Sorry. The number you entered is incorrect!";
          //   }
          // }
          // else {
          //   echo "Submit button has not been pressed!";
          // }
        }
        else {
          echo "mail has not been sent!";
        }
      }
    }
  }
?>