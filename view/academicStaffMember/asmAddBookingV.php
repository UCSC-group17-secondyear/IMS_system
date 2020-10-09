<main>
    <title>Add Booking</title>
    <?php
        require '../basic/header.php';
    ?>

    <div class="header">
        Breadcrumbs
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

        Enter Date<input type="date" id="" name="enterDate"><br>
        Enter Hall<select name="hall" id="hall">
            <option value="">Select a Hall</option>
            <option value="E401">E401</option>
            <option value="S104">S104</option>
            <option value="W001">W001</option>
        </select>
        <br>
        Start Time<input type="time" id="" name="startTime"><br>
        End Time<input type="time" id="" name="endTime"><br>
        <a href="asmBookingSuccessfulV.php"><button type="submit" name="addBooking-submit">Book</button></a>
    </div>

    <div class="right-side-bar">
        <a href="../../controller/viewProfileController.php?user_id=<?php echo $_SESSION['userId'] ?>"><button type="submit" name="" class="button">Profile</button></a>
    </div>

    <?php
        require '../basic/footer.php';
    ?>
</main>