<main>
    <title>Monthwise Attendance</title>
    <?php
        require '../basic/header.php';
    ?>

    <div class="header">
        <ul class="breadcrumbs">
            <li><a href="rvHomeV.php">Home</a></li>
            <li>Atendance</li>
            <li>Monthwise Attendance</li>
        </ul>
    </div>

    <div class="side-nav">
        <?php
            require 'rvSideNavV.php';
        ?>
    </div>

    <div class="content">
        <div>
            <h3>Month Wise Attendance</h3>
        </div>
        <form action="rvMonthWiseAttendanceV.php" method="post">
            <input type="number" name="calander_year" placeholder="Calander Year" required />
            <input type="text" name="month" placeholder="Month" required />
            <input type="text" name="degree" placeholder="Degree" required />
            <input type="text" name="academic_year" placeholder="Academic Year" required />
            <input type="text" name="semester" placeholder="Semester" required />
            <input type="text" name="subject" placeholder="Subject" required />
            <button type="submit" name="select-submit" href="#">Display Attendance</button>
        </form>
    </div>

    <?php
        require '../basic/footer.php';
    ?>
</main>