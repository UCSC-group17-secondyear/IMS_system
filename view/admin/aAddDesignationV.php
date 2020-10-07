<?php
    require "../header.php";
    require "aSideNavV.php";
?>

<main>
    <link rel="stylesheet" href="../assests/css/style.css">

    <ul class="breadcrumb">
        <li><a href="adminV.php">Home</a></li>
        <li>Add a new Designation</li>
    </ul>

    <div class="content">
        <form action="aAddDesignation.php" method="post"> 
            <input type="text" name="designation" placeholder="Enter designation" required>
            <input type="text" name="designationDescriotion" placeholder="Enter its description" required>
            <button type="submit" name="addDesignation-submit">Add Designation</button>
        </form>
    </div>
</main>

<?php
    require "../footer.php";
?>