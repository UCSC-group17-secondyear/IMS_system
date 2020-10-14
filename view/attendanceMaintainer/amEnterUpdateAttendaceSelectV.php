<main>
    <title>Enter or Update Attendance</title>
    <?php
        require '../basic/header.php';
    ?>

    <div class="header">
        <ul class="breadcrumbs">
            <li><a href="amHomeV.php">Home</a></li>
            <li>Enter or Update Attendance</li>
        </ul>
    </div>

    <div class="side-nav">
        <?php
            require '../attendanceMaintainer/amSideNavV.php';
        ?>
    </div>

    <div class="content">
        <div>
            <h3>Enter or Update Attendance</h3>
        </div>
        
        Eenter date<input type="date" name="date" placeholder="Date" required/> <br>
        
        Eenter academic year <input type="text" name="academic_year" placeholder="Academic Year" required/> <br>

        Eenter degree <input type="text" name="degree" placeholder="Degree" required/> <br>

        Eenter subject <input type="text" name="subject" placeholder="Subject" required/> <br>

        <button type="submit" name="select-submit" href="amEnterUpdateAttendaceV.php">Select</button>
    </div>

    <?php
        require '../basic/footer.php';
    ?>
</main>