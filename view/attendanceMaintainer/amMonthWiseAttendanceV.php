<main>
    <title>View Month Wise Attendance</title>
    <?php
        require '../basic/header.php';
    ?>

    <div class="header">
        <ul class="breadcrumbs">
            <li><a href="amHomeV.php">Home</a></li>
            <li>View Month Wise Attendance</li>
        </ul>
    </div>

    <div class="side-nav">
        <?php
            require '../attendanceMaintainer/amSideNavV.php';
        ?>
    </div>

    <div class="content">
        <div>
            <h3>Month Wise Attendance</h3>
        </div>

        Enter calendar year<input type="number" name="calander_year" placeholder="Calander Year" required/> <br>

        Enter month <input type="text" name="month" placeholder="Month" required/> <br>

        Enter degree <input type="text" name="degree" placeholder="Degree" required/> <br>
        
        Enter academic year <input type="text" name="academic_year" placeholder="Academic Year" required/> <br>

        Enter semester <input type="text" name="semester" placeholder="Semester" required/> <br>

        Enter subject <input type="text" name="subject" placeholder="Subject" required/> <br>

        <button type="submit" name="select-submit" href="amDisplayAttendanceV.php">Display Attendance</button>
    </div>

    <?php
        require '../basic/footer.php';
    ?>
</main>