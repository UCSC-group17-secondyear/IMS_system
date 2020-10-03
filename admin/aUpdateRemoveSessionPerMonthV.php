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
            <li>Update or remove a Session per month</li>
        </ul>
        <?php
            require "aSideNavV.php";
        ?>

        <div class="formStyle">
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
    </body>
</html>