<?php
    require '../basic/topnav.php';
?>

<main>
    <title>View Hall Allocation Schedule</title>

    <div class="sansserif">
        <ul class="breadcrumbs">
            <li><a href="hamHomeV.php">Home</a></li>
            <li class="active">Hall allocation schedule</li>
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

                            <button class="subbtn" type="submit" name="displayschedule-submit">
                                <a href="hamHallAllocationScheduleViewV.php">Display Schedule</a>
                            </button>
                            <button class="cancelbtn" type="submit">
                                <a href="hamHomeV.php">Cancel</a>
                            </button>
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