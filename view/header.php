<?php
	session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="descriotion" content="Meta content that will show up in search results.">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Home Page</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>
	<header>
		<nav class="nav-header-main">
			<a class="header-logo" href="#">IMS</a>
			<form action="" method="POST">
				<ul>
					<li><a href="homePageV.php">Home</a></li>
					<?php
						if (isset($_SESSION['logid'])) {

							echo '<li><button type="submit" name="logout-submit"><a href="logOut.php">Log Out</a></button></li>';
						}
						else {
							echo '<li><button type="submit" name="login-submit">Log In</button></li>';
						}
					?>
				</ul>
			</form>
		</nav>
		<!--<div class="banner">-->
			<!--<h2>University of Colombo School of Computing</h2>
			<h2>Welcome to the IMS of Academic and Publications Division</h2>		-->	
		<!--</div>-->
	</header>