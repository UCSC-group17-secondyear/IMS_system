<?php
    require '../basic/topnav.php';
?>

<main>
    <div class="sansserif">
        <ul class="breadcrumbs">
            <li><a href="msmHomeV.php">Home</a></li>
            <li><a href="msmRemovePostV.php">Update Medical Year</a></li>
            <li class="active">Action Completed!</li>
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
                        <h2>The Medical Year is updated succcessfully.
                        </h2>
                    </div>

                    <form action="../../controller/msmControllers/msmManageMedicalYearC.php" method="post">
                        <button name="viweMYList-submit" type="submit" class="subbtn">Update again</button>
                        <button class="cancelbtn"><a href="msmHomeV.php">Exit</a></button>
                    </form>                    
                </div>
            </div>
        </div>
    </div>
</main>

<?php
    require '../basic/footer.php';
?>