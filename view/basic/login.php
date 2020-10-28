<?php
	require "topnav.php";
?>

<main>
	<title>Log in</title>
		<div class="loginForm">
			<form action="../../controller/loginController.php" method="POST">
				<h2>Login Here</h2>
				<span class="fa fa-user"></span>
				<input id="empid" value="" name="empid" type="text" placeholder="Employee id" required="required" /> <br>

				<span class="fa fa-lock"></span>
				<input name="password" type="password" placeholder="Password" required="required" /> <br>
				<!-- <div class="loginbtn"> -->
					<button class="mainbtn" type="submit" name="submit">LOGIN</button>
				<!-- </div> -->
			</form>
			<div class="sentence1">
				<h3>New here? <a href="signup.php">Sign Up.</a></h3>
			</div>
			<div class="sentence2">
				<h3><a href="forgotpwdV.php">Forgot your password?</a></h3>
			</div>
		</div>
</main>

<?php
	require 'footer.php';
?>