<?php
	session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Home Page</title>
	<link rel="stylesheet" href="../css/main.css">
</head>
<body>
	<header>
		<div class="container">
	        <div class="header">
				<img src="../img/ims.jpg" alt="ims" class="logo">
				<div class="options">
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
				</div>
			</div>
		</div>
	</header>