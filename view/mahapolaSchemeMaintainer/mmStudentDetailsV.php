<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Details</title>
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
        
        <!-- breadcrums -->
        <ul class="breadcrumb">
            <li><a href="mmHomeV.php">Home</a></li>
            <!-- <li><a href="mmMarkMahapolaSelectedStudentsV.php">Mark Mahapola Selected Students</a></li> -->
            <li>Student Details</li>
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
                    <h4>Student Details</h4>
                </div>

                <form action="" method="POST">

                    <label for="stuName">Student Name</label>
                    <input type="text" value=""><br>

                    <label for="stuIndex">Student Index Number</label>
                    <input type="text" value=""><br>

                    <label for="degree">Degree</label>
                    <input type="text" value=""><br>

                    <h4>Selected to the Mahapola Scheme</h4>
                    <input type="radio" id="yes" name="yesno" value="yes">
                    <label for="yes">Yes</label>
                    <input type="radio" id="no" name="yesno" value="no">
                    <label for="no">No</label><br>

                    <h4>Mahapola Scheme Type</h4>
                    <input type="radio" id="m" name="mo" value="m">
                    <label for="m">M</label>
                    <input type="radio" id="o" name="mo" value="o">
                    <label for="o">O</label><br>
                    
                
                </form>
                <br>

                <a href="mmStudentDetailsSaveV.php" ><button type="submit" name="" >Save</button></a><br>
        </div>
        <div class="footer">
            <?php
              require_once('../include/footer.php');
            ?>
        </div>
    </div>
</body>
</html>