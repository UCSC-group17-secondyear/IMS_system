<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Reports in Mahapola Scheme</title>
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
                    <h2>View Reports in Mahapola Scheme</h2>
                </div>

                <select name="reporttype" id="">
                    <option value="">Select Report Type</option>
                    <option value="monthlyEligibiltyList">Monthly Eligibility List</option>
                    <option value="monthlyInEligibiltyList">Monthly In-Eligibility List</option>
                    <option value="monthlyReconciliationReport">Monthly Reconciliation Report</option>
                </select>
                <br>
                <br>

                <label for="yearmonth">Select Year & Month</label>
                <input type="month" id="yearmonth" name="yearmonth"><br><br>

                <label for="batchno">Enter batch no</label>
                <input type="text" id="batchno" name="batchno"><br><br>

                <label for="degree">Select Degree</label>
                <select name="degree" id="">
                    <option value="">Select Degree</option>
                    <option value="CS">CS</option>
                    <option value="IS">IS</option>
                </select>
                <br>
                <br>

                <a href="mmDisplayReportV.php" ><button type="submit" name="" >Display Report</button></a><br>
        </div>
        <div class="footer">Footer</div>
    </div>
</body>
</html>