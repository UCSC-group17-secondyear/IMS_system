<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Medical Scheme Maintainer Home Page</title>
    <link rel="stylesheet" href="../css/main.css">
</head>

<body>
    <div class="container">
        <div class="header">
            <!-- <div class="nameLogo"> -->
            <img src="../img/ims.jpg" alt="ims" class="logo">
            <!-- </div> -->
            <div class="options">
                <a href="msmHomeV.php">Home</a>
                <a href="msmProfileV.php">Profile</a>
                <a href="#">Logout</a>
            </div>
        </div>

        <div class="header">breadcrums</div>

        <?php
            require_once('msmSideNavV.php');
        ?>

        <div class="content">
            <div>
                <h3>Form</h3>
            </div>
            <!-- database eken form eka pennanna -->
            <!-- pdf eka generate krnna ona -->
            <a href="msmViewFormListV.php"><button type="submit" name="medicalSchemeForm-submit">OK</button></a>
        </div>

        <div class="footer">
            <?php
                require_once('../include/footer.php');
            ?>
        </div>
    </div>
</body>

</html>