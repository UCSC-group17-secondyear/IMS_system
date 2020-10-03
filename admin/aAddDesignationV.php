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
            <li>Add a new Designation</li>
        </ul>
        <?php
            require "aSideNavV.php";
        ?>

        <div class="formStyle">
        <form action="aAddDesignation.php" method="post"> 
            <input type="text" name="designation" placeholder="Enter designation" required>
            <input type="text" name="designationDescriotion" placeholder="Enter its description" required>
            <button type="submit" name="addDesignation-submit">Add Designation</button>
        </form>
    </div>

        <?php
            require "../footer.php";
        ?>
    </body>
</html>