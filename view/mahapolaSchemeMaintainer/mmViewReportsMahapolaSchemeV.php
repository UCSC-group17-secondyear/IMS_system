<main>
        <title>Reports</title>

<?php
    require('../basic/header.php');
    
?>

        
            <div class="header">Breadcrumbs
                <!-- <ul class="breadcrumb">
                    <li><a href="mmHomeV.php">Home</a></li>
                    <li>View Mahapola Scheme Reports</li>
                </ul> -->
            </div>

            <div class="side-nav">
                <?php 
                    require('../mahapolaSchemeMaintainer/mmSideNavV.php');
                ?>
            </div>

            <div class="content">
                <div>
                    <h4>View Reports in Mahapola Scheme</h4>
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
        

            <div class="right-side-bar">
                <a href="../../controller/viewProfileController.php?user_id=<?php echo $_SESSION['userId'] ?>"><button type="submit" name="" class="button">Profile</button></a>
            </div>
            
            <?php
                require_once('../basic/footer.php');
            ?>
      

</main>











