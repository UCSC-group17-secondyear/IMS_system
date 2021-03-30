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
                                <label for="">Start Date</label>
                            </div>
                            <div class="col-75">
                                <input type="date" id="start_date" <?php echo 'value="'.$_SESSION['hall_start_date'].'"'?> disabled>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-25">
                                <label for="">End Date</label>
                            </div>
                            <div class="col-75">
                                <input type="date" id="end_date" <?php echo 'value="'.$_SESSION['hall_end_date'].'"'?> disabled>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-25">
                                <label for="">Hall</label>
                            </div>
                            <div class="col-75">
                                <input type="text" <?php echo 'value="'.$_SESSION['selected_hall'].'"'?> disabled>
                            </div>
                        </div>
                        <button class="subbtn" type="submit" name="">
                            <a href="hamViewHallAllocationScheduleV.php">Display another Schedule</a>
                        </button>
                        <button class="cancelbtn" type="submit" name=""><a href="hamHomeV.php">Cancel</a></button>
                    </form>
                </div>
                <?php if ($_SESSION['aretherehalls'] == 1) { ?>
                    <table id="tableStyle">
                        <tr>
                            <th>Start Time</th>
                            <th>End Time</th>
                            <th>Reason</th>
                        </tr>
                        <?php echo $_SESSION['SelectedHall'] ?>
                    </table> <br>
                <?php } else { ?>
                    <br>
                <?php } ?>
                <?php if ($_SESSION['wtt_forhall'] == 1) { ?>
                    <table id="tableStyle">
                        <tr>
                            <th>Day</th>
                            <th>Start Time</th>
                            <th>End Time</th>
                            <th>Subject</th>
                        </tr>
                        <?php echo $_SESSION['dr_tt'] ?>
                    </table>
                <?php } else { ?>
                    <br>
                <?php } ?>
            </div>
        </div>
    </div>
</main>

<script>
    function checkDate(){
        var sdate = document.getElementById("start_date").value;
        var edate = document.getElementById("end_date").value;

        if(edate < sdate){
            alert("The end date you have entered is a date before the start date that you have entered!");
            document.getElementById("end_date").value = "mm/dd/yyyy";
        }
    }
</script>

<?php
    require '../basic/footer.php';
?>