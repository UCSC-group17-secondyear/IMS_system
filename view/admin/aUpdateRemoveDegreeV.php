<?php
    require "../header.php";
    require "aSideNavV.php";
?>

<main>
    <link rel="stylesheet" href="../assests/css/style.css">
    
    <ul class="breadcrumb">
        <li><a href="adminV.php">Home</a></li>
        <li>Update or remove a degree</li>
    </ul>

    <div class="content">
        <form action="aUpdateRemoveDegree.php" method="post"> 
            <input type="text" name="degree" placeholder="Enter degree name" required>
            <input type="text" name="description" placeholder="Degree description" required>
            <button type="submit" name="updateDegree-submit">Update degree</button>
            <button type="submit" name="removeDegree-submit">Remove degree</button>
        </form>
    </div>
</main>

<?php
    require "../footer.php";
?>