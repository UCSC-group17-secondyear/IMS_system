<?php
    require "../header.php";
    require "aSideNavV.php";
?>

<main>
    <link rel="stylesheet" href="../assests/css/style.css">

    <div class="container">
        <ul class="breadcrumb">
            <li><a href="adminV.php">Home</a></li>
            <li>Add a new Session</li>
        </ul>

        <div class="content">
            <div>
                <h3>Add a new Session</h3>
            </div>
            
            <form action="aAddSessionPerMonth.php" method="post"> 
                <input type="text" name="month" placeholder="Enter month" required>
                <input type="text" name="subject" placeholder="Enter subject" required>
                <input type="text" name="sessionType" placeholder="Enter session type" required>
                <input type="text" name="numOfSessions" placeholder="Enter number of sessions per month" required>
                <button type="submit" name="addSession-submit">Add session</button>
            </form>
        </div>
    </div>
</main>

<?php
    require "../footer.php";
?>