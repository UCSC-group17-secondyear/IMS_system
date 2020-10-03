<html>
    <head>
        <title>Admin Page</title>
        <link rel="stylesheet" href="../assests/css/style.css">
    </head>
    <body>
        <?php
            require "../header.php";
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
            <input type="text" name="startDate" placeholder="Starting date" required>
            <input type="text" name="endDate" placeholder="Ending date" required>
            <button type="submit" name="updateSemester-submit">Save Updates</button>
            <button type="submit" name="removeSemester-submit">Remove semester</button>
        </form>
    </div>

        <?php
            require "../footer.php";
        ?>
    </body>
</html>