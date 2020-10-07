<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Claim Form</title>
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
            <li><a href="memUpdateClaimFormsV.php">Select Form</a></li>
            <li>Form</li>
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
                <h4>Form</h4>
            </div>
        <form action="" method="POST">
            <label for="name">Name</label>
            <input type="text" value=""> <br>
            <label for="empNo">Employee Number</label>
            <input type="text" value=""> <br>
            
            <!-- auto fill wenna one database eken -->
            <label for="bill">Scanned copy of bill</label><br><br>

        </form>

        <a href="memFormUpdateSuccessV.php" ><button type="submit" name="" >Submit</button></a><br>

        </div>
        <div class="footer">
            <?php
                require_once('../include/footer.php');
            ?>
        </div>
    </div>
</body>
</html>