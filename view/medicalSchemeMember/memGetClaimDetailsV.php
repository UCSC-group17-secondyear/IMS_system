<?php
    require "../basic/topnav.php";
?>

<main>
    <title>Claim Details</title>
        <div class="sasnserif">
                <ul class="breadcrumbs">
                    <li><a href="memHomeV.php">Home</a></li>
                    <li class="active">Claim Details</li>
                </ul>
           
        <div class="row" style="margin-bottom: 4.5%;">
                <div class="col left20">
                    <?php 
                        require('memSideNavV.php');
                    ?>
                </div>
                
            <div class="col right80">
                    <div>
                        <h2>View Claim Details</h2>
                    </div>

                <div class="contentForm">
                    <form action="../../controller/memControllers/getMemberYearClaimDetailsController.php?user_id=<?php echo $_SESSION['userId'] ?>" method="POST">
                        <div class="col-25">
                            <label for="">Enter Medical Year</label>
                        </div>

                        <div class="col-75">
                            <input type="year" value=""> 
                        </div>
                        <button class="subbtn" name="year-claim">Dispaly Claim Details</button>
                        <button class="cancelbtn" type="submit" name="">
                            <a href="memHomeV.php">Exit</a>
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