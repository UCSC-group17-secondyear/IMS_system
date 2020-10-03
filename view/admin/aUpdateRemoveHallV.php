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
            <li>Update or remove a Hall</li>
        </ul>
        <?php
            require "aSideNavV.php";
        ?>

        <div class="formStyle">
        <form action="aUpdateRemoveHall.php" method="post"> 
            <input type="text" name="hallName" placeholder="Enter hall name" required>
            <input type="text" name="hallLocation" placeholder="Hall location" required>
            <input type="text" name="seatingCapacity" placeholder="Seating capacity" required>
            <input type="text" name="acAvailability" placeholder="AC availability" required>
            <button type="submit" name="updateHall-submit">Save Updates</button>
            <button type="submit" name="removeHall-submit">Remove Hall</button>
        </form>
    </div>

        <?php
            require "../footer.php";
        ?>
    </body>
</html>