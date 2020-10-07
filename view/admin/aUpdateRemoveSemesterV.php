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
            <input type="text" name="startDate" placeholder="Starting date" required>
            <input type="text" name="endDate" placeholder="Ending date" required>
            <button type="submit" name="updateSemester-submit">Save Updates</button>
            <button type="submit" name="removeSemester-submit">Remove semester</button>
        </form>
    </div>
</main>

<?php
    require "../footer.php";
?>