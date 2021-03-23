<?php
    require '../basic/topnav.php';
?>

<main>
    <title>Deleted a Member</title>

    <div class="sansserif">
        <ul class="breadcrumbs">
            <li><a href="msmHomeV.php">Home</a></li>
            <li><a href="msmRemoveMemberV.php">Remove Members</a></li>
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
                        <h2>The Member is Deleted successfully!</h2>
                    </div>

                    <form action="../../controller/msmControllers/msmManageMembersC.php" method="post">
                        <button class="subbtn" type="submit" name="removemember-submit"><a href="#">Delete Another</a></button>
                        <button class="cancelbtn" type="submit"><a href="msmHomeV.php">Exit</a></button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    
</main>

<?php
    require '../basic/footer.php';
?>