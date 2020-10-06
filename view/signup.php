<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
	    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	    <title>Sign Up</title>
	</head>
	<body>
		<form action="../controller/SignupController.php" method="post">
			<legend>Sign Up</legend>
			<p>
				<label>Enter employee id</label>
				<input type="text" name="empid" placeholder="Employee ID" required/>
			</p>

			<p>
				<label>Enter your initials</label>
				<input type="text" name="initials" placeholder="Initials" required/>
			</p>

			<p>
				<label>Enter your surname</label>
				<input type="text" name="sname" placeholder="Surname" required/>
			</p>

			<p>
				<label>Enter your email</label>
				<input type="email" name="email" placeholder="Email"/>
			</p>

			<p>
				<label>Enter your mobile number</label>
				<input type="text" name="mobile" placeholder="Mobile Number" required/>
			</p>

			<p>
				<label>Enter your telephone number</label>
				<input type="text" name="tp" placeholder="Telephone number"/>
			</p>

			<p>
				<label>Enter date of birth</label>
				<input type="date" name="dob" required/>
			</p>

			<p>
				<label>Enter your designation</label>
				<input type="text" name="designation" placeholder="Designation" required/>
			</p>

			<p>
				<label>Enter date of appointment</label>
				<input type="date" name="appointment" required/>
			</p>

			<p>
				<label>Create a password</label>
				<input type="password" name="password" placeholder="Password" required/>
			</p>

			<p>
				<label>Confirm the password</label>
				<input type="password" name="conpassword" placeholder="Confirm password" required/>
			</p>

			<p>
				<button type="submit" name="signup-submit">Create Account</button>
			</p>
		</form>
	</body>
</html>