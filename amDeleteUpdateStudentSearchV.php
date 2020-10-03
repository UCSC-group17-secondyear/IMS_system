<html>
    <head>
        <title>Attendance Maintainer Page</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <?php
            require "header.php";
        ?>
        <ul class="breadcrumb">
            <li><a href="homePageV.php">Home</a></li>
            <li><a href="amHomeV.php">Attendance Maintainer Page</a></li>
            <li>Delete/Update Student's Details</li>
        </ul>
        <?php
            require "amSideNavV.php";
        ?>

        <div class="formStyle">
        <form action="amDeleteUpdateStudentSearchV.php" method="post">
            <input type="text" name="index_no" placeholder="Student Index No" required>
            <button type="submit" name="deleteupdateStudent-submit" href="amDeleteUpdateStudentV.php">Select</button>
        </form>
    </div>

        <?php
            require "footer.php";
        ?>
    </body>
</html>