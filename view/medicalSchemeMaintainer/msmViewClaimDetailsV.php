<?php
    require '../basic/topnav.php';
?>

<main>
    <title>View Medical Member List</title>

    <div class="sansserif">
        <ul class="breadcrumbs">
            <li><a href="msmHomeV.php">Home</a></li>
            <li class="active">View Medical Member List</li>
        </ul>

        <div class="row">
            <div class="col left20">
                <?php
                    require 'msmSideNavV.php';
                ?>
            </div>

            <div class="col right80">
                <div>
                    <h2>View Claim Details</h2>
                </div>

                <div class="contentForm">
                    <form action="../../controller/msmviewMemberListTwoC.php" method="POST">
                        <div class="row">
                            <div class="col-25">
                                <label for="year">Enter medical year</label>
                            </div>
                            <div class="col-75">
                                <input type="text" id="medicalYear">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-25">
                                <input type="radio" id="memberWise" name="wise" value="memberwise" style="margin-top: 19px;">
                            </div>
                            <div class="col-75">
                                <label for="memberwise" style="margin-left: -30px;margin-top: 10px;text-decoration;">Member-wise Claim Details</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-25">
                                <label for="empId">Enter employee ID</label>
                            </div>
                            <div class="col-75">
                                <input type="text" id="empId">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-25">
                                <input type="radio" id="departmentWise" name="wise" value="departmentwise" style="margin-top: 19px;">
                            </div>
                            <div class="col-75">
                                <label for="departmentwise" style="margin-left: -30px;margin-top: 10px;text-decoration;">Department-wise Claim Details</label> <br>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-25">
                                <label for="empId">Enter Department</label>
                            </div>
                            <div class="col-75">
                                <select name="department" id="department" required>
                                    <option value="">Select a Department</option>
                                    <?php echo $_SESSION['department'] ?>
                                </select>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-25">
                                <input type="radio" id="UCSC" name="wise" value="UCSC" style="margin-top: 19px;">
                            </div>
                            <div class="col-75">
                                <label for="UCSC" style="margin-left: -30px;margin-top: 10px;text-decoration;">UCSC Claim Details</label>
                            </div>
                        </div>
                        <button type="submit" name="viewMemberList-submit" class="subbtn">Select</button>                    
                        <button type="submit" class="cancelbtn">
                            <a href="msmHomeV.php">Cancel</a>
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</main>

<?php
    require '../basic/footer.php';
?>