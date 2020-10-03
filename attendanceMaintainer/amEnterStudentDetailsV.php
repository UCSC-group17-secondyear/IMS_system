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
            <li>Enter Student's Details</li>
        </ul>
        <?php
            require "amSideNavV.php";
        ?>

        <div class="formStyle">
        <form action="amEnterStudentDetailsV.php" method="post">
            <input type="text" name="student_name" placeholder="Student Name" required>
            <input type="text" name="index_no" placeholder="Student Index No" required>
            <input type="text" name="registrstion_no" placeholder="Student Registration No" required>
            <input type="date" name="dob" placeholder="Date of Birth" required>
            <input type="text" name="textarea" placeholder="Address" required>
            <input type="number" name="telephone_number" placeholder="Telephone Number" required>
            <input type="text" name="academic_year" placeholder="Academic Year" required>
            <input type="text" name="degree" placeholder="Degree" required>
            <button type="submit" name="enterStudent-submit">Enter Student</button>
        </form>
    </div>

        <?php
            require "../footer.php";
        ?>
    </body>
</html>