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
            <li>Update or remove a Department</li>
        </ul>
        <?php
            require "aSideNavV.php";
        ?>

        <div class="formStyle">
        <form action="aUpdateRemoveDepartment.php" method="post"> 
            <input type="text" name="departmentName" placeholder="Enter department name" required>
            <input type="text" name="departmentDescriotion" placeholder="Description" required>
            <button type="submit" name="updateDepartment-submit">Save Updates</button>
            <button type="submit" name="removeDepartment-submit">Remove Department</button>
        </form>
    </div>

        <?php
            require "../footer.php";
        ?>
    </body>
</html>