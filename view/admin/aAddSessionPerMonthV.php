<html>
    <head>
        <title>Admin Page</title>
        <link rel="stylesheet" href="../assests/css/style.css">
    </head>
    <body>
        <?php
            require "../header.php";
        ?>
        <ul class="breadcrumb">
            <li><a href="homePageV.php">Home</a></li>
            <li><a href="adminV.php">Admin Page</a></li>
            <li>Add a new Session</li>
        </ul>
        <?php
            require "aSideNavV.php";
        ?>

        <div class="formStyle">
        <form action="aAddSessionPerMonth.php" method="post"> 
            <input type="text" name="month" placeholder="Enter month" required>
            <input type="text" name="subject" placeholder="Enter subject" required>
            <input type="text" name="sessionType" placeholder="Enter session type" required>
            <input type="text" name="numOfSessions" placeholder="Enter number of sessions per month" required>
            <button type="submit" name="addSession-submit">Add session</button>
        </form>
    </div>

        <?php
            require "../footer.php";
        ?>
    </body>
</html>