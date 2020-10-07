<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Successfully</title>
    <link rel="stylesheet" href="../css/main.css"></link>

</head>
<body>
    

</body>
</html>

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
            <li><a href="mmRegisterToMedicalSchemeV.php">Register to Medical Schmeme</a></li>
            <li>Registered Successfully</li>
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
            <p>
                Your membership form has been sent for the approval. You will be inform about the membership later.
            </p> <br>
            <p>Thank you..</p>

            <a href="mmHomeV.php"><button type="submit" name="registerSuccess-submit">OK</button></a><br>
        </div>
        <div class="footer">
            <?php
              require_once('../include/footer.php');
            ?>
        </div>
    </div>
</body>
</html>