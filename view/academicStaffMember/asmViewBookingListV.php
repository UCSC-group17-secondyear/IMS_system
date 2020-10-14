<main>
    <title>Booking Update</title>
    <?php
        require '../basic/header.php';
    ?>

    <div class="header">
        <ul class="breadcrumbs">
            <li><a href="asmHomeV.php">Home</a></li>
            <li>Update or remove a Booking</li>
        </ul>
    </div>

    <div class="side-nav">
        <?php
            require '../academicStaffMember/asmSideNavV.php';
        ?>
    </div>

    <div class="content">

        <table class="mytable"> 
            <tr>
                <th>Date</th>
                <th>Start Time</th>
                <th>End Time</th>
                <th>Reason</th>
                <th>Hall</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>

            <?php echo $_SESSION['booking_list'] ?>

        </table>
        <!-- <div>
            <h3>Update / Remove Booking</h3>
        </div>

        Enter booking id : <input type="text" id="" name="bookingId" placeholder="Booking Id"><br>
        <a href="asmBookingDetailsV.php"><button type="submit" name="updateBooking-submit">OK</button></a> -->
    </div>

    <div class="right-side-bar">
        <a href="../../controller/viewProfileController.php?user_id=<?php echo $_SESSION['userId'] ?>"><button type="submit" name="" class="button">Profile</button></a>
    </div>

    <?php
        require '../basic/footer.php';
    ?>

</main>
