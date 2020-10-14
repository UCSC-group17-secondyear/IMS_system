<main>
    <title>Booking is updated</title>
    <?php
        require '../basic/header.php';
    ?>

    <div class="header">
        <!-- <ul class="breadcrumbs">
            <li><a href="hamHomeV.php">Home</a></li>
            <li>Updated a booking successfully</li>
        </ul> -->
    </div>

    <div class="side-nav">
        <?php
            require '../hallAllocationMaintainer/hamSideNavV.php';
        ?>
    </div>

    <div class="content">
        <p>Your booking has been updated successfully.</p>
        <a href="hamUpdateBookingV.php"><button type="submit" name="bookingUpdateSuccess-submit">OK</button></a><br>
    </div>

    <?php
        require '../basic/footer.php';
    ?>
</main>