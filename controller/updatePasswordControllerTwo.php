<?php
    session_start();
    require_once('../model/Model.php');
    require_once('../config/database.php');

?>

<?php
    $errors = array();
    $user_id = '';

    if (isset($_POST['submit'])) {
        $user_id = mysqli_real_escape_string($connect, $_GET['user_id']);

        $userInfo = array('password'=>20, 'conpassword'=>20);
		
		foreach ($userInfo as $info=>$maxLen) 
		{
			if (strlen($_POST[$info]) > $maxLen) 
			{
                $errors[] = $info . ' must be less than ' . $maxLen . ' characters';
            }
        }
        
        $password = mysqli_real_escape_string($connect, $_POST['password']);
        $conpassword = mysqli_real_escape_string($connect, $_POST['conpassword']);

        if ($password!=$conpassword) {
            echo "Password and Confirm password are incorrect.";
        }
        
        if (empty($errors)) {
            $hashed_password = sha1($password);

            $result = Model::updatePassword($user_id, $hashed_password, $connect);

            if ($result) {
                header('Location:../view/profileUpdateSuccess.php');
            }
        }

    }

    

?>