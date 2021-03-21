<?php
    require '../basic/topnav.php';
?>

<main>
    <title>Hall Allocation Schedule</title>

    <div class="sansserif">
        <ul class="breadcrumbs">
            <li><a href="asmHomeV.php">Home</a></li>
            <li><a href="asmViewHallAllocationScheduleV.php">Hall Allocation Schedule</a></li>
            <li class="active">Schedule</li>
        </ul>

        <div class="row">
            <div class="col left20">
                <?php
                    require 'asmSideNavV.php';
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
                            <a href="asmViewHallAllocationScheduleV.php">Display another Schedule</a>
                        </button>
                        <button class="cancelbtn" type="submit" name=""><a href="asmHomeV.php">Cancel</a></button>
                    </form>
                </div>
                <button class="subbtn redbtn" style="margin-bottom:0">Allocated Halls</button>
                <button class="cancelbtn greenbtn" style="margin-bottom:0">Not Allocated Halls</button>
                <table id="tableStyle">
                    <tr>
                        <th>Start Time</th>
                        <th>End Time</th>
                        <th>Hall Name</th>
                    </tr>
                    <?php echo $_SESSION['Halls'] ?>
                </table>
            </div>
        </div>
    </div>
</main>

<?php
    require '../basic/footer.php';
?>