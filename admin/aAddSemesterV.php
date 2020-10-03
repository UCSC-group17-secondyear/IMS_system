<html>
    <head>
        <title>Admin Page</title>
        <link rel="stylesheet" href="../assests/css/style.css">
    </head>
    <body>
        <?php
            require "../header.phpphp";
        ?>
        <ul class="breadcrumb">
            <li><a href="homePageV.php">Home</a></li>
            <li><a href="adminV.php">Admin Page</a></li>
            <li>Add a new Semester</li>
        </ul>
        <?php
            require "aSideNavV.php";
        ?>

        <div class="formStyle">
        <form action="aAddSemester.php" method="post"> 
            <input type="text" name="semester" placeholder="Enter Semester" required>
            <input type="text" name="startDate" placeholder="Enter starting date" required>
            <input type="text" name="endDate" placeholder="Enter ending date" required>
            <button type="submit" name="addSemester-submit">Add semester</button>
        </form>
    </div>

        <?php
            require "../footer.php";
        ?>
    </body>
</html>