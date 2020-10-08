<?php
    require_once('../header.php');
    require_once('asmSideNavV.php');
?>

<main>
    <link rel="stylesheet" href="../assests/css/main.css">

    <div class="container">

        <!-- <div class="header">
            <img src="../img/ims.jpg" alt="ims" class="logo">
            <div class="options">
                <a href="rvHomeV.php">Home</a>
                <a href="rvProfileV.php">Profile</a>
                <a href="#">Logout</a>
            </div>
        </div> -->

        <div class="header">breadcrums</div>

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
            <a href="mmDisplayReportV.php"><button type="submit" name="">Display Report</button></a><br>
        </div>

    </div>
</main>

<?php
    require_once('../include/footer.php');
?>