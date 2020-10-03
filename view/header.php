<?php
	session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="descriotion" content="Meta content that will show up in search results.">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Registration</title>
	<link rel="stylesheet" href="../assests/css/style.css">
</head>
<body>
	<header>
		<nav class="nav-header-main">
			<a class="header-logo" href="#">IMS</a>
			<ul>
				<li><a href="homePageV.php">Home</a></li>
				<?php
					if (isset($_SESSION['logid'])) {
						echo '<li><a href="logOut.php">Log Out</a></li>';
					}
					else {
						echo '<li><a href="loginFormV.php">Log In</a></li>';
					}
				?>
			</ul>
		</nav>
		<!--<div class="banner">-->
			<!--<h2>University of Colombo School of Computing</h2>
			<h2>Welcome to the IMS of Academic and Publications Division</h2>		-->	
		<!--</div>-->
	</header>