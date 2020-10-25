<?php
    session_start();
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IMS Home Page</title>
    <link rel="stylesheet" type="text/css" href="../assests/css/new.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <header>
        <div class="topnav">
            <a href="../../controller/homeController.php?user_id=<?php echo $_SESSION['userId'] ?>">Home</a>
				<?php
					if (isset($_SESSION['userId'])) {
						echo '<a href="../../controller/logoutController.php">Log Out</a>';
					}
					else {
						echo '<a href="../basic/login.php">Log In</a>';
					}
				?>
        </div>
    </header>