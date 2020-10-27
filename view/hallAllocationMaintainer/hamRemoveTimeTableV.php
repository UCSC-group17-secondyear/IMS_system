<?php
    require '../basic/topnav.php';
?>

<main>
    <title>TT has been removed</title>

    <div class="header">
        <!-- <ul class="breadcrumbs">
            <li><a href="hamHomeV.php">Home</a></li>
            <li>TT has been removed</li>
        </ul> -->
    </div>

    <div class="row">
        <div class="col left20">
            <?php
                require 'hamSideNavV.php';
            ?>
        </div>

        <div class="col right80">
            <div class="contentForm">
                <form>
                    <h3>The time table has been successfully removed</h3>

                    <a href="hamManageWeeklyTimeTableV.php"><button class="mainbtn" type="submit" name="">Ok</button></a>
                </form>
            </div>
        </div>
    </div>
</main>

<?php
    require '../basic/footer.php';
?>