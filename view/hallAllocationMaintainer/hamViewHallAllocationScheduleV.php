<?php
    require '../basic/topnav.php';
?>

<main>
    <title>View Hall Allocation Schedule</title>

    <div class="sansserif">
        <ul class="breadcrumbs">
            <li><a href="hamHomeV.php">Home</a></li>
            <li>Hall allocation schedule</li>
        </ul>

        <div class="row">
            <div class="col left20">
                <?php
                    require 'hamSideNavV.php';
                ?>
            </div>

            <div class="col right80">
                <div>
                    <h2>Hall Allocation Schedule</h2>
                </div>

                <div class="contentForm">
                    <form action="" method="POST">
                        <div class="row">
                            <div class="col-25">
                                <label>Enter Date</label>
                            </div>
                            <div class="col-75">
                                <input type="date" id="" name="enterDate" required/>
                            </div>

                            <a href="hamHallAllocationScheduleViewV.php"><button class="mainbtn" type="submit" name="displayschedule-submit">Display Schedule</button></a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</main>

<?php
    require '../basic/footer.php';
?>