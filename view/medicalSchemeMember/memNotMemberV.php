<?php
    require "../basic/topnav.php";
?>

<main>
    <title>Not a Member</title>

        <ul class="breadcrumbs">
            <li><a href="memHomeV.php">Home</a></li>
            <li><a href="../../controller/memControllers/updateClaimFormControllerOne.php?user_id=<?php echo $_SESSION['userId'] ?>">Select Form</a></li>
            <li class="active">Denied!</li>
        </ul>

        <div class="row" style="margin-bottom: 5%;">
            <div class="col left20">
                <?php 
                    require('memSideNavV.php');
                ?>
            </div>
            
            <div class="col right80">
                <div class="contentForm" style="margin-bottom: 1%;">
                    <h2>You are not allowed to fill claim forms since you are not a member.</h2>
                    <a href="memRenewMembershipV.php?user_id=<?php echo $_SESSION['userId'] ?>"><button class="subbtn" type="submit" name="">Renew Membership</button></a>
                    <a href="memHomeV.php"><button class="cancelbtn" type="submit" name="">Exit</button></a>
                </div>
            </div>
        </div>
</main>

<?php
    require_once('../basic/footer.php');
?>