<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hall Details</title>
    <link rel="stylesheet" href="../css/main.css">
</head>
<body>
    <div class="container">
        <div class="header"> 
            <!-- <div class="nameLogo"> -->
                <img src="../img/ims.jpg" alt="ims" class="logo">
            <!-- </div> -->
            <div class="options">
                <a href="asmHomeV.php">Home</a>
                <a href="asmProfileV.php">Profile</a>
                <a href="#">Logout</a>
            </div></div>
        <div class="header">breadcrums</div>
        <div class="side-nav">
            

            <!-- <div> -->
                <a href="asmWeeklyTimeTableV.php"><button type="submit" name="" class="button">View Weekly Time Table</button></a><br>
                <a href="asmViewHallAllocationScheduleV.php"><button type="submit" name="" class="button">View Hall Allocation Schedule</button></a><br>
                <a href="asmViewSchemeDetailsV.php"><button type="submit" name="" class="button">View Scheme Details</button></a><br>
                <a href="asmHallDetailsV.php"><button type="submit" name="" class="button">View Hall Details</button></a><br>
                <a href="asmManageBookingV.php"><button type="submit" name="" class="button">Manage Booking</button></a><br>
                <a href="asmRegisterToMedicalSchemeV.php"><button type="submit" name="" class="button">Register to the Staff Medical Scheme</button></a><br>
            <!-- </div> -->
        </div>
        <div class="banner">
            <div>
                <h2>Academic Staff Member</h2>
            </div>
        </div>
        <div class="content">
            <div>
                <h3>Hall Details</h3>
            </div>

            <!-- <h4>Select a Hall</h4> -->
            <select name="hall" id="hall">
                <option value="">Select a Hall</option>
                <option value="E401">E401</option>
                <option value="S104">S104</option>
                <option value="W001">W001</option>
            </select>
            <br>
            <br>
            <a href="asmViewHallDetailsV.php"><button type="submit" name="">Display Details</button></a>
        </div>
        <div class="footer">
            <?php
                require_once('../include/footer.php');
            ?>
        </div>
    </div>
</body>
</html>
