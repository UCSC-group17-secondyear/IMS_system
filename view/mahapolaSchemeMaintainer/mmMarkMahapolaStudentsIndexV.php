<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mark Mahapola Selected Students By Index</title>
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
            <li>Mark Mahapola Selected Students By Index</li>
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
                <h4>Mark Mahapola Selected Students</h4>
            </div>

            <form action="" method="POST">

                <!-- <input type="radio" id="studentindex" name="student" value="studentindex"> -->
                <label for="studentindex">Search by Student Index</label><br>
                <input type="text" id="studentIndex"><br>
            
            </form>
            <br>
            <a href="mmStudentDetailsV.php" ><button type="submit" name="" >Display Student's Details</button></a><br>
            <!-- mekedi js function eka check krla tamai display kranna one -->
            </div>
        <div class="footer">
        <?php
              require_once('../include/footer.php');
            ?>
        </div>
    </div>
</body>
</html>