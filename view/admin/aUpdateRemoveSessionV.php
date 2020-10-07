<?php
    require "../header.php";
    require "aSideNavV.php";
?>
<main>
    <link rel="stylesheet" href="../assests/css/style.css">

    <ul class="breadcrumb">
        <li><a href="adminV.php">Home</a></li>
        <li>Update or remove a Session</li>
    </ul>

    <div class="content">
        <form action="aUpdateRemoveSession.php" method="post"> 
            <input type="text" name="sessionType" placeholder="Enter session type" required>
            <input type="text" name="subject" placeholder="Subject" required>
            <input type="text" name="month" placeholder="Month" required>
            <input type="text" name="numOfSessions" placeholder="Number of sessions per semester" required>
            <button type="submit" name="updateSession-submit">Update session type</button>
            <button type="submit" name="removeSession-submit">Remove session type</button>
        </form>
    </div>
</main>

<?php
    require "../footer.php";
?>