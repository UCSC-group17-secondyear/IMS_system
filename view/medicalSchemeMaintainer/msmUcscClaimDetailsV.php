<?php
    require "../basic/topnav.php";
?>

<main>
    <title>UCSC claim Details</title>
        <div class="sansserif"> 
                
                    <ul class="breadcrumbs">
                        <li><a href="msmHomeV.php">Home</a></li>
                        <li><a href="../../controller/msmControllers/ucscClaimDetailsControllerOne.php">View another Department Details</a></li>
                        <li class="active">UCSC Claim Details</li>
                    </ul>
                
            <div class="row"  style="margin-bottom: 4%;">
                <div class="col left20">
                    <?php 
                        require('msmSideNavV.php');
                    ?>
                </div>

                <div class="col right80">
                    <div>
                        <h2>UCSC Claim Details</h2>
                    </div>
                    
                    <div class="contentForm">
                        <form action="" method="post">

                            <div class="row">
                                <div class="col-25">
                                    <label for="">Medical Year</label>
                                </div>
                                <div class="col-75">
                                    <input type="text" name="year" <?php echo 'value="'.$_SESSION['year'].'"'?> disabled> <br>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-25">  
                                    <label for="">Initial Amount</label>
                                </div>
                                <div class="col-75">
                                    <input type="text" name="initial_amount" <?php echo 'value="'.$_SESSION['init_amount'].'"'?> disabled> <br>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-25">
                                    <label for="">Already Used Amount</label>
                                </div>
                                <div class="col-75">
                                    <input type="text" name="used_amount" <?php echo 'value="'.$_SESSION['used_amount'].'"'?> disabled> <br>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-25">
                                    <label for="">Remaining Amount</label>
                                </div>
                                <div class="col-75">
                                    <input type="text" name="remain_amount" <?php echo 'value="'.$_SESSION['remain_amount'].'"'?> disabled> <br>
                                </div>
                            </div> 
                        </form>
                    
                        <button class="subbtn" type="submit" name="">
                                <a href="../../controller/msmControllers/ucscClaimDetailsControllerOne.php">View Another</a>
                        </button>
                        <button class="cancelbtn" type="submit" name="">
                                <a href="msmHomeV.php">Exit</a>
                        </button>
                    </div>
                </div>
            </div>
        </div>
</main>

<?php
    require_once('../basic/footer.php');
?>