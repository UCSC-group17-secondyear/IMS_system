<?php
    require '../basic/topnav.php';
?>

<main>
    <title>Declined a Membership</title>

    <div class="sansserif">
        <ul class="breadcrumbs">
            <li><a href="aHomeV.php">Home</a></li>
            <li><a href="../../controller/msmControllers/msmviewMemberList1C.php">View Medical Member List</a></li>
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

                    <button class="subbtn" type="submit">
                        <a href="../../controller/msmControllers/msmMembershipForms1C.php">Decline Another</a>
                    </button>
                    <button class="cancelbtn" type="submit">
                        <a href="msmHomeV.php">Exit</a>
                    </button>
                </div>
            </div>
        </div>
    </div>
    
</main>

<?php
    require '../basic/footer.php';
?>