<?php
    require_once('../header.php');
    require_once('asmSideNavV.php');
?>

<main>
    <link rel="stylesheet" href="../assests/css/style.css">
    <div class="container">
        <!-- <div class="header">
            <img src="../img/ims.jpg" alt="ims" class="logo">
            <div class="options">
                <a href="asmHomeV.php">Home</a>
                <a href="asmProfileV.php">Profile</a>
                <a href="#">Logout</a>
            </div>
        </div> -->

        <div class="header">breadcrums</div>

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
    </div>
</main>

<?php
    require_once('../include/footer.php');
?>