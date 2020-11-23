<?php
    require '../basic/topnav.php';
?>

<main>
    <title>Unsuccesfull deletion</title>

    <div class="sansserif">
        <ul class="breadcrumbs">
            <li><a href="msmHomeV.php">Home</a></li>
            <li><a href="../../controller/msmControllers/msmRemoveMembersC.php">Remove Member</a></li>
            <li class="active">Action was unsuccess!</li>
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
                        <h2>The member is deleted unsuccessfully!</h2>
                    </div>

                    <button class="subbtn" type="submit">
                        <a href="../../controller/msmControllers/msmRemoveMembersC.php">Try Again</a>
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