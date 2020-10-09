<main>
    <title>View Student Wise Attendance</title>
    <?php
        require '../basic/header.php';
    ?>

    <div class="header">
        <ul class="breadcrumbs">
            <li><a href="amHomeV.php">Home</a></li>
            <li>View Student Wise Attendance</li>
        </ul>
    </div>

    <div class="side-nav">
        <?php
            require '../attendanceMaintainer/amSideNavV.php';
        ?>
    </div>

    <div class="content">
        <div>
            <h3>Student Wise Attendance</h3>
        </div>

        Enter Student Index<input type="text" name="student_index" placeholder="Student Index" required/> <br>
        
        Enter Degree<input type="text" name="degree" placeholder="Degree" required/> <br>
        
        Enter Academic Year<input type="text" name="academic_year" placeholder="Academic Year" required/> <br>
        
        Enter Semester<input type="text" name="semester" placeholder="Semester" required/> <br>
        
        Enter Subject<input type="text" name="subject" placeholder="Subject" required/> <br>
        
        Enter Start Date<input type="date" name="start_date" placeholder="Start Date" required/> <br>
        
        Enter End Date<input type="date" name="end_date" placeholder="End Date" required/> <br>
        
        <button type="submit" name="select-submit" href="amDisplayAttendanceV.php">Display Attendance</button>
    </div>

    <div class="right-side-bar">
        <a href="../../controller/viewProfileController.php?user_id=<?php echo $_SESSION['userId'] ?>"><button type="submit" name="" class="button">Profile</button></a>
    </div>

    <?php
        require '../basic/footer.php';
    ?>
</main>