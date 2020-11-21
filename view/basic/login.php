<?php
	require "topnav.php";
?>

<main>
	<title>Log in</title>

	<div class="loginForm">
		<form action="../../controller/loginController.php" method="POST">
			<h2>Login Here</h2>
			<div class="row">
	            <div class="col-50l">
	              	<span class="fa fa-user"></span>
					<input id="empid" value="" name="empid" type="text" placeholder="User name" required="required" /> <br> <br>

					<span class="fa fa-lock"></span>
					<input name="password" type="password" placeholder="Password" required="required" /> <br> <br>
					<button class="mainbtn" type="submit" name="submit">LOGIN</button>
				</div>
				<div class="col-50r">
					<div class="logocontainer">
                    	<img src="../assests/img/default.png" style="width:40%; margin-top:10px; margin-bottom:20px;">
                    </div>
	              	<div class="sentence1">
						<h3><a href="forgotpwdV.php">Forgot your password?</a></h3> <br>
						<h3>New here? <a href="../../controller/SignupController.php?desig=99">Sign Up.</a></h3>

					</div>
				</div>
			</div>
		</form>
	</div>
</main>

<?php
	require 'footer.php';
?>