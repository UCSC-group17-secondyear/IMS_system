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
                <a href="#">Logout</a>
            </div>
        </div>
        <div class="header">breadcrums</div>
        <div class="side-nav">
            <div>
                  <h2>Mahapola Scheme Maintainer</h2>
            </div>
            
                  <a href="mmMarkMahapolaSelectedStudentsV.php" ><button type="submit" name="" class="button">Mark Mahapola Selected Students</button></a><br>
                  <a href="mmViewMahapolaNominatedListV.php" ><button type="submit" name="" class="button">View Mahapola Nominated Student List</button></a><br>
                  <a href="mmViewReportsMahapolaSchemeV.php" ><button type="submit" name="" class="button">View Reports in Mahapola Scheme</button></a><br>
                  <a href="#" ><button type="submit" name="" class="button">View Attendance Student Records</button></a><br>
                  <!-- attendance maintainerge ui flow eke aran demu -->
                  <a href="mmViewSchemeDetailsV.php" ><button type="submit" name="" class="button">View Scheme Details</button></a><br>
                  <a href="mmRegisterToMedicalSchemeV.php" ><button type="submit" name="" class="button">Register to Staff Medical Scheme</button></a><br>
        </div>
        <!-- <div class="banner">Banner</div> -->
        <div class="content">
                <div>
                    <h2>Student Details</h2>
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
        <div class="footer">Footer</div>
    </div>
</body>
</html>