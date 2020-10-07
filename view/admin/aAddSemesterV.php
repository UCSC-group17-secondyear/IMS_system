<?php
    require "../header.php";
    require "aSideNavV.php";
?>

<main>
    <link rel="stylesheet" href="../assests/css/style.css">
    
    <ul class="breadcrumb">
        <li><a href="adminV.php">Home</a></li>
        <li>Add a new Semester</li>
    </ul>

    <div class="content">
        <form action="aAddSemester.php" method="post"> 
            <input type="text" name="semester" placeholder="Enter Semester" required>
            <input type="text" name="startDate" placeholder="Enter starting date" required>
            <input type="text" name="endDate" placeholder="Enter ending date" required>
            <button type="submit" name="addSemester-submit">Add semester</button>
        </form>
    </div>
</main>

<?php
    require "../footer.php";
?>