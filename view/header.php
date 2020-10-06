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

							echo '<li><a href="../controller/logOutController.php">Log Out</a></li>';
						}
						else {
							echo '<li><a href="login.php">Log In</a></li>';
						}
					?>
				</ul>
			</form>
		</nav>
	</header>