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
                <a href="msmHomeV.php">Home</a>
                <a href="msmProfileV.php">Profile</a>
                <a href="#">Logout</a>
            </div>
        </div>
        <div class="header">breadcrums</div>
        <div class="side-nav"> 
            <!-- <div> -->
                
            <!-- </div> -->

            <!-- <div> -->
                <a href="msmViewMedicalMemberListV.php"><button type="submit" name="" class="button">View Medical Member List</button></a><br>
                <a href="msmRemoveMemberV.php"><button type="submit" name="" class="button">Remove Member</button></a><br>
                <a href="msmViewClaimDetailsV.php"><button type="submit" name="" class="button">View Claim Details</button></a><br>
                <a href="msmViewFormsV.php"><button type="submit" name="" class="button">View Forms of the Medical Scheme</button></a><br>
                <a href="msmViewSchemeDetailsV.php"><button type="submit" name="" class="button">View Medical Scheme Details</button></a><br>
                <a href="msmRegisterToMedicalSchemeV.php"><button type="submit" name="" class="button">Register to the Staff Medical Scheme</button></a><br>
            <!-- </div> -->
        </div>
        <div class="banner">
            <h2>Medical Scheme Maintainer</h2>
        </div>
        <div class="content">
            <div>
                <h3>Profile</h3>
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
                    <a href="msmUpdateProfileV.php"><button type="submit">Update Profile</button></a>
                    <!-- mekedi api database eken gnna data tika for each loop ekk ghla display krnna ona habai methndi update krnna denna ba -->
            </div>
        </div>
        <div class="footer">
            <?php
                require_once('../include/footer.php');
            ?>
        </div>
    </div>
</body>
</html>