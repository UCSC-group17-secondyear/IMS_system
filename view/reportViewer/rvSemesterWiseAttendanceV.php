<main>

    <?php
        require '../basic/header.php';
    ?>

    <div class="header">
        <ul class="breadcrumbs">
            <li><a href="rvHomeV.php">Home</a></li>
            <li>Attendance</li>
            <li>Semesterewise Attendance</li>
        </ul>
    </div>

    <div class="side-nav">
        <?php
            require 'rvSideNavV.php';
        ?>
    </div>
    
    <div class="content">
        <div>
            <h3>Semester Wise Attendance</h3>
        </div>

        <div class="content">
            <form action="rvBatchWiseAttendanceV.php" method="post">
                <input type="number" name="calander_year" placeholder="Calander Year" required />
                <input type="text" name="semester" placeholder="Semester" required />
                <input type="text" name="degree" placeholder="Degree" required />
                <input type="text" name="academic_year" placeholder="Academic Year" required />
                <input type="text" name="subject" placeholder="Subject" required />
                <button type="submit" name="select-submit" href="#">Display Attendance</button>
            </form>
        </div>
    </div>

    <div class="right-side-bar">
        <a href="../../controller/viewProfileController.php?user_id=<?php echo $_SESSION['userId'] ?>"><button type="submit" name="" class="button">Profile</button></a>
    </div>

    <?php
        require '../basic/footer.php';
    ?>

</main>
