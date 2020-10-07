<html>
    <head>
        <title>Admin Page</title>
        
    </head>
    <body>
        <?php
            require "../header.php";
            require "aSideNavV.php";
        ?>
<main>
    <link rel="stylesheet" href="../assests/css/style.css">

    <ul class="breadcrumb">
        <li><a href="adminV.php">Home</a></li>
        <li>Add a new Hall</li>
    </ul>

    <div class="content">
        <form action="aAddHall.php" method="post"> 
            <input type="text" name="hallName" placeholder="Enter hall name" required>
            <input type="text" name="hallLocation" placeholder="Enter hall location" required>
            <input type="text" name="seatingCapacity" placeholder="Enter seating capacity" required>
            <input type="text" name="acAvailability" placeholder="Enter AC availability" required>
            <button type="submit" name="addHall-submit">Add hall</button>
        </form>
    </div>
</main>

<?php
    require "../footer.php";
?>