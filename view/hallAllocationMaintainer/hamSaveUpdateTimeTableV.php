<?php
    require '../basic/topnav.php';
?>

<main>
    <title>TT is updated</title>

    <div class="sansserif">
        <ul class="breadcrumbs">
            <li><a href="hamHomeV.php">Home</a></li>
            <li>Updated TT</li>
        </ul>

        <div class="row">
            <div class="col left20">
                <?php
                    require 'hamSideNavV.php';
                ?>
            </div>

            <div class="col right80">
                <div class="contentForm">
                    <form>
                        <h3>The Time table has been updated successfully</h3>

                        <a href="hamManageWeeklyTimeTableV.php"><button class="mainbtn" type="submit" name="">Ok</button></a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</main>

<?php
    require '../basic/footer.php';
?>