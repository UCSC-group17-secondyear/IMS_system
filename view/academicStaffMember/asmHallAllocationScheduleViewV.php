<?php
    require '../basic/topnav.php';
?>

<main>
    <title>Hall Allocation Schedule</title>

    <div class="sansserif">
        <ul class="breadcrumbs">
            <li><a href="asmHomeV.php">Home</a></li>
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

                <a href="asmViewHallAllocationScheduleV.php"><button class="mainbtn" type="submit" name="">OK</button></a>
            </div>
        </div>
    </div>
</main>

<?php
    require '../basic/footer.php';
?>