<main>
    <title>Booking Details</title>
    <?php
        require '../basic/header.php';
    ?>

    <div class="header">
        <ul class="breadcrumbs">
            <li><a href="hamHomeV.php">Home</a></li>
            <li>Booking Details</li>
        </ul>
    </div>

    <div class="side-nav">
        <?php
            require '../hallAllocationMaintainer/hamSideNavV.php';
        ?>
    </div>

    <div class="content">
        <div>
            <h3>Booking</h3>
        </div>

        <form action="" method="POST">
            Enter Date<input type="date" id="" name="enterDate"><br>
                <select name="hall" id="hall">
                    <option value="">Select a Hall</option>
                    <option value="E401">E401</option>
                    <option value="S104">S104</option>
                    <option value="W001">W001</option>
                </select>
                <br>
                Start Time<input type="time" id="" name="startTime"><br>
                End Time<input type="time" id="" name="endTime"><br>
        </form>
            <!-- mekath database eken data awilla fill wela tyenna ona -->

        <a href="hamBookingUpdateSaveV.php"><button type="submit" name="bookingUpdateSave-submit">Save Updates</button></a><br>
        
        <a href="hamBookingRemoveV.php"><button type="submit" name="bookingRemove-submit">Remove</button></a>
    </div>

    <div class="right-side-bar">
        <a href="../../controller/viewProfileController.php?user_id=<?php echo $_SESSION['userId'] ?>"><button type="submit" name="" class="button">Profile</button></a>
    </div>

    <?php
        require '../basic/footer.php';
    ?>

</main>