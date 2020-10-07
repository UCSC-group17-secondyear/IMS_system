<?php
    require "../header.php";
    require "aSideNavV.php";
?>

<main>
    <link rel="stylesheet" href="../assests/css/style.css">
    <ul class="breadcrumb">
        <li><a href="adminV.php">Home</a></li>
        <li>Update Policies of a scheme</li>
    </ul>
    
    <div class="content">
        <form action="aRemoveScheme.php" method="post"> 
            <input type="text" name="scheme" placeholder="Enter Scheme Number" required>
            <button type="submit" name="removeScheme-submit">Remove</button>
        </form>
    </div>
</main>

<?php
    require "../footer.php";
?>