<?php
    require "../basic/topnav.php";
?>

<main>
    <title>Claim Details</title>
    <div class="sasnserif">
        <ul class="breadcrumbs">
            <li><a href="msmHomeV.php">Home</a></li>
            <li class="active">View Department Claim Details</li>
        </ul>
        <div class="row" style="margin-bottom: 4.5%;">
            <div class="col left20">
                <?php 
                    require('msmSideNavV.php');
                ?>
            </div>
            <div class="col right80">
                <div>
                    <h2>View Claim Details</h2>
                </div>
                <div class="contentForm">
                    <form action="../../controller/msmControllers/msmviewclaimdetailsC.php" method="POST">
                        <div class="row">
                            <div class="col-25">
                                <label for="">Medical Year</label>
                            </div>
                            <div class="col-75">
                                <select name="medical_year" id="" required>
                                    <option value="">Select a Medical year</option>
                                    <?php echo $_SESSION['medical_year'] ?>
                                </select>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-25">
                                <label for="">Department</label>
                            </div>
                            <div class="col-75">
                                <select name="dept" id="" required>
                                    <option value="">Select a department</option>
                                    <?php echo $_SESSION['department'] ?>
                                </select>
                            </div>
                        </div>
                        <button class="subbtn" name="dept-claim-submit">Dispaly Claim Details</button>
                        <button class="cancelbtn" type="submit" name=""><a href="msmHomeV.php">Exit</a></button>
                    </form>                
                </div>
            </div>
        </div>
    </div>
</main>

<?php
    require_once('../basic/footer.php');
?>