<?php 
	include_once 'C:\xampp\htdocs\LoginSystem\database.php';

	if (isset($_POST['signup-submit'])) {
		$empid = $_POST['empid'];
		$initials = $_POST['initials'];
		$sname = $_POST['sname'];
		$email = $_POST['email'];
		$mobile = $_POST['mobile'];
		$tp = $_POST['tp'];
		$dob = $_POST['dob'];
		$designation = $_POST['designation'];
		$appointment = $_POST['appointment'];
		$password = $_POST['password'];
		$conpassword = $_POST['conpassword'];

		if ($password != $conpassword) {
			header("Location: signupForm.php?error=passwordConfirmationFailed&empid=".$empid."&initials=".$initials."&sname=".$sname."&email=".$email."&mobile=".$tp."&dob=".$dob."&designation=".$designation."&appointment=".$appointment);
			exit();
		}
		
		$checkID = "SELECT empid FROM users WHERE empid='$empid';";

		if ($checkID == $empid) {
			header("Location: signupForm.php?error=empidAlreadyExists&initials=".$initials."&sname=".$sname."&email=".$email."&mobile=".$tp."&dob=".$dob."&designation=".$designation."&appointment=".$appointment);
			exit();
		}

		$hashpwd = password_hash($password, PASSWORD_DEFAULT);

		$sql = "INSERT INTO users (empid, initials, sname, email, mobile, tp, dob, designation, appointment, password) 
			VALUES ('$empid', '$initials', '$sname', '$email', '$mobile', '$tp', '$dob', '$designation', '$appointment', '$hashpwd');";
		mysqli_query ($conn, $sql);

		header("Location: loginForm.php?signup=success");
	}
?>