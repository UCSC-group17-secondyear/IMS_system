<?php
    require '../basic/topnav.php';
?>

<main>
    <div class="sansserif">
        <ul class="breadcrumbs">
            <li><a href="hamHomeV.php">Home</a></li>
            <li><a href="hamUpdateTimeTableSelectV.php">Enter Time table</a></li>
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
                        <h2>Sorry! The the time slot is not free.</h2>
                    </div>

                    <form action="../../controller/hamControllers/hamManageWeeklyTTC.php" method="post">
                        <button class="subbtn" name="entertt-submit" type="submit">Try Again</button>
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