<?php
    require '../basic/topnav.php';
?>

<main>
    <title>Time table saved</title>

    <div class="sansserif">
        <ul class="breadcrumbs">
            <li><a href="hamHomeV.php">Home</a></li>
            <li class="active">Time table saved</li>
        </ul>

        <div class="row">
            <div class="col left20">
                <?php
                    require 'hamSideNavV.php';
                ?>
            </div>

            <div class="col right80">
                <div>
                    <h2>Update / Remove Booking</h2>
                </div>

                <div class="contentForm">
                    <form>
                        <h3>The Time table has been saved successfully</h3>

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