<main>
    <title>Form</title>
    <?php
        require '../basic/header.php';
    ?>

    <div class="header">
        <ul class="breadcrumbs">
            <li><a href="msmHomeV.php">Home</a></li>
            <li>Form</li>
        </ul>
    </div>

    <div class="side-nav">
        <?php
            require '../medicalSchemeMaintainer/msmSideNavV.php';
        ?>
    </div>

    <div class="content">
        <div>
            <h3>Form</h3>
        </div>
            <!-- database eken form eka pennanna -->
            <!-- pdf eka generate krnna ona -->
        <a href="msmViewFormListV.php"><button type="submit" name="medicalSchemeForm-submit">OK</button></a>
    </div>

    <div class="right-side-bar">
        <a href="../../controller/viewProfileController.php?user_id=<?php echo $_SESSION['userId'] ?>"><button type="submit" name="" class="button">Profile</button></a>
    </div>

    <?php
        require '../basic/footer.php';
    ?>

</main>
