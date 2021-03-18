<?php
    require "../basic/topnav.php";
?>

<main>
    <title>Claim Details</title>
    <div class="sasnserif">
        <ul class="breadcrumbs">
            <li><a href="msmHomeV.php">Home</a></li>
            <li class="active">View UCSC Claim Details</li>
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
                                <label for="">Enter Medical Year</label>
                            </div>
                            <div class="col-75">
                                <select name="medical_year" id="" required>
                                    <option value=""><?php echo $_SESSION['medical_year'] ?></option>
                                </select>
                            </div>
                        </div>
                        <button class="subbtn" name="ucsc-claim-submit">Dispaly Claim Details</button>
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