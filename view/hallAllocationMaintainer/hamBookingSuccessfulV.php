<?php
    require "../header.php";
    require "hamSideNavV.php";
?>

<main>
    <link rel="stylesheet" href="../assests/css/main.css">
    
    <div class="container">
        <!-- <ul class="breadcrumb">
            <li><a href="hamHomeV.php">Home</a></li>
            <li>Booking is successfull</li>
        </ul> -->

        <!-- <div class="header">
            <img src="../img/ims.jpg" alt="ims" class="logo">
            <div class="options">
                <a href="hamHomeV.php">Home</a>
                <a href="hamProfileV.php">Profile</a>
                <a href="#">Logout</a>
            </div>
        </div> -->

        <div class="content">   
            <p>Your booking request has been sent for the approval.
            You will be inform about the approval shortly.</p>
            <br><p>Thank you..</p>

            <a href="hamManageBookingV.php"><button type="submit" name="bookingSuccessful-submit">OK</button></a>
        </div>
    </div>
</main>

 <?php
    require_once('../include/footer.php');
?>