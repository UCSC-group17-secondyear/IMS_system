<?php
    require "../header.php";
    require "aSideNavV.php";
?>
<main>
    <link rel="stylesheet" href="../assests/css/style.css">
    
    <div class="container">
        <ul class="breadcrumb">
            <li><a href="adminV.php">Home</a></li>
            <li>Update or remove a Department</li>
        </ul>

        <div class="content">
            <div>
                <h3>Update or remove a Department</h3>
            </div>
            
            <form action="aUpdateRemoveDepartment.php" method="post"> 
                <input type="text" name="departmentName" placeholder="Enter department name" required>
                <input type="text" name="departmentDescriotion" placeholder="Description" required>
                <button type="submit" name="updateDepartment-submit">Save Updates</button>
                <button type="submit" name="removeDepartment-submit">Remove Department</button>
            </form>
        </div>
    </div>
</main>

<?php
    require "../footer.php";
?>