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
    <div class="sansserif">
        <header>
            <div class="topnav">
                    <!-- <img src="../assests/img/cover.png" alt="" style="width: 10%;"> -->
                    <?php
                        if (isset($_SESSION['userId'])) {
                    ?>
                    <a href="../../controller/homeController.php?user_id=<?php echo $_SESSION['userId'] ?>"><i class="fa fa fa-home"></i>Home</a>
                    <?php
                        }
                        else {
                            echo '<a href="../basic/homePageV.php"><i class="fa fa fa-home"></i>Home</a>';
                        }
                    ?>
                
    				<?php
    					if (isset($_SESSION['userId'])) {
    						echo '<a href="../../controller/logoutController.php"><i class="fa fa-user-circle-o"></i>Log Out</a>';
    					}
    					else {
    						echo '<a href="../basic/login.php"><i class="fa fa-user-circle-o"></i>Log In</a>';
    					}
    				?>
            </div>
        </header>