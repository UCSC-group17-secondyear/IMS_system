<?php
    require "../header.php";
    require "dhSideNavV.php";
?>

<main>
    <link rel="stylesheet" href="../assests/css/main.css">
    
    <div class="container">
        <ul class="breadcrumb">
            <li><a href="dhHomeV.php">Home</a></li>
            <li><a href="dhProfileV.php">My Profile</a></li>
            <li>Update Profile</li>
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
                <!-- here by using a 'foreach loop', we have to be able to display the data that we fetch from the database plus should let the user to update them as well-->
            </div>
        </div>
    </div>
</main>
        
<?php
    require_once('../include/footer.php');
?>