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
            <?php
                if (isset($_SESSION['userId'])) {
                    echo '<!-- <a class="active" href="#home"><i class="fa fa-fw fa-home"></i> Home</a>';
                    echo '<a href=""><i class="fa fa-fw fa-user-circle"></i>Log Out</a>';
                }
                else {
                    echo '<p class="sansserif"><a href="login.php"><i class="fa fa-fw fa-user-circle"></i>Log In</a></p>';
                }
            ?>
        </div>
    </header>