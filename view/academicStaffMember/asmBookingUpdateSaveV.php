<main>
    <title>Booking Update</title>
    <?php
        require '../basic/header.php';
    ?>

    <div class="header">
        <ul class="breadcrumbs">
            <li><a href="asmHomeV.php">Home</a></li>
            <li>Updated a Booking</li>
        </ul>
    </div>

    <div class="side-nav">
        <?php
            require '../academicStaffMember/asmSideNavV.php';
        ?>
    </div>

    <div class="content">
        <p>Your booking has been updated successfully.</p>
        <a href="asmUpdateBookingV.php"><button type="submit" name="bookingUpdateSuccess-submit">OK</button></a><br>
    </div>

    <?php
        require '../basic/footer.php';
    ?>

</main>
