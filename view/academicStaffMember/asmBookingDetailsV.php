<main>
    <title>Booking Details</title>
    <?php
        require '../basic/header.php';
    ?>

    <div class="header">
        <ul class="breadcrumbs">
            <li><a href="asmHomeV.php">Home</a></li>
            <li>View Booking Details</li>
        </ul>
    </div>

    <div class="side-nav">
        <?php
            require '../academicStaffMember/asmSideNavV.php';
        ?>
    </div>

    <div class="content">
        <div>
            <h3>Booking</h3>
        </div>

        <a href="asmBookingUpdateSaveV.php"><button type="submit" name="bookingUpdateSave-submit">Save Updates</button></a><br>
        <a href="asmBookingRemoveV.php"><button type="submit" name="bookingRemove-submit">Remove</button></a>
    </div>
    
    <?php
        require '../basic/footer.php';
    ?>
</main>