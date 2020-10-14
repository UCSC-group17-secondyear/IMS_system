<main>
    <title>Update Booking</title>
    <?php
        require '../basic/header.php';
    ?>

    <div class="header">
        <ul class="breadcrumbs">
            <li><a href="hamHomeV.php">Home</a></li>
            <li>Update Booking</li>
        </ul>
    </div>

    <div class="side-nav">
        <?php
            require '../hallAllocationMaintainer/hamSideNavV.php';
        ?>
    </div>

    <div class="content">
        <div>
            <h3>Update / Remove Booking</h3>
        </div>

        Enter booking id : <input type="text" id="" name="bookingId"><br>

        <a href="hamBookingDetailsV.php"><button type="submit" name="updateBooking-submit">OK</button></a>
    </div>

    <?php
        require '../basic/footer.php';
    ?>
</main>