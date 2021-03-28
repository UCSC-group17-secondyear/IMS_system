<?php
	session_start();
	require_once('../../config/database.php');
	require_once('../../model/adminModel/manageDesignationsModel.php');
	require_once('../../model/basicModel/authenticationModel.php');
	
	if (isset($_POST['signup-submit'])) 
	{	
		$userInfo = array('empid'=>8, 'initials'=>10, 'sname'=>50, 'email1'=>100,'mobile'=>10, 'tp'=>10, 'dob'=>10,'designation'=>50, 'appointment'=>10, 'password'=>20, 'conpassword'=>20);
		
		foreach ($userInfo as $info=>$maxLen) 
		{
			if (strlen($_POST[$info]) > $maxLen) 
			{
                $errors[] = $info . ' must be less than ' . $maxLen . ' characters';
            }
		}

		$EmpId = mysqli_real_escape_string($connect, $_POST['empid']);
		$initials = mysqli_real_escape_string($connect, $_POST['initials']);
		$sname = mysqli_real_escape_string($connect, $_POST['sname']);
		$Email1 = mysqli_real_escape_string($connect, $_POST['email1']);
		$Email2 = mysqli_real_escape_string($connect, $_POST['email2']);
		$mobile = mysqli_real_escape_string($connect, $_POST['mobile']);
		$tp = mysqli_real_escape_string($connect, $_POST['tp']);
		$dob = mysqli_real_escape_string($connect, $_POST['dob']);
		$aca_or_non = mysqli_real_escape_string($connect, $_POST['aca-or-non']);
		$designation = mysqli_real_escape_string($connect, $_POST['designation']);
		$appointment = mysqli_real_escape_string($connect, $_POST['appointment']);
		$password = mysqli_real_escape_string($connect, $_POST['password']);
		$conpassword = mysqli_real_escape_string($connect, $_POST['conpassword']);
		$hashed_password = sha1($password);

		$id = str_replace(' ', '', $EmpId);
		if (!(preg_match('/^[A-Za-z]+$/', $id)))
		{
			$errors[] = "Username should be a string";
			header('Location:../../view/basic/aUserNameNotString.php');
			exit();
		}

		$ini = str_replace(' ', '', $initials);
		if (!(preg_match('/^[A-Za-z]+$/', $ini)))
		{
			$errors[] = "Initials should be a string";
			header('Location:../../view/basic/aUserNameNotString.php');
			exit();
		}

		$name = str_replace(' ', '', $sname);
		if (!(preg_match('/^[A-Za-z]+$/', $name)))
		{
			$errors[] = "Surname should be a string";
			header('Location:../../view/basic/aUserNameNotString.php');
			exit();
		}

		$empid = strtolower($EmpId);
		$email1 = strtolower($Email1);
		
		// $firstNumbs = substr($email, 0, -15);
		// $lastMail = substr($email, 3);

		// if ($lastMail != "@ucsc.cmb.ac.lk") {
		// 	$errors[] = "University mail incorrect.";
		// 	header('Location:../../view/basic/uniMailIncorrect.php');
		// 	exit();
		// }

		if ($email1 != $empid) {
			$errors[] = "Username is incorrect.";
			header('Location:../../view/basic/userNameIncorrect.php');
			exit();
		}

		$email = $email1 . $Email2;

		if ($password != $conpassword) 
		{
			$errors[] = "Password and confirm password are not equal.";
			header('Location:../../view/basic/pwdCpwdNotMatching.php');
			exit();
		}

		if (!(preg_match('/^[0-9]{10}+$/', $mobile))) 
		{
			$errors[] = "Mobile number is incorrect. The mobile number should have only ten digits.";
			header('Location:../../view/basic/mobilePhoneIncorrect.php');
			exit();
		}

		if (!(preg_match('/^[0-9]{10}+$/', $tp))) 
		{
			$errors[] = "Telephone number is incorrect. The telephone number should have only ten digits.";
			header('Location:../../view/basic/mobilePhoneIncorrect.php');
			exit();
		}

		if(!(preg_match('/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)[a-zA-Z\d]{8,}$/',$password)))
		{
			$errors[]="Password require Minimum eight characters, at least one uppercase letter, one lowercase letter, one number";
			header('Location:../../view/basic/pwdVerificationFailed.php');
			exit();
		}

		$checkEmpid = basicModel::checkEmpid($empid, $connect);

		if (mysqli_num_rows($checkEmpid) == 1) 
		{
			$errors[] = 'Employee id already exists.';
			header('Location:../../view/basic/userNameExist.php');
		}

		if (empty($errors)) 
		{	
			if ($aca_or_non == 'academic-staff') {
				$userRole = 10;
				$f = 1;
			}
			elseif ($aca_or_non == 'non-academic-staff') {
				$userRole = 11;
				$f = 0;
			}
			
			$result = basicModel::signup($empid, $initials, $sname, $email, $mobile, $tp, $dob, $f, $designation, $userRole, $appointment, $hashed_password, $connect);

            if ($result == true) 
            {
				$result1 = basicModel::getUId($empid, $connect);
				if ($result1) {
					if(mysqli_num_rows($result1)==1){
						$result2 = mysqli_fetch_assoc($result1);
						$user_id = $result2['userId'];

						if ($aca_or_non == 'academic-staff') {
							$asm_flag = 1;
							$nasm_flag = 0;
						}
						if ($aca_or_non == 'non-academic-staff') {
							$nasm_flag = 1;
							$asm_flag = 0;
						}
						$result3 = basicModel::setRole($user_id, $asm_flag, $nasm_flag, $connect);
						header('Location:../../view/basic/signupSuccess.php');
					}
					else {
						header('Location:../../view/basic/signupFailed.php');
					}
				}
				else {
					header('Location:../../view/basic/signupFailed.php');
				}
            }
            else 
            {
                header('Location:../../view/basic/signupFailed.php');
            }
		}
	}

	if (isset($_GET['desig'])) {
		$_SESSION['design'] = '';
		$_SESSION['posts'] = '';
		$records = adminModel::designation($connect);
		$records2 = adminModel::getPost($connect);

		if ($records && $records2) {
			while ($record = mysqli_fetch_array($records)) {
                $_SESSION['design'] .= "<option value='".$record['designation_id']."'>".$record['designation_name']."</option>";
			}

			while ($record2 = mysqli_fetch_array($records2)) {
				$_SESSION['posts'] .= "<option value='".$record2['post_name']."'>".$record2['post_name']."</option>";
			}
			
			header('Location:../../view/basic/signup.php');
		}
	}
?>