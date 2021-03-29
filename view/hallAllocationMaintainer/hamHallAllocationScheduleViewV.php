<?php
    require '../basic/topnav.php';
?>

<main>
    <title>Hall Allocation Schedule</title>

    <div class="sansserif">
        <ul class="breadcrumbs">
            <li><a href="hamHomeV.php">Home</a></li>
            <li><a href="hamViewHallAllocationScheduleV.php">Hall Allocation Schedule</a></li>
            <li class="active">Schedule</li>
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
                    <form action="" method="post">
                        <div class="row">
                            <div class="col-25">
                                <label for="">Date</label>
                            </div>
                            <div class="col-75">
                                <input type="date" <?php echo 'value="'.$_SESSION['selected_date'].'"'?> disabled>
                            </div>
                        </div>
                        <button class="subbtn" type="submit" name="">
                            <a href="hamViewHallAllocationScheduleV.php">Display another Schedule</a>
                        </button>
                        <button class="cancelbtn" type="submit" name=""><a href="hamHomeV.php">Cancel</a></button>
                    </form>
                </div>
                <button class="subbtn redbtn" style="margin-bottom:0">Allocated Halls</button>
                <button class="cancelbtn greenbtn" style="margin-bottom:0">Not Allocated Halls</button>
                <?php if ($_SESSION['aretherehalls'] == 1) { ?>
                    <table id="tableStyle">
                        <tr>
                            <th>Start Time</th>
                            <th>End Time</th>
                            <th>Hall Name</th>
                        </tr>
                        <?php echo $_SESSION['Halls'] ?>
                    </table> <br>
                <?php } else { ?>
                    <br>
                <?php } ?>
                <?php if ($_SESSION['wtt_fortheday'] == 1) { ?>
                    <table id="tableStyle">
                        <tr>
                            <th>Day</th>
                            <th>Start Time</th>
                            <th>End Time</th>
                            <th>Subject</th>
                            <th>Hall</th>
                        </tr>
                        <?php echo $_SESSION['day_tt'] ?>
                    </table>
                <?php } else { ?>
                    <br>
                <?php } ?>
            </div>
        </div>
    </div>
</main>

<?php
    require '../basic/footer.php';
?>