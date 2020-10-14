<main>
    <title>Update Booking</title>
    <?php
        require '../basic/header.php';
    ?>

    <div class="header">
        <ul class="breadcrumbs">
            <li><a href="asmHomeV.php">Home</a></li>
            <li>Update Booking</li>
        </ul>
    </div>

    <div class="side-nav">
        <?php
            require '../academicStaffMember/asmSideNavV.php';
        ?>
    </div>

    <div class="content">
        <div>
            <h3>Add a Booking</h3>
        </div>
        <div>
            <form action="../../controller/modifyBookingControllerTwo.php?booking_id=<?php echo $_SESSION['booking_id']?>&user_id=<?php echo $_SESSION['user_id']?>" method="post">
                <label for="">Enter Date: </label>
                <input type="date" name="date" <?php echo 'value="'.$_SESSION['date'].'"' ?> required> <br>
                <label for="">Enter Hall: </label>
                <select name="hall" id="hall" <?php echo 'value="'.$_SESSION['hall_name'].'"' ?> required>
                    <option value="">Select a Hall</option>
                    <?php echo $_SESSION['halls'] ?>
                </select> <br>
                <label for="">Start Time</label>
                <input type="time" name="startTime" <?php echo 'value="'.$_SESSION['start_time'].'"' ?> required> <br>
                <label for="">End Time</label>
                <input type="time" name="endTime" <?php echo 'value="'.$_SESSION['end_time'].'"' ?> required> <br> 
                <label for="">Reason: </label>
                <input type="text" name="reason" <?php echo 'value="'.$_SESSION['reason'].'"' ?> required> <br> 
                <button type="submit" name="submit">Update Booking</button>
            </form>
        </div>
    </div>

    <?php
        require '../basic/footer.php';
    ?>
</main>