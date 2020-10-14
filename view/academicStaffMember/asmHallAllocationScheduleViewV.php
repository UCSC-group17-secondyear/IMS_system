<main>
    <title>Hall Allocation Schedule</title>
    <?php
        require '../basic/header.php';
    ?>

    <div class="header">
        <ul class="breadcrumbs">
            <li><a href="asmHomeV.php">Home</a></li>
            <li>Hall Allocation Schedule</li>
        </ul>
    </div>

    <div class="side-nav">
        <?php
            require '../academicStaffMember/asmSideNavV.php';
        ?>
    </div>

    <div class="content">
        <div>
            <h3>Hall Allocation Schedule</h3>
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
        <a href="asmViewHallAllocationScheduleV.php"><button type="submit" name="">OK</button></a>
    </div>

    <?php
        require '../basic/footer.php';
    ?>

</main>