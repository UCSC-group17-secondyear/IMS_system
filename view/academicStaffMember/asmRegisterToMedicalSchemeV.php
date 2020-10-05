<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register to Medical Scheme</title>
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
            </div>
        </div>
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
            <form action="" method="post">
                <label for="empName">Employee Name</label>
                <input type="text" value=""> <br>
                <label for="empNumber">Employee Number</label>
                <input type="text" value=""> <br>
                <label for="designation">Designation</label>
                <input type="text" value=""> <br>
                Enter department
                <select name="department" id="">
                    <option value="">Select department</option>
                    <option value="CS">CS</option>
                    <option value="IS">IS</option>
                    <option value="SE">SE</option>
                </select> <br>
                <label for="healthCondition">Enter health condition</label>
                <input type="text" value=""> <br>
                Enter civil status
                <select name="civilstatus" id="">
                    <option value="married">Married</option>
                    <option value="unmarried">Unmarried</option>
                </select> <br>
                Select Medical Scheme
                <select name="medical scheme" id="">
                    <option value="">Select Scheme</option>
                    <option value="scheme1">Scheme 1</option>
                    <option value="scheme2">Scheme 2</option>
                    <option value="scheme3">Scheme 3</option>
                </select> <br>

                
            </form>
            <a href="asmRegisterSuccessV.php"><button type="submit" name="registerMedicalScheme-submit">Register</button></a><br>
            
        </div>
        <div class="footer">
            <?php
                require_once('../include/footer.php');
            ?>
        </div>
    </div>
</body>
</html>
