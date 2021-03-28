<?php
    require '../basic/topnav.php';
?>

<main>
    <div class="sansserif">
        <ul class="breadcrumbs">
            <li><a href="hamHomeV.php">Home</a></li>
            <li><a href="hamUpdateTimeTableSelectV.php">Update/Delete Time table</a></li>
            <li class="active">Action Success!</li>
        </ul>

        <div class="row">
            <div class="col left20">
                <?php
                    require 'hamSideNavV.php';
                ?>
            </div>

            <div class="col right80">
                <div class="contentForm">
                    <div class="row">
                        <h2>Action Successful!</h2>
                    </div>

                    <form action="../../controller/hamControllers/hamManageWeeklyTTC.php" method="post">
                        <button class="subbtn" name="updateremovett-submit" type="submit">Update/Delete Another</button>
                        <button class="cancelbtn"><a href="hamHomeV.php">Exit</a></button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</main>

<?php
    require '../basic/footer.php';
?>