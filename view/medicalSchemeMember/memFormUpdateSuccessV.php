<?php
    require "../basic/topnav.php";
?>

<main>
    <title>Update Successfull</title>

        <ul class="breadcrumbs">
            <li><a href="memHomeV.php">Home</a></li>
            <li><a href="../../controller/memControllers/updateClaimFormControllerOne.php?user_id=<?php echo $_SESSION['userId'] ?>">Select Form</a></li>
            <li class="active">Form Updated</li>
        </ul>

        <div class="row" style="margin-bottom: 4%;">
            <div class="col left20">
                <?php 
                    require('memSideNavV.php');
                ?>
            </div>
            
            <div class="col right80">
                <div class="contentForm">
                    <h2>Your Form has been Updated Succesfully.</h2>

                    <button class="subbtn" type="submit" name=""><a href="../../controller/memControllers/updateClaimFormControllerOne.php?user_id=<?php echo $_SESSION['userId'] ?>">Back</a></button>
                    <button type="submit" class="cancelbtn"><a href="memHomeV.php">Exit</a></button>
                </div>
            </div>
        </div>
</main>

<?php
    require_once('../basic/footer.php');
?>