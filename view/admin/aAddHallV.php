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
            <li>Add a new Hall</li>
        </ul>
        <?php
            require "aSideNavV.php";
        ?>

        <div class="formStyle">
        <form action="aAddHall.php" method="post"> 
            <input type="text" name="hallName" placeholder="Enter hall name" required>
            <input type="text" name="hallLocation" placeholder="Enter hall location" required>
            <input type="text" name="seatingCapacity" placeholder="Enter seating capacity" required>
            <input type="text" name="acAvailability" placeholder="Enter AC availability" required>
            <button type="submit" name="addHall-submit">Add hall</button>
        </form>
    </div>

        <?php
            require "../footer.php";
        ?>
    </body>
</html>