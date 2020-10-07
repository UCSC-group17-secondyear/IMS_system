<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Claim Details</title>
    <link rel="stylesheet" href="../css/main.css"></link>
</head>

<body>
    <div class="container">
        <div class="header">
            <!-- <div class="nameLogo"> -->
            <img src="../img/ims.jpg" alt="ims" class="logo">
            <!-- </div> -->
            <div class="options">
                <a href="memHomeV.php">Home</a>
                <a href="memProfileV.php">Profile</a>
                <a href="#">Logout</a>
            </div>
        </div>
        <div class="header">breadcrums</div>
        
        <?php
          require_once('memSideNavV.php');
        ?>

        <div class="banner">
            <div>
                  <h2>Medical Scheme Member</h2>
            </div>
        </div>
        <div class="content">
            <div>
                <h4>Claim Details</h4>
            </div>

            <!-- pdf ekak widiyat generate kranna one claim details -->

            <a href="memClaimFormListV.php" ><button type="submit" name="" >OK</button></a><br>

        </div>
        <div class="footer">
            <?php
                require_once('../include/footer.php');
            ?>
        </div>
    </div>
</body>
</html>