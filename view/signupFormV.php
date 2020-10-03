<?php
	include_once 'database.php';
	require "../header.php";
?>

<!DOCTYPE html>
<html>
<head>
	<title>Sign Up</title>
	<link rel="stylesheet" href="../assests/css/style.css">
</head>
<body>
	<div class="formstyle">
	<form action="signup.php" method="post">
		<input type="text" name="empid" placeholder="Enter employee id" required>
		<input type="text" name="initials" placeholder="Enter your initials" required>
		<input type="text" name="sname" placeholder="Enter your surname" required>
		<input type="email" name="email" placeholder="Enter your email">
		<input type="text" name="mobile" placeholder="Enter your mobile number" required>
		<input type="text" name="tp" placeholder="Enter your telephone number">
		<input type="date" name="dob" placeholder="Enter date of birth" required>
		<input type="text" name="designation" placeholder="Enter your designation" required>
		<input type="date" name="appointment" placeholder="Enter date of appointment" required>
		<input type="password" name="password" placeholder="Enter password" required>
		<input type="password" name="conpassword" placeholder="Confirm password" required>
		<button type="submit" name="signup-submit">Create Account</button>
	</form>
	</div>
</body>
</html>

<?php
	require "../footer.php";
?>