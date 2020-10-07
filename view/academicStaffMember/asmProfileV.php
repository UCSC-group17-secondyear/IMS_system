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
                <a href="asmHomeV.php">Home</a>
                <a href="asmProfileV.php">Profile</a>
                <a href="#">Logout</a>
            </div>
        </div>

        <div class="header">breadcrums</div>

        <?php
            require_once('asmSideNavV.php');
        ?>

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
                <a href="asmUpdateProfileV.php"><button type="submit">Update Profile</button></a>
            </div>
        </div>

        <div class="footer">
            <?php
                require_once('../include/footer.php');
            ?>
        </div>
</body>

</html>