<main>
    <title>Booking Successful</title>
    <?php
        require '../basic/header.php';
    ?>

    <div class="header">
        <ul class="breadcrumbs">
            <li><a href="asmHomeV.php">Home</a></li>
            <li>Booking Successfull</li>
        </ul>
    </div>

    <div class="side-nav">
        <?php
            require '../academicStaffMember/asmSideNavV.php';
        ?>
    </div>

    <div class="content">
        <p>Your booking request has been sent for the approval. You will be inform about the approval shortly.</p>
        <br>
        <p>Thank you..</p>
        <a href="asmManageBookingV.php"><button type="submit" name="bookingSuccessful-submit">OK</button></a>
    </div>

    <?php
        require '../basic/footer.php';
    ?>

</main>
