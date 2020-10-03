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
                <a href="#">Logout</a>
            </div>
        </div>
        <div class="header">breadcrums</div>
        <div class="side-nav">
            <div>
                  <h2>Medical Scheme Member</h2>
            </div>
            
                  <a href="memRenewMembershipV.php" ><button type="submit" name="" class="button">Renew Membership</button></a><br>
                  <a href="memViewSchemeDetailsV.php" ><button type="submit" name="" class="button">View Medical Scheme Details</button></a><br>
                  <a href="memFillClaimFormsV.php" ><button type="submit" name="" class="button">Fill Claim Forms</button></a><br>
                  <a href="memUpdateClaimFormsV.php" ><button type="submit" name="" class="button">Update Claim Form</button></a><br>
                  <a href="memViewClaimFormsV.php" ><button type="submit" name="" class="button">View Claim Forms</button></a><br>
                  <a href="memGetClaimDetailsV.php" ><button type="submit" name="" class="button">Get Claim Detials</button></a><br>
        </div>
        <!-- <div class="banner">Banner</div> -->
        <div class="content">
                <div>
                    <h2>Claim Form List</h2>
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
        <div class="footer">Footer</div>
    </div>
</body>
</html>