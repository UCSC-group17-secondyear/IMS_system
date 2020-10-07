<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Profile Successful</title>
    <link rel="stylesheet" href="../css/main.css">
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
            <li><a href="memProfileV.php">Profile</a></li>
            <li>Update Success</li>
        </ul>
        
        <?php
          require_once('memSideNavV.php');
        ?>
        
        <div class="banner">
            <div>
                <h2>Member Scheme Member</h2>
            </div>
            
        </div>
        <div class="content">
            <p>Your profile has been updated successfully..</p>

            <a href="memProfileV.php"><button type="submit">OK</button></a>
        </div>
        <div class="footer">
            <?php
                require_once('../include/footer.php');
            ?>
        </div>
    </div>
</body>
</html>