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
            <li>Add a new Department</li>
        </ul>
        <?php
            require "aSideNavV.php";
        ?>

        <div class="formStyle">
        <form action="aAddDepartment.php" method="post"> 
            <input type="text" name="departmentName" placeholder="Enter department name" required>
            <input type="text" name="departmentDescriotion" placeholder="Enter its description" required>
            <button type="submit" name="addDepartment-submit">Add Department</button>
        </form>
    </div>

        <?php
            require "../footer.php";
        ?>
    </body>
</html>