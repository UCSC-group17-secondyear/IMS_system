<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
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
        <div class="header">breadcrums</div>
        <div class="side-nav">
            

        <!-- <div> -->
                <a href="hamWeeklyTimeTableV.php"><button type="submit" name="" class="button">View Weekly Time Table</button></a><br>
                <a href="hamViewHallAllocationScheduleV.php"><button type="submit" name="" class="button">View Hall Allocation Schedule</button></a><br>
                <a href="hamViewSchemeDetailsV.php"><button type="submit" name="" class="button">View Scheme Details</button></a><br>
                <a href="hamHallDetailsV.php"><button type="submit" name="" class="button">View Hall Details</button></a><br>
                <a href="hamManageWeeklyTimeTableV.php"><button type="submit" name="" class="button">Manage Weekly Time Table</button></a><br>
                <a href="hamManageBookingV.php"><button type="submit" name="" class="button">Manage Booking</button></a><br>
                <a href="hamRegisterToMedicalSchemeV.php"><button type="submit" name="" class="button">Register to the Staff Medical Scheme</button></a><br>
            <!-- </div> -->
        </div>
        <div class="banner">
            <div>
                <h2>Hall Allocation Maintainer</h2>
            </div>
        </div>
        <div class="content">
                <div>
                    <h3>Update Profile</h3>
                </div>
                <div>
                    <form action="" method="post">
                        <label for="empId">Employee Id</label>
                        <input type="text" value=""> <br>
                        <label for="nameWithInt">Initials of the name</label>
                        <input type="text" value=""> <br>
                        <label for="surname">Surname</label>
                        <input type="text" value=""> <br>
                        <label for="email">Email</label>
                        <input type="email" value=""> <br>
                        <label for="mobNum">Mobile Number</label>
                        <input type="text" value=""> <br>
                        <label for="telNum">Telephone Number</label>
                        <input type="text" value=""> <br>
                        <label for="dob">Date of Birth</label>
                        <input type="date" value=""> <br>
                        <label for="designation">Designation</label>
                        <input type="text" value=""> <br>
                        <label for="appointmentDate">Appointment Date</label>
                        <input type="date" value=""> <br>                    
                    </form>
                    <a href="hamUpdateProfileSuccessV.php"><button type="submit">Save Updates</button></a>

                    <!-- mekedi api database eken gnna data tika for each loop ekk ghla display krnna ona habai mekedi update krnna puluwn wenna ona -->

                </div>
        </div>
        <div class="footer">
            <?php
                require_once('../include/footer.php');
            ?>
        </div>
</body>
</html>