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
                    <form action="../../controller/msmviewMemberList2C.php" method="POST">
                        <div class="row">
                            <div class="col-25">
                                <label for="year">Enter medical year</label>
                            </div>
                            <div class="col-75">
                                <select name="my" id="my" required>
                                    <option value="">Select medical year</option>
                                    <?php echo $_SESSION['my'] ?>
                                </select>
                            </div>
                        </div>
                        <div class="row">
                            <label class="radiolabel" for="memberwise"><b>Member-wise Claim Details</b></label>
                            <input class="radios" type="radio" id="memberWise" name="wise" value="memberwise">
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
                            <label class="radiolabel" for="departmentwise"><b>Department-wise Claim Details</b></label>
                            <input class="radios" type="radio" id="departmentWise" name="wise" value="departmentwise">
                        </div>
                        <div class="row">
                            <div class="col-25">
                                <label for="empId">Enter Department</label>
                            </div>
                            <div class="col-75">
                                <select name="department" id="department" required>
                                    <option value="">Select Department</option>
                                    <?php echo $_SESSION['departments'] ?>
                                </select>
                            </div>
                        </div>
                        <div class="row">
                            <label class="radiolabel" for="UCSC"><b>UCSC Claim Details</b></label>
                            <input class="radios" type="radio" id="UCSC" name="wise" value="UCSC">
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