<main>
    <title>Hall allocation Schedule</title>
    <?php
        require '../basic/header.php';
    ?>

    <div class="header">
        <ul class="breadcrumbs">
            <li><a href="hamHomeV.php">Home</a></li>
            <li>Hall allocation Schedule</li>
        </ul>
    </div>

    <div class="side-nav">
        <?php
            require '../hallAllocationMaintainer/hamSideNavV.php';
        ?>
    </div>

    <div class="content">
        <div>
            <h3>Schedule</h3>
        </div>
        <table>
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
        <a href="hamViewHallAllocationScheduleV.php"><button type="submit" name="">OK</button></a>
    </div>

    <?php
        require '../basic/footer.php';
    ?>
</main>