<?php
    require '../basic/topnav.php';
?>

<main>
    <title>Declined a Membership</title>

    <div class="sansserif">
        <ul class="breadcrumbs">
            <li><a href="msmHomeV.php">Home</a></li>
            <li><a href="msmViewMembershipFormsV.php">View Medical Member List</a></li>
            <li class="active">Action was success!</li>
        </ul>
    
        <div class="row">
            <div class="col left20">
                <?php
                    require 'msmSideNavV.php';
                ?>
            </div>

            <div class="col right80">
                <div class="contentForm">
                    <div class="row">
                        <h2>The Membership is declined successfully!</h2>
                    </div>

                    <form action="../../controller/msmControllers/msmViewFormsC.php" method="post">
                        <button class="subbtn" name="membershipform-submit" type="submit">
                            <a href="#">Decline another</a>
                        </button>
                        <button class="cancelbtn" type="submit">
                            <a href="msmHomeV.php">Exit</a>
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    
</main>

<?php
    require '../basic/footer.php';
?>