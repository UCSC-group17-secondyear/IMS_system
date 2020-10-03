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
            <li>Add a new degree</li>
        </ul>
        <?php
            require "aSideNavV.php";
        ?>

        <div class="formStyle">
        <form action="aAddDegree.php" method="post"> 
            <input type="text" name="degree" placeholder="Enter degree name" required>
            <input type="text" name="description" placeholder="Enter its description" required>
            <button type="submit" name="addDegree-submit">Add degree</button>
        </form>
    </div>

        <?php
            require "../footer.phpphp";
        ?>
    </body>
</html>