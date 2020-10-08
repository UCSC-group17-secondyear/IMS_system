<?php
    require "../header.php";
    require "aSideNavV.php";
?>

<main>
    <link rel="stylesheet" href="../assests/css/style.css">
    
    <div class="container">
        <ul class="breadcrumb">
            <li><a href="adminV.php">Home</a></li>
            <li>Add a new User role</li>
        </ul>

        <div class="content">
            <div>
                <h3>Add a new User role</h3>
            </div>
            
            <form action="aAddNewUserRole.php" method="post">   
                <input type="text" name="userRole" placeholder="Enter User role" required>
                <input type="text" name="description" placeholder="Enter its description" required>
                <button type="submit" name="userRole-submit">Add user role</button>
            </form>
        </div>
    </div>
</main>

<?php
    require "../footer.php";
?>