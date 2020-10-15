<main>
    <title>TT has been removed</title>
    <?php
        require '../basic/header.php';
    ?>

    <div class="header">
        <!-- <ul class="breadcrumbs">
            <li><a href="hamHomeV.php">Home</a></li>
            <li>TT has been removed</li>
        </ul> -->
    </div>

    <div class="side-nav">
        <?php
            require '../hallAllocationMaintainer/hamSideNavV.php';
        ?>
    </div>

    <div class="content">
        <div>
            <p>The time table has been successfully removed</p>
        </div>

        <a href="hamManageWeeklyTimeTableV.php"><button type="submit" name="">Ok</button></a>
    </div>

    <?php
        require '../basic/footer.php';
    ?>
</main>