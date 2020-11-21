<?php
    session_start();
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IMSystem</title>
    <link rel="icon" href="../assests/img/favicon1.png">
    <link rel="stylesheet" type="text/css" href="../assests/css/new.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>	
	<header>
        <div class="topnav">
            <img src="../assests/img/cover_final.png" alt="" style="width: 16%; margin-left: 3px; margin-top:1px">
            
			<a href="../../controller/SignupController.php?desig=99"><i class="fa fa-fw fa-user-circle"></i>Sign up</a>
    				
        </div>
    </header>

	<div class="home_image">
		<div class="heading">
			<img src="../assests/img/favicon1.png" alt="Logo">
			<h2>Information Management System</h2>
			<h3>Academic and Publications Division - UCSC</h3>
			<a href="login.php">
				<button type="submit" class="loginbtn"><i class="fa fa-fw fa-user-circle"></i>Login</button>
			</a>
		</div>
	</div>
</body>

<?php
	require 'footer.php';
?>