<?php
    require "../header.php";
    require "aSideNavV.php";
?>

<main>
    <link rel="stylesheet" href="../assests/css/style.css">
    
    <div class="container">
        <ul class="breadcrumb">
            <li><a href="adminV.php">Home</a></li>
            <li>Remove a User role</li>
        </ul>
        
        <div class="content">
            <div>
                <h3>Remove a User role</h3>
            </div>
            
            <form action="aRemoveUserRole.php" method="post">   
                <input type="text" name="userRole" placeholder="Enter User role" required>
                <button type="submit" name="remove-submit">Remove user role</button>
            </form>
        </div>
    </div>
</main>

<?php
    require "../footer.php";
?>