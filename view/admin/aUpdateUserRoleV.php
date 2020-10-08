<?php
    require "../header.php";
    require "aSideNavV.php";
?>

<main>
    <link rel="stylesheet" href="../assests/css/style.css">
    
    <div class="container">
        <ul class="breadcrumb">
            <li><a href="adminV.php">Home</a></li>
            <li>Update User role</li>
        </ul>

        <div class="content">
            <div>
                <h3>Update User role</h3>
            </div>
            
            <form action="aUpdateUserRole.php" method="post">   
                <input type="text" name="empid" placeholder="Enter Employee Id" required>
                <input type="text" name="userRole" placeholder="Enter User Role" required>
                <button type="submit" name="userRole-submit">Save Updates</button>
            </form>
        </div>
    </div>
</main>

<?php
    require "../footer.php";
?>