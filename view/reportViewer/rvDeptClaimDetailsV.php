<?php
    require "../basic/topnav.php";
?>

<main>
    <title>Department claim Details</title>
        <div class="sansserif"> 
                
                    <ul class="breadcrumbs">
                        <li><a href="rvHomeV.php">Home</a></li>
                        <li><a href="../../controller/rvControllers/viewClaimDetailsController.php?btn=56">View another Department Details</a></li>
                        <li class="active">Claim Details</li>
                    </ul>
                
            <div class="row"  style="margin-bottom: 4%;">
                <div class="col left20">
                    <?php 
                        require('rvSideNavV.php');
                    ?>
                </div>

                <div class="col right80">
                    <div>
                        <h2>Department Claim Details</h2>
                    </div>
                    
                    <div class="contentForm">
                        <form action="" method="post">

                            <div class="row">
                                <div class="col-25">
                                    <label for="">Department Name</label>
                                </div>
                                <div class="col-75">
                                    <input type="text" name="dept" <?php echo 'value="'.$_SESSION['dept'].'"'?> readonly> <br>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-25">
                                    <label for="">Medical Year</label>
                                </div>
                                <div class="col-75">
                                    <input type="text" name="year" <?php echo 'value="'.$_SESSION['year'].'"'?> readonly> <br>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-25">  
                                    <label for="">Initial Amount</label>
                                </div>
                                <div class="col-75">
                                    <input type="text" name="initial_amount" <?php echo 'value="'.$_SESSION['init_amount'].'"'?> readonly> <br>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-25">
                                    <label for="">Already Used Amount</label>
                                </div>
                                <div class="col-75">
                                    <input type="text" name="used_amount" <?php echo 'value="'.$_SESSION['used_amount'].'"'?> readonly> <br>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-25">
                                    <label for="">Remaining Amount</label>
                                </div>
                                <div class="col-75">
                                    <input type="text" name="remain_amount" <?php echo 'value="'.$_SESSION['remain_amount'].'"'?> readonly> <br>
                                </div>
                            </div> 
                        </form>
                        <form action="../../controller/rvControllers/viewClaimDetailsController.php" method="POST">
                            <button class="subbtn" type="submit" name="departmentwise-submit">
                                    <a >View Another</a>
                            </button>
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