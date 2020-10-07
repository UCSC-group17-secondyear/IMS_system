<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mahapola Scheme Maintainer Home Page</title>
    <link rel="stylesheet" href="../css/main.css"></link>
</head>
<body>
      <div class="container">
        <div class="header breadcrumb">
              <!-- <div class="nameLogo"> -->
            <img src="../img/ims.jpg" alt="ims" class="logo">
            <!-- </div> -->
            <div class="options">
                <a href="mmHomeV.php">Home</a>
                <a href="mmProfileV.php">Profile</a>
                <a href="#">Logout</a>
            </div>
        </div>
        <div class="header">breadcrums</div>
        
        <?php
          require_once('mmSideNavV.php');
        ?>
        <div class="banner">
            <div>
                  <h2>Mahapola Scheme Maintainer</h2>
            </div>
        </div>
        <div class="content">Content</div>
        <div class="footer">
            <?php
              require_once('../include/footer.php');
            ?>
        </div>
      </div>

      


</body>
</html>

      