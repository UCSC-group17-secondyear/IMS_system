<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Weekly Time Table</title>
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
                <h2>Weekly Time Table</h2>
            </div>

            <table>
                <tr>
                    <th>Date</th>
                    <th>Time Duration</th>
                    <th>Hall Name</th>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
            </table>

            <a href="lHomeV.php"><button type="submit" name="">OK</button></a> 
            <!-- if lecturer registered as a medical scheme member then redirect to the lecturer home page without "Register to the medical scheme button"  -->

            
        </div>
        <div class="footer"><?php require "../footer.php"; ?></div>
    </div>
</body>
</html>