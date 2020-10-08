<main>
	<title>Log in</title>
	<?php
		require "header.php";
	?>

	<div class="header"></div>

	<div class="side-nav">
		<div>
			<h2>IMS of Academic And Publication Division </h2>
		</div>
	</div>
	<div class="content">
		<form action="../controller/loginController.php" method="POST">
				<h2>Login</h2>
				<p>
					<label>Employee ID</label>
					<input id="empid" value="" name="empid" type="text" placeholder="Employee id" required="required" />
				</p>
				<p>
					<label>Password</label>
					<input name="password" type="password" placeholder="Password" required="required" />
				</p>
				<p>
					<button type="submit" name="submit">LOGIN</button>
				</p>
				<p>
					<h3>No account yet? <a href="signup.php">Sign Up.</a></h3>
				</p>
			</form>
	</div>

	<?php
		require "footer.php";
	?>

</main>


		
