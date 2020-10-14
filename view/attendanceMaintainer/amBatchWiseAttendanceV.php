<main>
    <title>Bacthwise attendance details</title>
    <?php
        require '../basic/header.php';
    ?>

    <div class="header">
        <ul class="breadcrumbs">
            <li><a href="amHomeV.php">Home</a></li>
            <li>View Batch Wise Attendance</li>
        </ul>
    </div>

    <div class="side-nav">
        <?php
            require '../attendanceMaintainer/amSideNavV.php';
        ?>
    </div>

    <div class="content">
        <div>
            <h3>Batch Wise Attendance</h3>
        </div>

        Enter Academic Year <input type="text" name="academic_year" placeholder="Academic Year" required/> <br>
        
        Enter Degree <input type="text" name="degree" placeholder="Degree" required>
        
        Enter Calander Year <input type="number" name="calander_year" placeholder="Calander Year" required/><br>
        
        Enter Semester <input type="text" name="semester" placeholder="Semester" required/><br>
        
        Enter Subject <input type="text" name="subject" placeholder="Subject" required/><br>
        
        Enter Start Date <input type="date" name="start_date" placeholder="Start Date" required/><br>
        
        Enter End Date <input type="date" name="end_date" placeholder="End Date" required/><br>
        
        <button type="submit" name="select-submit" href="amDisplayAttendanceV.php">Display Attendance</button>
    </div>

    <?php
        require '../basic/footer.php';
    ?>
</main>