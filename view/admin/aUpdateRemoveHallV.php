<?php
    require "../header.php";
    require "aSideNavV.php";
?>
<main>
    <link rel="stylesheet" href="../assests/css/style.css">
    
    <ul class="breadcrumb">
        <li><a href="adminV.php">Home</a></li>
        <li>Update or remove a Hall</li>
    </ul>
    
    <div class="content">
        <div>
            <h3>Update or remove a Hall</h3>
        </div>
        
        <form action="aUpdateRemoveHall.php" method="post"> 
            <input type="text" name="hallName" placeholder="Enter hall name" required>
            <input type="text" name="hallLocation" placeholder="Hall location" required>
            <input type="text" name="seatingCapacity" placeholder="Seating capacity" required>
            <input type="text" name="acAvailability" placeholder="AC availability" required>
            <button type="submit" name="updateHall-submit">Save Updates</button>
            <button type="submit" name="removeHall-submit">Remove Hall</button>
        </form>
    </div>
</main>

<?php
    require "../footer.php";
?>