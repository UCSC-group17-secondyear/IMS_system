<?php
    require "../header.php";
    require "hamSideNavV.php";
?>

<main>
    <link rel="stylesheet" href="../assests/css/main.css">
    
    <div class="container">
        <ul class="breadcrumb">
            <li><a href="hamHomeV.php">Home</a></li>
            <li>Remove a booking</li>
        </ul>

        <!-- <div class="header">
            <img src="../img/ims.jpg" alt="ims" class="logo">
            <div class="options">
                <a href="hamHomeV.php">Home</a>
                <a href="hamProfileV.php">Profile</a>
                <a href="#">Logout</a>
            </div>
        </div> -->

        <div class="content">
            <p>Your booking has been removed successfully.</p>

            <a href="hamUpdateBookingV.php"><button type="submit" name="bookingRemoveSuccess-submit">OK</button></a><br>
        </div>
    </div>
</main>

<?php
    require_once('../include/footer.php');
?>