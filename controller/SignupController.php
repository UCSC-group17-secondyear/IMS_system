<?php
	session_start();
	require_once('../config/database.php');
	require_once('../model/Model.php');
	
	if (isset($_POST['signup-submit'])) 
	{	
		$userInfo = array('empid'=>8, 'initials'=>10, 'sname'=>50, 'email'=>100,'mobile'=>10, 'tp'=>10, 'dob'=>10,'designation'=>50, 'appointment'=>10, 'password'=>20, 'conpassword'=>20);
		
		foreach ($userInfo as $info=>$maxLen) 
		{
			if (strlen($_POST[$info]) > $maxLen) 
			{
                $errors[] = $info . ' must be less than ' . $maxLen . ' characters';
            }
		}

		$empid = mysqli_real_escape_string($connect, $_POST['empid']);
		$initials = mysqli_real_escape_string($connect, $_POST['initials']);
		$sname = mysqli_real_escape_string($connect, $_POST['sname']);
		$email = mysqli_real_escape_string($connect, $_POST['email']);
		$mobile = mysqli_real_escape_string($connect, $_POST['mobile']);
		$tp = mysqli_real_escape_string($connect, $_POST['tp']);
		$dob = mysqli_real_escape_string($connect, $_POST['dob']);
		$aca_or_non = mysqli_real_escape_string($connect, $_POST['aca-or-non']);
		$designation = mysqli_real_escape_string($connect, $_POST['designation']);
		$post = mysqli_real_escape_string($connect, $_POST['post']);
		$appointment = mysqli_real_escape_string($connect, $_POST['appointment']);
		$password = mysqli_real_escape_string($connect, $_POST['password']);
		$conpassword = mysqli_real_escape_string($connect, $_POST['conpassword']);
		$hashed_password = sha1($password);

		if ($password != $conpassword) 
		{
			header("Location: signupForm.php?error=passwordConfirmationFailed&empid=".$empid."&initials=".$initials."&sname=".$sname."&email=".$email."&mobile=".$mobile."&tp=".$tp."&dob=".$dob."&designation=".$designation."&appointment=".$appointment);
			exit();
		}

		// "^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)[a-zA-Z\d]{8,}$"
		// "^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$"
		if(!(preg_match('/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$/',$password))){
			$errors[]="Password require Minimum eight characters, at least one uppercase letter, one lowercase letter, one number and one special character";
			echo "Password require Minimum eight characters, at least one uppercase letter, one lowercase letter, one number and one special character";
		}

		$checkEmpid = Model::checkEmpid($empid, $connect);

		if (mysqli_num_rows($checkEmpid) == 1) 
		{
			$errors[] = 'Employee id already exists.';
			echo "Employee id already exists.";
		}

		if (empty($errors)) 
		{	
			if ($aca_or_non == 'academic-staff') {
				$userRole = 'academicStaffMemb';
			}
			elseif ($aca_or_non == 'non-academic-staff') {
				$userRole = 'nonAcademicStaffMemb';
			}
			
			$result = Model::signup($empid, $initials, $sname, $email, $mobile, $tp, $dob, $aca_or_non, $designation, $post, $userRole, $appointment, $hashed_password, $connect);

            if ($result == true) 
            {
				$result1 = Model::getUId($empid, $connect);
				if ($result1) {
					if(mysqli_num_rows($result1)==1){
						$result2 = mysqli_fetch_assoc($result1);
						$user_id = $result2['userId'];

						if ($aca_or_non == 'academic-staff') {
							$asm_flag = 1;
						}
						$result3 = Model::setRole($user_id, $asm_flag, $connect);
						header('Location:../view/basic/login.php');
					}
				}
            }
            else 
            {
                echo 'Failed to add the user.';
            }
		}
	}

	if (isset($_GET['desig'])) {
		$_SESSION['design'] = '';
		$records = Model::designation($connect);

		if ($records) {
			while ($record = mysqli_fetch_array($records)) {
                $_SESSION['design'] .= "<option value='".$record['designation_name']."'>".$record['designation_name']."</option>";
			}
			
			header('Location:../view/basic/signup.php');
		}
	}
?>