<?php
    require '../basic/topnav.php';
?>

<main>
    <title>Reports</title>
        <div class="sansserif">    
            <ul class="breadcrumbs">
                <li><a href="mmHomeV.php">Home</a></li>
                <li class="active">Mahapola Scheme Reports</li>
            </ul>
                
            <div class="row" style="margin-bottom: 4%;">
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
                        <form action="../../controller/mmControllers/mahapolaListController.php"  name="form1" method="POST">
                            <div class="row">
                                <div class="col-25">
                                    <label for="">Report Type</label>
                                </div>
                                <div class="col-75">
                                    <select name="report_type" id="reporttype" required>
                                        <option value="">Select Report Type</option>
                                        <option value="monthlyEligibiltyList">Monthly Eligibility List</option>
                                        <option value="monthlyInEligibiltyList">Monthly In-Eligibility List</option>
                                        <option value="monthlyReconciliationReport">Monthly Reconciliation Report</option>
                                    </select>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-25">
                                    <label for="">Year & Month</label>
                                </div>
                                <div class="col-75" style="width: 30%;" >
                                    <input type="text" name="year" value=""  maxlength="4" id="myear" placeholder="Enter year..." oninput="checkInp(); maxlen()" required>
                                </div>
                                <div class="col-75" style="width: 30%;">
                                    <select name="month" value='' required>Select Month</option>
                                        <option value='01'>January</option>
                                        <option value='02'>February</option>
                                        <option value='03'>March</option>
                                        <option value='04'>April</option>
                                        <option value='05'>May</option>
                                        <option value='06'>June</option>
                                        <option value='07'>July</option>
                                        <option value='08'>August</option>
                                        <option value='09'>September</option>
                                        <option value='10'>October</option>
                                        <option value='11'>November</option>
                                        <option value='12'>December</option>
                                    </select>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-25">
                                    <label for="">Batch no</label>
                                </div>
                                <div class="col-75">
                                    <select name="batch_no" id="batch_no" required>
                                        <option value="">Select Batch</option>
                                        <?php echo $_SESSION['batch_number'] ?>
                                    </select>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-25">
                                    <label for="">Degree</label>
                                </div>
                                <div class="col-75">
                                    <select name="degree" id="degree" required>
                                        <option value="">Select Degree</option>
                                        <?php echo $_SESSION['degree'] ?>
                                    </select>
                                </div>
                            </div>
                            <button class="subbtn" type="submit" name="display-report" >Display Report</button>
                            <button class="cancelbtn" type="submit" name="" ><a href="mmHomeV.php">Exit</a></button>
                        </form>    
                    </div>
                </div>
        </div>

        <script>
            function checkInp(){
                var x=document.getElementById("myear").value;
                if (isNaN(x)) 
                {
                    alert("Must input numbers for year");
                    return false;
                }
            }

            function maxlen(){
                var x=document.getElementById("myear").value;
                if (x.length > this.maxlength) {
                    x.value = this.value.slice(0, this.maxlength);
                }
            }
        </script>
</main>

<?php
    require_once('../basic/footer.php');
?>