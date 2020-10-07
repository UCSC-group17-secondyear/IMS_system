<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Display Report</title>
    <link rel="stylesheet" href="../css/main.css"></link>
</head>

<body>
    <div class="container">
        <div class="header">
              <!-- <div class="nameLogo"> -->
              <img src="../img/ims.jpg" alt="ims" class="logo">
            <!-- </div> -->
            <div class="options">
                <a href="mmHomeV.php">Home</a>
                <a href="mmProfileV.php">Profile</a>
                <a href="#">Logout</a>
            </div>
        </div>
        
        <!-- breadcrumbs -->
        <ul class="breadcrumb">
            <li><a href="mmHomeV.php">Home</a></li>
            <li><a href="mmViewReportsMahapolaSchemeV.php">View Mahapola Scheme Reports</a></li>
            <li>View Report</li>
        </ul>
        
        <?php
          require_once('mmSideNavV.php');
        ?>
        
        <div class="banner">
            <div>
                  <h2>Mahapola Scheme Maintainer</h2>
            </div>
        </div>
        <div class="content">
            <div>
                <h4>Report</h4>
            </div>
            <!-- report eke generate kranna one -->

            <a href="mmViewReportsMahapolaSchemeV.php" ><button type="submit" name="" >OK</button></a><br>
        </div>
        <div class="footer">
            <?php
              require_once('../include/footer.php');
            ?>
        </div>
    </div>
</body>
</html>