<?php
	session_start();
	require_once('../../config/database.php');
	require_once('../../model/adminModel/manageDesignationsModel.php');
	require_once('../../model/basicModel/authenticationModel.php');
	
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

		$EmpId = mysqli_real_escape_string($connect, $_POST['empid']);
		$initials = mysqli_real_escape_string($connect, $_POST['initials']);
		$sname = mysqli_real_escape_string($connect, $_POST['sname']);
		$Email = mysqli_real_escape_string($connect, $_POST['email']);
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

		$id = str_replace(' ', '', $EmpId);
		if (!(preg_match('/^[A-Za-z]+$/', $id)))
		{
			$errors[] = "Username should be a string";
			header('Location:../../view/basic/aUserNameNotString.php');
			// echo "Username should be a string";
			exit();
		}

		$ini = str_replace(' ', '', $initials);
		if (!(preg_match('/^[A-Za-z]+$/', $ini)))
		{
			$errors[] = "Initials should be a string";
			header('Location:../../view/basic/aUserNameNotString.php');
			// echo "Initials should be a string";
			exit();
		}

		$name = str_replace(' ', '', $sname);
		if (!(preg_match('/^[A-Za-z]+$/', $name)))
		{
			$errors[] = "Surname should be a string";
			header('Location:../../view/basic/aUserNameNotString.php');
			// echo "Surname should be a string";
			exit();
		}

		$empid = strtolower($EmpId);
		$email = strtolower($Email);
		
		$firstNumbs = substr($email, 0, -15);
		$lastMail = substr($email, 3);

		if ($lastMail != "@ucsc.cmb.ac.lk") {
			$errors[] = "University mail incorrect.";
			header('Location:../../view/basic/uniMailIncorrect.php');
			// echo "University mail is incorrect.";
			exit();
		}

		if ($firstNumbs != $empid) {
			$errors[] = "Username is incorrect.";
			header('Location:../../view/basic/userNameIncorrect.php');
			// echo "Username is incorrect.";
			exit();
		}

		if ($password != $conpassword) 
		{
			$errors[] = "Password and confirm password are not equal.";
			header('Location:../../view/basic/pwdCpwdNotMatching.php');
			// echo "Password and confirm password are not equal.";
			exit();
		}

		if (!(preg_match('/^[0-9]{10}+$/', $mobile))) 
		{
			$errors[] = "Mobile number is incorrect. The mobile number should have only ten digits.";
			header('Location:../../view/basic/mobilePhoneIncorrect.php');
			// echo "Mobile number is incorrect. The mobile number should have only ten digits.";
			exit();
		}

		if (!(preg_match('/^[0-9]{10}+$/', $tp))) 
		{
			$errors[] = "Telephone number is incorrect. The telephone number should have only ten digits.";
			header('Location:../../view/basic/mobilePhoneIncorrect.php');
			// echo "Telephone number is incorrect. The telephone number should have only ten digits.";
			exit();
		}

		if(!(preg_match('/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)[a-zA-Z\d]{8,}$/',$password)))
		{
			$errors[]="Password require Minimum eight characters, at least one uppercase letter, one lowercase letter, one number";
			header('Location:../../view/basic/pwdVerificationFailed.php');
			// echo "Password require Minimum eight characters, at least one uppercase letter, one lowercase letter, one number";
			exit();
		}

		$checkEmpid = basicModel::checkEmpid($empid, $connect);

		if (mysqli_num_rows($checkEmpid) == 1) 
		{
			$errors[] = 'Employee id already exists.';
			header('Location:../../view/basic/userNameExist.php');
			// echo "Employee id already exists.";
		}

		if (empty($errors)) 
		{	
			if ($aca_or_non == 'academic-staff') {
				$userRole = 'academicStaffMemb';
			}
			elseif ($aca_or_non == 'non-academic-staff') {
				$userRole = 'nonAcademicStaffMemb';
			}
			
			$result = basicModel::signup($empid, $initials, $sname, $email, $mobile, $tp, $dob, $aca_or_non, $designation, $post, $userRole, $appointment, $hashed_password, $connect);

            if ($result == true) 
            {
				$result1 = basicModel::getUId($empid, $connect);
				if ($result1) {
					if(mysqli_num_rows($result1)==1){
						$result2 = mysqli_fetch_assoc($result1);
						$user_id = $result2['userId'];

						if ($aca_or_non == 'academic-staff') {
							$asm_flag = 1;
						}
						$result3 = basicModel::setRole($user_id, $asm_flag, $connect);
						header('Location:../../view/basic/signupSuccess.php');
						// header('Location:../view/basic/login.php');
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
                // echo 'Failed to add the user.';
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
                $_SESSION['design'] .= "<option value='".$record['designation_name']."'>".$record['designation_name']."</option>";
			}

			while ($record2 = mysqli_fetch_array($records2)) {
				$_SESSION['posts'] .= "<option value='".$record2['post_name']."'>".$record2['post_name']."</option>";
			}
			
			header('Location:../../view/basic/signup.php');
		}
	}
?>