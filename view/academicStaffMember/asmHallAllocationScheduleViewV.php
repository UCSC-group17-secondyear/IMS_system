<?php
    require '../basic/topnav.php';
?>

<main>
    <title>Hall Allocation Schedule</title>

    <div class="sansserif">
        <ul class="breadcrumbs">
            <li><a href="asmHomeV.php">Home</a></li>
            <li><a href="asmViewHallAllocationScheduleV.php">Hall Allocation Date</a></li>
            <li>Hall Allocation Schedule</li>
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

                <table id="tableStyle">
                    <tr>
                        <th>Date</th>
                        <th>Time Duration</th>
                        <th>Hall Name</th>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                </table>

                <button class="subbtn" type="submit" name="">
                    <a href="asmViewHallAllocationScheduleV.php">Select another date</a>
                </button>
                <button class="cancelbtn" type="submit">
                    <a href="asmHomeV.php">Leave Page</a>
                </button>
            </div>
        </div>
    </div>
</main>

<?php
    require '../basic/footer.php';
?>