<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Time Table</title>
    <link rel="stylesheet" href="../assests/css/main.css">
</head>
<body>
    <div class="container">
        <div class="header">
            <!-- <div class="nameLogo"> -->
            <img src="../assests/img/ims.jpg" alt="ims" class="logo">
            <!-- </div> -->
            <div class="options">
                <a href="lHomeV.php">Home</a>
                <a href="#">Logout</a>
            </div>
        </div>
        <div class="header">breadcrums</div>
        <div class="side-nav">
            <!-- <div> -->
                <h2>Lecturer</h2>
            <!-- </div> -->

        <!-- <div> -->
        <a href="lWeeklyTimeTableV.php"><button type="submit" name="" class="button">View Weekly Time Table</button></a><br>
                <a href="lViewHallAllocationScheduleV.php"><button type="submit" name="" class="button">View Hall Allocation Schedule</button></a><br>
                <a href="lViewSchemeDetailsV.php"><button type="submit" name="" class="button">View Scheme Details</button></a><br>
                <a href="lHallDetailsV.php"><button type="submit" name="" class="button">View Hall Details</button></a><br>
                <a href="lManageWeeklyTimeTableV.php"><button type="submit" name="" class="button">Manage Weekly Time Table</button></a><br>
                <a href="lManageBookingV.php"><button type="submit" name="" class="button">Manage Booking</button></a><br>
                <a href="lRegisterToMedicalSchemeV.php"><button type="submit" name="" class="button">Register to the Staff Medical Scheme</button></a><br>
            <!-- </div> -->
        </div>
        <!-- <div class="banner">Banner</div> -->
        <div class="content">
           
            <div>
                <h2>Update/Remove Weekly Time Table</h2>
            </div>
            <br>

            <form action="" method="POST">
                <label for="subjectName">Subject Name:</label>
                <input type="text" value=""> <br>
                <label for="subjectCode">Subject Code:</label>
                <input type="text" value=""> <br>
                <label for="hall">Hall</label>
                <input type="text" value=""> <br>
                <label for="startTime">Start time:</label>
                <input type="time" value=""> <br>
                <label for="endTime">End Time:</label>
                <input type="time" value=""> <br>
            </form>
            <!-- meka database eken update wela enna ona -->

            <a href="lSaveUpdateTimeTableV.php"><button type="submit" name="">Save Updates</button></a>
            <br>
            <br>
            <a href="lRemoveTimeTableV.php"><button type="submit" name="">Remove</button></a>

            
        </div>
        <div class="footer"><?php require "../footer.php"; ?></div>
    </div>
</body>
</html>