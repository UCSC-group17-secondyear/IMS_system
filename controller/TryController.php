<?php
	include 'model/Model.php';
	include 'config/database.php';

	class TryController {
		public $model;
		public $controller;
		public function __construct() {
	        $this->model = new Model();
	        // $this->controller = new TryController;
	    }

	    public function home() {
	    	require_once('view/homePageV.php');
	    	if (isset($_POST['login-submit'])) {
	    		$this->controller->login();
	    	}
	    	else if (isset($_POST['logout-submit'])) {
	    		//$this->controller->login();
	    	}
	    	else if (isset($_POST['signup-submit'])) {
	    		$this->controller->signUp();
	    	}
	    }

		public function login() {
			require_once('view/login.php');
			if (isset($_POST['submit'])) {
				$empid = $_POST['empid'];
				$pwd = $_POST['password'];
				$result = $this->model->getloginM($empid, $GLOBALS['connect']);
				if($result->num_rows == 1) {
					foreach ($result as $key) {
						$checkpwd = password_verify($pwd, $key['password']);
						if ($checkpwd == true) {
							session_start();
                			$_SESSION['logid'] = $key['empid'];
							if ($key['userRole'] == "admin") {
								ob_clean();
								require_once("view/adminV.php");
							}
							else if ($key['userRole'] == "lecturer") {
								require_once("view/afterLogin.php");
							}
							else if ($key['userRole'] == "Attendance Maintaine") {
								require_once("view/afterLogin.php");
							}
							else if ($key['userRole'] == "Hall Allocation Main") {
								require_once("view/afterLogin.php");
							}
							else if ($key['userRole'] == "Mahapola Scheme Main") {
								require_once("view/afterLogin.php");
							}
							else if ($key['userRole'] == "Medical Scheme Maint") {
								require_once("view/afterLogin.php");
							}
							else if ($key['userRole'] == "Records Viewer") {
								require_once("view/afterLogin.php");
							}
							else if ($key['userRole'] == "Department Head") {
								require_once("view/afterLogin.php");
							}
							else if ($key['userRole'] == "Medical Officer") {
								require_once("view/afterLogin.php");
							}
							else {
								echo "USER";
							}
						}
						else {
							// header("Location: loginForm.php?error=passwordIncorrect");
							echo "invalid password";
                			exit();
						}
					}
				}
				else {
					echo "emp id already exists";
				}
			}
		}

		public function signUp() {
			require_once ('view/signup.php');
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
					header("Location: signupForm.php?error=passwordConfirmationFailed&empid=".$empid."&initials=".$initials."&sname=".$sname."&email=".$email."&mobile=".$mobile."&tp=".$tp."&dob=".$dob."&designation=".$designation."&appointment=".$appointment);
					exit();
				}

				$hashpwd = password_hash($password, PASSWORD_DEFAULT);

				$result = $this->model->signupM($empid, $initials, $sname, $email, $mobile, $tp, $dob, $designation, $appointment, $hashpwd, $GLOBALS['connect']);
				if ($result == true) {
					ob_clean();
					require_once("view/login.php");
				}
			}
		}	
	}
?>