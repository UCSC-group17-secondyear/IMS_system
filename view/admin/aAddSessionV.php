<?php
    require "../header.php";
    require "aSideNavV.php";
?>

<main>
    <link rel="stylesheet" href="../assests/css/style.css">

    <ul class="breadcrumb">
        <li><a href="adminV.php">Home</a></li>
        <li>Add a new Session</li>
    </ul>

    <div class="content">
        <form action="aAddSession.php" method="post">
            <input type="text" name="sessionType" placeholder="Enter session type" required>
            <input type="text" name="subject" placeholder="Enter subject" required>
            <input type="text" name="numOfSessions" placeholder="Enter number of sessions per smester" required>
            <button type="submit" name="addSession-submit">Add session type</button>
        </form>
    </div>
</main>

<?php
    require "../footer.php";
?>