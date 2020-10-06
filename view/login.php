<!DOCTYPE html>
	<head>
		<meta charset="UTF-8">
	    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	    <title>Login</title>
	</head>
	<body>
		<form action="../controller/loginController.php" method="POST">
			<legend>Login</legend>
			<p>
				<label>Employee ID</label>
				<input id="empid" value="" name="empid" type="text" required="required" />
			</p>
			<p>
				<label>Password</label>
				<input name="password" type="password" required="required" />
			</p>
			<p>
				<button type="submit" name="submit">LOGIN</button>
			</p>
			<p>
				<h3>No account yet? <a href="signup.php">Sign Up.</a></h3>
			</p>
		</form>
	</body>
</html>