<?php
    require "../header.php";
    require "aSideNavV.php";
?>
<main>
    <link rel="stylesheet" href="../assests/css/style.css">
    <div class="container">
        <ul class="breadcrumb">
            <li><a href="adminV.php">Home</a></li>
            <li>Add a new Department</li>
        </ul>

        <div class="content">
            <div>
                <h3>Add a new Department</h3>
            </div>

            <form action="aAddDepartment.php" method="post">
                <input type="text" name="departmentName" placeholder="Enter department name" required>
                <input type="text" name="departmentDescriotion" placeholder="Enter its description" required>
                <button type="submit" name="addDepartment-submit">Add Department</button>
            </form>
        </div>
    </div>
</main>

<?php
    require "../footer.php";
?>