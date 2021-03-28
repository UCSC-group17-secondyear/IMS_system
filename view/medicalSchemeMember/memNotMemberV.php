<?php
    require "../basic/topnav.php";
?>

<main>
    <title>Not a Member</title>

        <ul class="breadcrumbs">
            <li><a href="memHomeV.php">Home</a></li>
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
                    <form action="../../controller/memControllers/currentMemberDetailsController1.php?user_id=<?php echo $_SESSION['userId'] ?>" method="POST">
                        <h2>You are not allowed to fill claim forms since you are not a member.</h2>
                        <button class="subbtn" type="submit" name="check-renew">
                            <a >Renew Membership</a>
                        </button>
                        <button class="cancelbtn" type="submit" name="">
                            <a href="memHomeV.php">Exit</a>
                        </button>
                    </form>
                </div>
            </div>
        </div>
</main>

<?php
    require_once('../basic/footer.php');
?>