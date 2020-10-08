<?php
    require "../header.php";
    require "amSideNavV.php";
?>

<main>
    <link rel="stylesheet" href="../assests/css/main.css">
    
    <div class="container">
        <ul class="breadcrumb">
            <li><a href="amHomeV.php">Home</a></li>
            <li>My Profile</li>
        </ul>

        <!-- <div class="header">
            <img src="../img/ims.jpg" alt="ims" class="logo">
            <div class="options">
                <a href="hamHomeV.php">Home</a>
                <a href="hamProfileV.php">Profile</a>
                <a href="#">Logout</a>
            </div>
        </div> -->

        <div class="content">
            <div>
                <h3>My Profile</h3>
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
                <a href="hamUpdateProfileV.php"><button type="submit">Update Profile</button></a>
            </div>
        </div>
    </div>
</main>

<?php
    require_once('../include/footer.php');
?>