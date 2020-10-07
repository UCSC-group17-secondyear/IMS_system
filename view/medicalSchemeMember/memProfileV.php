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
                <a href="memHomeV.php">Home</a>
                <a href="memProfileV.php">Profile</a>
                <a href="#">Logout</a>
            </div>
        </div>
        
        <!-- breadcrumbs -->
        <ul class="breadcrumb">
            <li><a href="memHomeV.php">Home</a></li>
            <li>Profile</li>
        </ul>
        
        <?php
          require_once('memSideNavV.php');
        ?>
        
        <div class="banner">
            <div>
                <h2>Medical Scheme Member</h2>
            </div>
            
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
                <a href="memUpdateProfileV.php"><button type="submit">Update Profile</button></a>
            </div>

                    <!-- mekedi api database eken gnna data tika for each loop ekk ghla display krnna ona habai methndi update krnna denna ba -->

        </div>
        <div class="footer">
            <?php
                require_once('../include/footer.php');
            ?>
        </div>
    </div>
</body>
</html>