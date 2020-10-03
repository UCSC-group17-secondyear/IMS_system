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
            <li>Delete/Update Subject's Details</li>
        </ul>
        <?php
            require "amSideNavV.php";
        ?>

        <div class="formStyle">
        <form action="amDeleteUpdateStudentSearchV.php" method="post">
            <input type="text" name="subject_code" placeholder="Subject Code" required>
            <button type="submit" name="deleteupdateSubject-submit" href="amDeleteUpdateSubjectV.php">Select</button>
        </form>
    </div>

        <?php
            require "../footer.php";
        ?>
    </body>
</html>