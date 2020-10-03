<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Current Member Details</title>
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
                <h2>Current Member Details</h2>
            </div>

        <form action="" method="post">
            <label for="empName">Employee id</label>
            <input type="text" value=""> <br>
            <label for="empNumber">Initials of the Name</label>
            <input type="text" value=""> <br>
            <label for="designation">Email</label>
            <input type="text" value=""> <br>
            <!-- database eken details ganna one -->

        </form>

        <a href="memUpdateSuccessV.php"><button type="submit" name="currentMemberDetail-submit">Save Updates</button></a><br>
        </div>
        <div class="footer">Footer</div>
    </div>
</body>
</html>