<?php
    require "../header.php";
    require "aSideNavV.php";
?>

<main>
    <link rel="stylesheet" href="../assests/css/style.css">
    
    <div class="container">
        <ul class="breadcrumb">
            <li><a href="adminV.php">Home</a></li>
            <li>Add a new scheme</li>
        </ul>

        <div class="content">
            <form action="aAddNewScheme.php" method="post"> 
                <input type="text" name="scheme" placeholder="Enter Scheme Number" required>
                <input type="text" name="description" placeholder="Enter its description" required>
                <button type="submit" name="addScheme-submit">Add new scheme</button>
            </form>
        </div>
    </div>
</main>

<?php
    require "../footer.php";
?>