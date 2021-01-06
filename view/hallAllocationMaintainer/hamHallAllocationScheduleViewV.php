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
                                <input type="date" <?php echo 'value="'.$_SESSION['selected_date'].'"'?>>
                            </div>
                        </div>
                    </form>
                </div>
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