<?php
    require '../basic/topnav.php';
?>

<main>
    <title>Accepted a Membership</title>

    <div class="sansserif">
        <ul class="breadcrumbs">
            <li><a href="msmHomeV.php">Home</a></li>
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
                        <h2>The Designation is accepted successfully!</h2>
                    </div>

                    <button class="subbtn" type="submit">
                        <a href="../../controller/msmControllers/msmviewMemberList1C.php">View Another List</a>
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