<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add a Booking</title>
    <link rel="stylesheet" href="../css/main.css">
</head>
<body>
    <div class="container">
        <div class="header">
            <!-- <div class="nameLogo"> -->
            <img src="../img/ims.jpg" alt="ims" class="logo">
            <!-- </div> -->
            <div class="options">
                <a href="hamHomeV.php">Home</a>
                <a href="hamProfileV.php">Profile</a>
                <a href="#">Logout</a>
            </div>
        </div>

        <ul class="breadcrumb">
            <li><a href="hamHomeV.php">Home</a></li>
            <li>Add a new degree</li>
        </ul>
        
        <?php
            require_once('hamSideNavV.php');
        ?>

        <div class="banner">
            <div>
                <h2>Hall Allocation Maintainer</h2>
            </div>
        </div>

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

        <div class="footer">
            <?php
                require_once('../include/footer.php');
            ?>
        </div>
    </div>
</body>
</html>