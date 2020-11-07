<?php
    require "../basic/topnav.php";
?>

<main>
    <title>Claim Details</title>
        <div class="sansserif"> 
                
                    <ul class="breadcrumbs">
                        <li><a href="memHomeV.php">Home</a></li>
                        <li><a href="memGetClaimDetailsV.php?user_id=<?php echo $_SESSION['userId'] ?>">Enter Year</a></li>
                        <li class="active">Claim Details</li>
                    </ul>
                
            <div class="row">
                <div class="col left20">
                    <?php 
                        require('memSideNavV.php');
                    ?>
                </div>

                <div class="col right80">
                    <div>
                        <h2>Claim Details</h2>
                    </div>
                    
                    <div class="contentForm">
                        <form action="" method="post">
                            <div class="row">
                                <div class="col-25">
                                    <label for="">Scheme</label>
                                </div>
                                <div class="col-75">
                                    <input type="text" name="scheme_name"  disabled> <br>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-25">  
                                    <label for="">Initial Amount</label>
                                </div>
                                <div class="col-75">
                                    <input type="text" name="initial_amount"  disabled> <br>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-25">
                                    <label for="">Already Used Amount</label>
                                </div>
                                <div class="col-75">
                                    <input type="text" name="used_amount" disabled> <br>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-25">
                                    <label for="">Remaining Amount</label>
                                </div>
                                <div class="col-75">
                                    <input type="text" name="remain_amount" disabled> <br>
                                </div>
                            </div> 
                        </form>
                        
                        <button class="mainbtn" type="submit" name="">
                            <a href="">OK</a>
                        </button>
                    </div>
                </div>
            </div>
        </div>
</main>

<?php
    require_once('../basic/footer.php');
?>