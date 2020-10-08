<?php
    require_once('../header.php');
    require_once('asmSideNavV.php');
?>

<main>
    <link rel="stylesheet" href="../assests/css/main.css">

    <div class="container">
        <!-- <div class="header">
            <img src="../img/ims.jpg" alt="ims" class="logo">
            <div class="options">
                <a href="asmHomeV.php">Home</a>
                <a href="asmProfileV.php">Profile</a>
                <a href="#">Logout</a>
            </div>
        </div> -->

        <div class="header">breadcrums</div>

        <div class="content">
            <p>Your booking request has been sent for the approval.
                You will be inform about the approval shortly.</p>
            <br>
            <p>Thank you..</p>

            <a href="asmManageBookingV.php"><button type="submit" name="bookingSuccessful-submit">OK</button></a>
        </div>
    </div>
</main>

<?php
    require_once('../include/footer.php');
?>