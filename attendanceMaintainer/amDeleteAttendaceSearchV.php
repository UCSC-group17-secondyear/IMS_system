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
            <li>Delete Attendance</li>
        </ul>
        <?php
            require "amSideNavV.php";
        ?>

        <div class="formStyle">
        <form action="amDeleteAttendaceSearchV.php" method="post"> 
            <input type="date" name="date" placeholder="Date" required>
            <input type="text" name="academic_year" placeholder="Academic Year" required>
            <input type="text" name="degree" placeholder="Degree" required>
            <input type="text" name="subject" placeholder="Subject" required>
            <button type="submit" name="select-submit" href="amDeleteAttendaceV.php">Select</button>
        </form>
    </div>

        <?php
            require "../footer.php";
        ?>
    </body>
</html>