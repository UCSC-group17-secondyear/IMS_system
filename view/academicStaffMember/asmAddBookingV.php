<main>
    <title>Add Booking</title>
    <?php
        require '../basic/header.php';
    ?>

    <div class="header">
        <ul class="breadcrumbs">
            <li><a href="asmHomeV.php">Home</a></li>
            <li>Add Booking</li>
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
            <form action="../../controller/addBookingControllerTwo.php?user_id=<?php echo $_SESSION['userId'] ?>" method="post">
                <label for="">Enter Date: </label>
                <input type="date" name="date" required> <br>
                <label for="">Enter Hall: </label>
                <select name="hall" id="hall" required>
                    <option value="">Select a Hall</option>
                    <?php echo $_SESSION['halls'] ?>
                </select> <br>
                <label for="">Start Time</label>
                <input type="time" name="startTime" required> <br>
                <label for="">End Time</label>
                <input type="time" name="endTime" required> <br> 
                <label for="">Reason: </label>
                <input type="text" name="reason" required> <br> 
                <button type="submit" name="submit">Book</button>
            </form>
        </div>
    </div>

    <div class="right-side-bar">
        <a href="../../controller/viewProfileController.php?user_id=<?php echo $_SESSION['userId'] ?>"><button type="submit" name="" class="button">Profile</button></a>
    </div>

    <?php
        require '../basic/footer.php';
    ?>
</main>