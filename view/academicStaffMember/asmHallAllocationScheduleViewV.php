<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daily Hall Allocation Schedule</title>
    <link rel="stylesheet" href="../assests/css/main.css">
</head>
<body>
    <div class="container">
        <div class="header">
             <!-- <div class="nameLogo"> -->
             <img src="../assests/img/ims.jpg" alt="ims" class="logo">
            <!-- </div> -->
            <div class="options">
                <a href="asmHomeV.php">Home</a>
                <a href="#">Logout</a>
            </div>
        </div>
        <div class="header">breadcrums</div>
        <div class="side-nav">
            <!-- <div> -->
            <h2>Academic Staff Member</h2>
            <!-- </div> -->

            <!-- <div> -->
                <a href="asmWeeklyTimeTableV.php"><button type="submit" name="" class="button">View Weekly Time Table</button></a><br>
                <a href="asmViewHallAllocationScheduleV.php"><button type="submit" name="" class="button">View Hall Allocation Schedule</button></a><br>
                <a href="asmViewSchemeDetailsV.php"><button type="submit" name="" class="button">View Scheme Details</button></a><br>
                <a href="asmHallDetailsV.php"><button type="submit" name="" class="button">View Hall Details</button></a><br>
                <a href="asmManageBookingV.php"><button type="submit" name="" class="button">Manage Booking</button></a><br>
                <a href="asmRegisterToMedicalSchemeV.php"><button type="submit" name="" class="button">Register to the Staff Medical Scheme</button></a><br>
            <!-- </div> -->
        </div>
        <div class="content">
            <div>
                <h2>Schedule</h2>
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

                <a href="asmViewHallAllocationScheduleV.php"><button type="submit" name="">OK</button></a>
        </div>
        <div class="footer"><?php require "../footer.php"; ?></div>
    </div>
</body>
</html>
