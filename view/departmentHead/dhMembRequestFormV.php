<main>
    <?php
        require '../basic/header.php';
    ?>

    <div class="header">
        <ul class="breadcrumbs">
            <li><a href="dhHomeV.php">Home</a></li>
            <li>Memebership Requesting Forms</li>
        </ul>
    </div>

    <div class="side-nav">
        <?php
            require '../departmentHead/dhSideNavV.php';
        ?>
    </div>

    <div class="content">
        <div>
            <h3>Memebership Requesting Forms</h3>
        </div>

    </div>

    <div class="right-side-bar">
        <a href="../../controller/viewProfileController.php?user_id=<?php echo $_SESSION['userId'] ?>"><button type="submit" name="" class="button">Profile</button></a>
    </div>

    <?php
        require '../basic/footer.php';
    ?>
</main>