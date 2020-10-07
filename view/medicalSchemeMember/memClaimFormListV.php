<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Claim Form List</title>
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
        
        <!-- breadcrumbs -->
        <ul class="breadcrumb">
            <li><a href="memHomeV.php">Home</a></li>
            <li>Form List</li>
        </ul>
        
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
                    <h4>Claim Form List</h4>
                </div>

                <h2>OPD Forms</h2>
            <ul>
                <li><a href="memClaimDetailsFormListV.php">Form 1</a></li>
                <li><a href="#">Form 2</a></li>
                <li><a href="#">Form 3</a></li>
                <!-- pdf widiyat meke form database eken ganna one  -->
            </ul>

            <h2>Surgical Hospitalization Forms</h2>
            <ul>
                <li><a href="#">Form 1</a></li>
                <li><a href="#">Form 2</a></li>
                <li><a href="#">Form 3</a></li>
                <!-- meke form database eken ganna one  -->
            </ul>

            <!-- form eka click kalama claimDetails.php ekat yanwa -->
        </div>
        <div class="footer">
            <?php
                require_once('../include/footer.php');
            ?>
        </div>
    </div>
</body>
</html>