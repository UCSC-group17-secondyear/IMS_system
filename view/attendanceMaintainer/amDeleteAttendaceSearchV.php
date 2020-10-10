<main>
    <title>Delete Attendance</title>
    <?php
        require '../basic/header.php';
    ?>

    <div class="header">
        <ul class="breadcrumbs">
            <li><a href="amHomeV.php">Home</a></li>
            <li>Delete Attendance</li>
        </ul>
    </div>

    <div class="side-nav">
        <?php
            require '../attendanceMaintainer/amSideNavV.php';
        ?>
    </div>

    <div class="content">
        <div>
            <h3>Delete Attendance</h3>
        </div>

        Enter date <input type="date" name="date" placeholder="Date" required/> <br>

        Enter academic year <input type="text" name="academic_year" placeholder="Academic Year" required/> <br>

        Enter degree <input type="text" name="degree" placeholder="Degree" required/> <br>

        Enter subject <input type="text" name="subject" placeholder="Subject" required/> <br>

        <button type="submit" name="select-submit" href="amDeleteAttendaceV.php">Select</button>    
    </div>

    <div class="right-side-bar">
        <a href="../../controller/viewProfileController.php?user_id=<?php echo $_SESSION['userId'] ?>"><button type="submit" name="" class="button">Profile</button></a>
    </div>

    <?php
        require '../basic/footer.php';
    ?>
</main>