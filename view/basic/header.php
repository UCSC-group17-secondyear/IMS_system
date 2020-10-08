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

		<div class="container">
	        <div class="header">
				<img src="../img/ims.jpg" alt="ims" class="logo">
				<div class="options">
						<a href="homePageV.php">Home</a>
						<?php
							if (isset($_SESSION['userId'])) {

								echo '<a href="../../controller/logoutController.php">Log Out</a>';
							}
							else {
								echo '<a href="../basic/login.php">Log In</a>';
							}
						?>
				</div>
			</div>
		