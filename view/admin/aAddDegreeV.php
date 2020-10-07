<?php
    require "../header.php";
    require "aSideNavV.php";
?>

<main>
    <link rel="stylesheet" href="../assests/css/style.css">
    <ul class="breadcrumb">
        <li><a href="adminV.php">Home</a></li>
        <li>Add a new degree</li>
    </ul>

    <div class="content">
        <div>
            <h3>Add a new degree</h3>
        </div>

        <form action="aAddDegree.php" method="post"> 
            <input type="text" name="degree" placeholder="Enter degree name" required>
            <input type="text" name="description" placeholder="Enter its description" required>
            <button type="submit" name="addDegree-submit">Add degree</button>
        </form>
    </div>
</main>

<?php
    require "../footer.php";
?>