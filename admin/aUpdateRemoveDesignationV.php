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
            <li>Update or remove a Designation</li>
        </ul>
        <?php
            require "aSideNavV.php";
        ?>

        <div class="formStyle">
        <form action="aUpdateRemoveDesignation.php" method="post"> 
            <input type="text" name="designation" placeholder="Enter designation" required>
            <input type="text" name="designationDescriotion" placeholder="Designation description" required>
            <button type="submit" name="updateDesignation-submit">Save Updates</button>
            <button type="submit" name="removeDesignation-submit">Remove Designation</button>
        </form>
    </div>

        <?php
            require "../footer.php";
        ?>
    </body>
</html>