<html>
    <head>
        <title>Attendance Maintainer Page</title>
        <link rel="stylesheet" href="../assests/css/style.css">
    </head>
    <body>
        <?php
            require "../header.php";
        ?>
        <ul class="breadcrumb">
            <li><a href="homePageV.php">Home</a></li>
            <li><a href="amHomeV.php">Attendance Maintainer Page</a></li>
            <li>View Attendance - Student Wise</li>
        </ul>
        <?php
            require "amSideNavV.php";
        ?>

        <div class="formStyle">
        <form action="amMonthWiseAttendanceV.php" method="post">
            <input type="number" name="calander_year" placeholder="Calander Year" required>
            <input type="text" name="month" placeholder="Month" required>
            <input type="text" name="degree" placeholder="Degree" required>
            <input type="text" name="academic_year" placeholder="Academic Year" required>
            <input type="text" name="semester" placeholder="Semester" required>
            <input type="text" name="subject" placeholder="Subject" required>
            <button type="submit" name="select-submit" href="amDisplayAttendanceV.php">Display Attendance</button>
        </form>
    </div>

        <?php
            require "../footer.php";
        ?>
    </body>
</html>