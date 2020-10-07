<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Booking</title>
    <link rel="stylesheet" href="../css/main.css">
</head>
<body>
    <div class="container">
        <div class="header">
            <!-- <div class="nameLogo"> -->
            <img src="../img/ims.jpg" alt="ims" class="logo">
            <!-- </div> -->
            <div class="options">
                <a href="hamHomeV.php">Home</a>
                <a href="hamProfileV.php">Profile</a>
                <a href="#">Logout</a>
            </div>
        </div>

        <div class="header">breadcrums</div>
        
        <?php
            require_once('hamSideNavV.php');
        ?>

        <div class="banner">
            <div>
                <h2>Hall Allocation Maintainer</h2>
            </div>
        </div>

        <div class="content">
            <div>
                <h3>Update / Remove Booking</h3>
            </div>

            Enter booking id : <input type="text" id="" name="bookingId"><br>

            <a href="hamBookingDetailsV.php"><button type="submit" name="updateBooking-submit">OK</button></a>
        </div>
        
        <div class="footer">
            <?php
                require_once('../include/footer.php');
            ?>
        </div>
    </div>
</body>
</html>