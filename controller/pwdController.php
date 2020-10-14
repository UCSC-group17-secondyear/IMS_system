<?php
  session_start();
  require_once('../model/Model.php');
  require_once('../config/database.php');

  if (isset($_POST['submit_uname'])) {
    $uname = $_POST['empid'];
    $result = Model::checkEmpid($uname, $connect);

    if ($result) {
      if (mysqli_num_rows($result)==1) {
        $randNum = mt_rand(0, mt_getrandmax());

        $key = mysqli_fetch_assoc($result);

        $to_email = "chathu3115@gmail.com";
        $subject = "Reset passsword";
        $body = "You are given a number here. Enter this number in the websit to verify that you are the real owner of the account. Your verification number: ".$randNum.". Thank you.";
        $headers = "From: ims.ucsc@gmail.com";

        $sendMail = mail($to_email, $subject, $body, $headers);

        if ($sendMail) {
          $_SESSION['randNum'] = $randNum;
          $_SESSION['uname'] = $uname;
          
          header('Location:../view/basic/checkRandNumV.php');
        }
        else {
          echo "mail has not been sent!";
        }
      }
    }
  }
?>