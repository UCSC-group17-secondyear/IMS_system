<main>
    <title>Update time table</title>
    <?php
        require '../basic/header.php';
    ?>

    <div class="header">
        <ul class="breadcrumbs">
            <li><a href="hamHomeV.php">Home</a></li>
            <li>Update time table</li>
        </ul>
    </div>

    <div class="side-nav">
        <?php
            require '../hallAllocationMaintainer/hamSideNavV.php';
        ?>
    </div>

    <div class="content">
        <div>
            <h3>Update/Remove Weekly Time Table</h3>
        </div>
        <br>

        <form action="" method="POST">
            <label for="subjectName">Subject Name:</label>
            <input type="text" value=""> <br>
            <label for="subjectCode">Subject Code:</label>
            <input type="text" value=""> <br>
            <label for="hall">Hall</label>
            <input type="text" value=""> <br>
            <label for="startTime">Start time:</label>
            <input type="time" value=""> <br>
            <label for="endTime">End Time:</label>
            <input type="time" value=""> <br>
        </form>
        <!-- meka database eken update wela enna ona -->

        <a href="hamSaveUpdateTimeTableV.php"><button type="submit" name="">Save Updates</button></a>
        <br>
        <br>
        <a href="hamRemoveTimeTableV.php"><button type="submit" name="">Remove</button></a>
    </div>

    <div class="right-side-bar">
        <a href="../../controller/viewProfileController.php?user_id=<?php echo $_SESSION['userId'] ?>"><button type="submit" name="" class="button">Profile</button></a>
    </div>

    <?php
        require '../basic/footer.php';
    ?>
</main>