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
                    <form action="../../controller/hamControllers/hamViewHallAllocScheduleC.php" method="post">
                        <div class="row">
                            <div class="col-25">
                                <label>Enter Date</label>
                            </div>
                            <div class="col-75">
                                <input type="date" id="" name="enterDate" required/>
                            </div>
                        </div> 
                        <button class="subbtn" type="submit" name="displayschedule1-submit">Display Schedule</button>
                        <button class="cancelbtn" type="submit"><a href="hamHomeV.php">Cancel</a></button>
                    </form>
                    <form action="../../controller/hamControllers/hamViewHallAllocScheduleC.php" method="post">
                        <div class="row">
                            <div class="col-25">
                              <label>Enter Starting Date</label>
                            </div>
                            <div class="col-75">
                                <input type="date" id="" name="startDate" />
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-25">
                                <label>Enter Ending Date</label>
                            </div>
                            <div class="col-75">
                                <input type="date" id="" name="endDate" />
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-25">
                              <label>Enter Hall</label>
                            </div>
                            <div class="col-75">
                                <select name="hall" id="wed" required>
                                    <option value="">Select a Hall</option>
                                    <?php echo $_SESSION['allhalls']?>
                                </select>
                            </div>
                        </div>
                        <button class="subbtn" type="submit" name="displayschedule2-submit">Display Schedule</button>
                        <button class="cancelbtn" type="submit">
                            <a href="hamHomeV.php">Cancel</a>
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</main>

<?php
    require '../basic/footer.php';
?>