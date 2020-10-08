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

        <?php
            require_once('asmSideNavV.php');
        ?>

        <div class="content">
            <div>
                <h3>Update / Remove Booking</h3>
            </div>

            Enter booking id : <input type="text" id="" name="bookingId"><br>

            <a href="asmBookingDetailsV.php"><button type="submit" name="updateBooking-submit">OK</button></a>

        </div>
    </div>
</main>

<?php
    require_once('../include/footer.php');
?>