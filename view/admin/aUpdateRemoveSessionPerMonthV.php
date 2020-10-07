<?php
    require "../header.php";
    require "aSideNavV.php";
?>
<main>

<link rel="stylesheet" href="../assests/css/style.css">
<ul class="breadcrumb">
    <li><a href="adminV.php">Home</a></li>
    <li>Update or remove a session</li>
</ul>

<div class="content">
    <div>
        <h3>Update or remove a session</h3>
    </div>
    
    <form action="aUpdateRemoveSessionPerMonth.php" method="post">
        <input type="text" name="sessionType" placeholder="Enter session type" required>
        <input type="text" name="subject" placeholder="Subject" required>
        <input type="text" name="month" placeholder="Month" required>
        <input type="text" name="numOfSessions" placeholder="Number of sessions per month" required>
        <button type="submit" name="updateSession-submit">Update session type</button>
        <button type="submit" name="removeSession-submit">Remove session type</button>
    </form>
</div>

<?php
    require "../footer.php";
?>