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
            <li>Add a new scheme</li>
        </ul>
        <?php
            require "aSideNavV.php";
        ?>

        <div class="formStyle">
        <form action="aAddNewScheme.php" method="post"> 
            <input type="text" name="scheme" placeholder="Enter Scheme Number" required>
            <input type="text" name="description" placeholder="Enter its description" required>
            <button type="submit" name="addScheme-submit">Add new scheme</button>
        </form>
    </div>

        <?php
            require "../footer.php";
        ?>
    </body>
</html>