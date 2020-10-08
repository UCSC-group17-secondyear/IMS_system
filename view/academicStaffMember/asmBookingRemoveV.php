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
            <p>Your booking has been removed successfully.</p>
            <a href="asmUpdateBookingV.php"><button type="submit" name="bookingRemoveSuccess-submit">OK</button></a><br>
        </div>
    </div>
</main>

<?php
    require_once('../include/footer.php');
?>