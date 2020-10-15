<main>
    <title>Booking is successful</title>
    <?php
        require '../basic/header.php';
    ?>

    <div class="header">
        <!-- <ul class="breadcrumbs">
            <li><a href="hamHomeV.php">Home</a></li>
            <li>Booking is successfull</li>
        </ul>  -->
    </div>

    <div class="side-nav">
        <?php
            require '../hallAllocationMaintainer/hamSideNavV.php';
        ?>
    </div>

    <div class="content">   
        <p>Your booking request has been sent for the approval.
        You will be inform about the approval shortly.</p>
        <br><p>Thank you..</p>

        <a href="hamManageBookingV.php"><button type="submit" name="bookingSuccessful-submit">OK</button></a>
    </div>

    <?php
        require '../basic/footer.php';
    ?>

</main>