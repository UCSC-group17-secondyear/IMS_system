<main>
    <title>Hall allocation schedule</title>
    <?php
        require '../basic/header.php';
    ?>

    <div class="header">
        <ul class="breadcrumbs">
            <li><a href="hamHomeV.php">Home</a></li>
            <li>Hall allocation schedule</li>
        </ul>
    </div>

    <div class="side-nav">
        <?php
            require '../hallAllocationMaintainer/hamSideNavV.php';
        ?>
    </div>
        
    <div class="content">   
        <div>
            <h3>Hall Allocation Schedule</h3>
        </div>
        Enter Date
        <input type="date" id="" name="enterDate"><br>
        <a href="hamHallAllocationScheduleViewV.php"><button type="submit" name="displayschedule-submit">Display Schedule</button></a>
    </div>

    <?php
        require '../basic/footer.php';
    ?>
</main>