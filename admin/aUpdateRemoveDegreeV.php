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
            <li>Update or remove a degree</li>
        </ul>
        <?php
            require "aSideNavV.php";
        ?>

        <div class="formStyle">
        <form action="aUpdateRemoveDegree.php" method="post"> 
            <input type="text" name="degree" placeholder="Enter degree name" required>
            <input type="text" name="description" placeholder="Degree description" required>
            <button type="submit" name="updateDegree-submit">Update degree</button>
            <button type="submit" name="removeDegree-submit">Remove degree</button>
        </form>
    </div>

        <?php
            require "../footer.php";
        ?>
    </body>
</html>