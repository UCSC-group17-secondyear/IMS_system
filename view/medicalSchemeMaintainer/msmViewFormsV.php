<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>view Forms</title>
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
                <h3>View Forms of Medical Scheme</h3>
            </div>

            <a href="msmViewFormListV.php"><button type="submit" name="membership-submit">Membership Form</button></a>
            <br>
            <a href="msmViewFormListV.php"><button type="submit" name="refferedClaim-submit">Reffered Claim
                    Form</button></a> <br>
            <a href="msmViewFormListV.php"><button type="submit" name="requestedClaim-submit">Requested Claim
                    Form</button></a> <br>
        </div>

        <div class="footer">
            <?php
                require_once('../include/footer.php');
            ?>
        </div>
    </div>
</body>
</html>