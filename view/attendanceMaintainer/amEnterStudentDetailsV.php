<main>
    <title>Enter Students' Details</title>
    <?php
        require '../basic/header.php';
    ?>

    <div class="header">
        <ul class="breadcrumbs">
            <li><a href="amHomeV.php">Home</a></li>
            <li>Enter Students' Details</li>
        </ul>
    </div>

    <div class="side-nav">
        <?php
            require '../attendanceMaintainer/amSideNavV.php';
        ?>
    </div>

    <div class="content">
        <div>
            <h3>Students' Details</h3>
        </div>
        
        Enter Student Name<input type="text" name="student_name" placeholder="Student Name" required/> <br>
        
        Enter Student Index No<input type="text" name="index_no" placeholder="Student Index No" required/> <br>
        
        Enter Student Registration Number<input type="text" name="registrstion_no" placeholder="Student Registration No" required/> <br>
        
        Enter Date of Birth <input type="date" name="dob" placeholder="Date of Birth" required/> <br>
        
        Enter Address<input type="text" name="textarea" placeholder="Address" required/> <br>
        
        Enter Telephone Number<input type="number" name="telephone_number" placeholder="Telephone Number" required/> <br>
        
        Enter Academic Year<input type="text" name="academic_year" placeholder="Academic Year" required/> <br>
        
        Enter Degree<input type="text" name="degree" placeholder="Degree" required/> <br>
        
        <button type="submit" name="enterStudent-submit">Enter Student</button>
    </div>

    <div class="right-side-bar">
        <a href="../../controller/viewProfileController.php?user_id=<?php echo $_SESSION['userId'] ?>"><button type="submit" name="" class="button">Profile</button></a>
    </div>

    <?php
        require '../basic/footer.php';
    ?>
</main>