<?php
    require "../header.php";
    require "hamSideNavV.php";
?>

<main>
    <link rel="stylesheet" href="../assests/css/main.css">
    
    <div class="container">
        <ul class="breadcrumb">
            <li><a href="hamHomeV.php">Home</a></li>
            <li>Add a booking</li>
        </ul>

        <!-- <div class="header">
            <img src="../img/ims.jpg" alt="ims" class="logo">
            <div class="options">
                <a href="hamHomeV.php">Home</a>
                <a href="hamProfileV.php">Profile</a>
                <a href="#">Logout</a>
            </div>
        </div> -->

        <div class="content">
            <div>
                <h3>Add a Booking</h3>
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

            <a href="hamBookingSuccessfulV.php"><button type="submit" name="addBooking-submit">Book</button></a>
        </div>
    </div>
</main>

<?php
    require_once('../include/footer.php');
?>