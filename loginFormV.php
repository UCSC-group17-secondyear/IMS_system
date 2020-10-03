<?php
	require "../header.php";
?>

<main>
	<link rel="stylesheet" href="../assests/css/style.css">
	
	<!-- <h2>Log in </h2> -->
	<div class="container">
		<div class="formStyle">
			<form action="login.php" method="post">	
				<input type="text" name="empid" placeholder="Your username" required>
				<input type="password" name="password" placeholder="Your password" required>
				<button type="submit" name="login-submit">Login</button>
			</form>
			<p>No account yet? <a href="signupFormV.php">Signup</a></p>
		</div>
	</div>
</main>

<?php
	require "../footer.php";
?>