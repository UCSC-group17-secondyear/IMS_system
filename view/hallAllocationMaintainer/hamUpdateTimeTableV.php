<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Time Table</title>
    <link rel="stylesheet" href="../css/main.css">
</head>
<body>
    <div class="container">
        <div class="header">
            <!-- <div class="nameLogo"> -->
            <img src="../img/ims.jpg" alt="ims" class="logo">
            <!-- </div> -->
            <div class="options">
                <a href="hamHomeV.php">Home</a>
                <a href="hamProfileV.php">Profile</a>
                <a href="#">Logout</a>
            </div>
        </div>
        
        <div class="header">breadcrums</div>
        
        <?php
            require_once('hamSideNavV.php');
        ?>

        <div class="banner">
            <div>
                <h2>Hall Allocation Maintainer</h2>
            </div>
        </div>

        <div class="content">
            <div>
                <h3>Update/Remove Weekly Time Table</h3>
            </div>
            <br>

            <form action="" method="POST">
                <label for="subjectName">Subject Name:</label>
                <input type="text" value=""> <br>
                <label for="subjectCode">Subject Code:</label>
                <input type="text" value=""> <br>
                <label for="hall">Hall</label>
                <input type="text" value=""> <br>
                <label for="startTime">Start time:</label>
                <input type="time" value=""> <br>
                <label for="endTime">End Time:</label>
                <input type="time" value=""> <br>
            </form>
            <!-- meka database eken update wela enna ona -->

            <a href="hamSaveUpdateTimeTableV.php"><button type="submit" name="">Save Updates</button></a>
            <br>
            <br>
            <a href="hamRemoveTimeTableV.php"><button type="submit" name="">Remove</button></a>
        </div>

        <div class="footer">
            <?php
                require_once('../include/footer.php');
            ?>
        </div>
    </div>
</body>
</html>