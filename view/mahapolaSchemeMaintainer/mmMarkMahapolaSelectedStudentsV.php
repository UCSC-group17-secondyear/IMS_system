<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mark Mahapola Selected Students</title>
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
        <div class="header breadcrumb">
            <!-- <ul>
                <h6>
                    <a href="mmHomeV.php">Home / </a>
                    <a href="mmMarkMahapolaSelectedStudentsV.php">Mark Mahapola Selected Students</a>
                </h6>
            </ul> -->
        </div>
        <div class="side-nav">
            
            
                  <a href="mmMarkMahapolaSelectedStudentsV.php" ><button type="submit" name="" class="button">Mark Mahapola Selected Students</button></a><br>
                  <a href="mmViewMahapolaNominatedListV.php" ><button type="submit" name="" class="button">View Mahapola Nominated Student List</button></a><br>
                  <a href="mmViewReportsMahapolaSchemeV.php" ><button type="submit" name="" class="button">View Reports in Mahapola Scheme</button></a><br>
                  <a href="#" ><button type="submit" name="" class="button">View Attendance Student Records</button></a><br>
                  <!-- attendance maintainerge ui flow eke aran demu -->
                  <a href="mmViewSchemeDetailsV.php" ><button type="submit" name="" class="button">View Scheme Details</button></a><br>
                  <a href="mmRegisterToMedicalSchemeV.php" ><button type="submit" name="" class="button">Register to Staff Medical Scheme</button></a><br>
        </div>
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

                <input type="radio" id="studentindex" name="student" value="studentindex">
                <label for="studentindex">Search by Student Index</label><br>
                <input type="text" id="studentIndex"><br>

                <input type="radio" id="studentname" name="student" value="studentname">
                <label for="studentname">Search by Student Name</label><br>
                <input type="text" id="studentName">
            
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