<?php
    require '../basic/topnav.php';
?>

<main>
    <title>View Reports in Mahapola Scheme</title>

    <div class="sansserif">
        <ul class="breadcrumbs">
            <li><a href="rvHomeV.php">Home</a></li>
            <li>View Reports in Mahapola Scheme</li>
        </ul>

        <div class="row">
            <div class="col left20">
                <?php
                    require 'rvSideNavV.php';
                ?>
            </div>

            <div class="col right80">
                <div>
                    <h2>View Reports in Mahapola Scheme</h2>
                </div>

                <div class="contentForm">
                    <form action="" method="POST">
                        <div class="row">
                            <div class="col-25">
                              <label>Enter Report Type</label>
                            </div>
                            <div class="col-75">
                                <select name="reporttype" id="">
                                    <option value="">Select Report Type</option>
                                    <option value="monthlyEligibiltyList">Monthly Eligibility List</option>
                                    <option value="monthlyInEligibiltyList">Monthly In-Eligibility List</option>
                                    <option value="monthlyReconciliationReport">Monthly Reconciliation Report</option>
                                </select>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-25">
                              <label>Enter Year & Month</label>
                            </div>
                            <div class="col-75">
                                <input type="month" id="yearmonth" name="yearmonth"><br>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-25">
                              <label>Enter batch no</label>
                            </div>
                            <div class="col-75">
                                <input type="text" id="batchno" name="batchno"><br>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-25">
                              <label>Enter Degree</label>
                            </div>
                            <div class="col-75">
                                <select name="degree" id="">
                                    <option value="">Select Degree</option>
                                    <option value="CS">CS</option>
                                    <option value="IS">IS</option>
                                </select>
                            </div>
                        </div>
                    </form>
                    <form action="" method="post">
                        <a href="mmDisplayReportV.php"><button class="subbtn" type="submit" name="updateDegree-submit">Display Report</button></a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</main>

<?php
    require '../basic/footer.php';
?>