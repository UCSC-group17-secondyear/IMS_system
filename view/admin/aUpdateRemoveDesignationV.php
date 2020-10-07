<?php
    require "../header.php";
    require "aSideNavV.php";
?>

<main>
    <link rel="stylesheet" href="../assests/css/style.css">

    <ul class="breadcrumb">
        <li><a href="adminV.php">Home</a></li>
        <li>Update or remove a Designation</li>
    </ul>

    <div class="content">
        <div>
            <h3>
                Update or remove a Designation
            </h3>
        </div>
        
        <form action="aUpdateRemoveDesignation.php" method="post"> 
            <input type="text" name="designation" placeholder="Enter designation" required>
            <input type="text" name="designationDescriotion" placeholder="Designation description" required>
            <button type="submit" name="updateDesignation-submit">Save Updates</button>
            <button type="submit" name="removeDesignation-submit">Remove Designation</button>
        </form>
    </div>
</main>

<?php
    require "../footer.php";
?>