<main>
    <title>TT is updated</title>
    <?php
        require '../basic/header.php';
    ?>

    <div class="header">
        <!-- <ul class="breadcrumbs">
            <li><a href="hamHomeV.php">Home</a></li>
            <li>Saved Successfully</li>
        </ul> -->
    </div>
        
    <div class="side-nav">
        <?php
            require '../hallAllocationMaintainer/hamSideNavV.php';
        ?>
    </div>
        
    <div class="content">   
        <div>
            <p>The Time table has been updated successfully</p>
        </div>
        <a href="hamManageWeeklyTimeTableV.php"><button type="submit" name="">Ok</button></a>
    </div>

    <?php
        require '../basic/footer.php';
    ?>
</main>