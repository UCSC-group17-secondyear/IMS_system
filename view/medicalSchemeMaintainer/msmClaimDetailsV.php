<main>
    <title>Claim Details</title>
    <?php
        require '../basic/header.php';
    ?>

    <div class="header">
        <ul class="breadcrumbs">
            <li><a href="msmHomeV.php">Home</a></li>
            <li>Claim Details</li>
        </ul>
    </div>

    <div class="side-nav">
        <?php
            require '../medicalSchemeMaintainer/msmSideNavV.php';
        ?>
    </div>

    <div class="content">
        <div>
            <h3>Claim Details</h3>
        </div>

        <div>
            <h4>OPD Claim details</h4>
            <p></p>
                <!-- methnta opd claim details tika danna -->

            <h4>Surgical Hospitalization Claim Details</h4>
            <p></p>
                <!-- methnta surgical claim details tika danna -->
        </div>
    </div>

    <div class="right-side-bar">
        <a href="../../controller/viewProfileController.php?user_id=<?php echo $_SESSION['userId'] ?>"><button type="submit" name="" class="button">Profile</button></a>
    </div>

    <?php
        require '../basic/footer.php';
    ?>

</main>

