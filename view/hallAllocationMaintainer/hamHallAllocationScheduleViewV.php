<?php
    require '../basic/topnav.php';
?>

<main>
    <title>Hall allocation Schedule</title>

    <div class="sansserif">
        <ul class="breadcrumbs">
            <li><a href="hamHomeV.php">Home</a></li>
            <li><a href="hamViewHallAllocationScheduleV.php">Hall allocation Schedule</a></li>
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
                    <h2>Schedule</h2>
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
            </div>
        </div>
    </div>
</main>

<?php
    require '../basic/footer.php';
?>