<?php
    require "../basic/topnav.php";
?>

<main>
    <title>Claim Details</title>
        <div class="sasnserif">
                <ul class="breadcrumbs">
                    <li><a href="rvHomeV.php">Home</a></li>
                    <li class="active">View Member Claim Details</li>
                </ul>
           
        <div class="row" style="margin-bottom: 4.5%;">
                <div class="col left20">
                    <?php 
                        require('rvSideNavV.php');
                    ?>
                </div>
                
            <div class="col right80">
                    <div>
                        <h2>View Claim Details</h2>
                    </div>

                <div class="contentForm">
                    <form action="../../controller/rvControllers/viewClaimDetailsController.php" method="POST">
                    <div class="row">
                        <div class="col-25">
                            <label for="">Medical Year</label>
                        </div>

                        <div class="col-75">
                            <select name="medical_year" id="" required>
                                    <option value="">Select Medical Year</option>
                                    <?php echo $_SESSION['medical_year'] ?>
                            </select>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-25">
                            <label for="">Employee ID</label>
                        </div>
                        <div class="col-75">
                            <input type="text" min="0" name="emp_id" placeholder="Enter employee id" required>
                        </div>
                    </div>
                        

                        <button class="subbtn" name="member-claim-submit">Dispaly Claim Details</button>
                        <button class="cancelbtn" type="submit" name="">
                            <a href="rvHomeV.php">Exit</a>
                        </button>

                    </form>                
                </div>
            </div>
        </div>
        </div>
    
</main>

<?php
    require_once('../basic/footer.php');
?>