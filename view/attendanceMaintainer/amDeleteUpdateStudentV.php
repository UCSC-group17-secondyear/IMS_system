<main>
    <title>Delete/Update Student Details</title>
    <?php
        require '../basic/header.php';
    ?>

    <div class="header">
        <ul class="breadcrumbs">
            <li><a href="amHomeV.php">Home</a></li>
            <li>Delete or Update Student Details</li>
        </ul>
    </div>

    <div class="side-nav">
        <?php
            require '../attendanceMaintainer/amSideNavV.php';
        ?>
    </div>

    <div class="content">
        Enter Student Name<input type="text" name="student_name" placeholder="Student Name" required/> <br>
        
        Enter Student Index Number<input type="text" name="index_no" placeholder="Student Index No" required/><br>
        
        Enter Student Registration Number<input type="text" name="registrstion_no" placeholder="Student Registration No" required/><br>
        
        Enter Date of Birth<input type="date" name="dob" placeholder="Date of Birth" required/><br>
        
        Enter Address<input type="text" name="textarea" placeholder="Address" required/><br>
        
        Enter Telephone Number<input type="number" name="telephone_number" placeholder="Telephone Number" required/><br>
        
        Enter Academic Year<input type="text" name="academic_year" placeholder="Academic Year" required/><br>
        
        Enter Degree<input type="text" name="degree" placeholder="Degree" required/><br>
        
        <button type="submit" name="updateStudent-submit">Save Updates</button>
        <button type="submit" name="deleteStudent-submit">Delete</button>
    </div>

    <div class="right-side-bar">
        <a href="../../controller/viewProfileController.php?user_id=<?php echo $_SESSION['userId'] ?>"><button type="submit" name="" class="button">Profile</button></a>
    </div>

    <?php
        require '../basic/footer.php';
    ?>
</main>