<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mahapola Nominated List</title>
    <link rel="stylesheet" href="../css/main.css">
</head>

<body>
    <div class="container">

        <div class="header">
            <!-- <div class="nameLogo"> -->
            <img src="../img/ims.jpg" alt="ims" class="logo">
            <!-- </div> -->
            <div class="options">
                <a href="rvHomeV.php">Home</a>
                <a href="rvProfileV.php">Profile</a>
                <a href="#">Logout</a>
            </div>
        </div>

        <div class="header">breadcrums</div>

        <?php
            require_once('rvSideNavV.php');
        ?>

        <div class="content">
            <div>
                <h4>Student List</h4>
            </div>
            <!-- pdf ekak generate kranna -->
            <a href="rvViewMahapolaNominatedListV.php"><button type="submit" name="">Back</button></a><br>
        </div>

        <div class="footer">
            <?php
                require_once('../include/footer.php');
            ?>
        </div>
    </div>
</body>

</html>