<?php
    require '../basic/topnav.php';
?>

<main>
    <title>Reports</title>
        <div class="sansserif">
                
                    <ul class="breadcrumbs">
                        <li><a href="mmHomeV.php">Home</a></li>
                        <li>View Mahapola Scheme Reports</li>
                    </ul>
                
            <div class="row">
                <div class="col left20">
                    <?php 
                        require('mmSideNavV.php');
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
                                    <label for="">Report Type</label>
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
                                    <label for="">Select Year & Month</label>
                                </div>
                                <div class="col-75">
                                    <input type="month" id="yearmonth" name="yearmonth">
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-25">
                                    <label for="">Enter batch no</label>
                                </div>
                                <div class="col-75">
                                    <input type="text" id="batchno" name="batchno">
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-25">
                                    <label for="">Select Degree</label>
                                </div>
                                <div class="col-75">
                                    <select name="degree" id="">
                                        <option value="">Select Degree</option>
                                        <option value="CS">CS</option>
                                        <option value="IS">IS</option>
                                    </select>
                                </div>
                            </div>

                            <button class="mainbtn" type="view-submit" name="" >Display Report</button></a><br>
                        </form>
                    </div>
                </div>
        </div>
</main>

<?php
    require_once('../basic/footer.php');
?>