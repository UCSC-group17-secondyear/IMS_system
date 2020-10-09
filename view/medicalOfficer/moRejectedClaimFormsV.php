<main>
    <title>Rejected Claim Forms</title>
    <?php
        require '../basic/header.php';
    ?>

    <div class="header">
        <ul class="breadcrumbs">
            <li><a href="homePageV.php">Home</a></li>
            <li><a href="medicalOfficerV.php">Medical Officer's Page</a></li>
            <li>Rejected Claim Forms</li>
        </ul>
    </div>

    <div class="side-nav">
        <?php
            require '../medicalOfficer/moSideNavV.php';
        ?>
    </div>

    <div class="content">
        <div>
            <h3>Rejected Claim Forms</h3>
        </div>
    </div>

    <div class="right-side-bar">
        <a href="../../controller/viewProfileController.php?user_id=<?php echo $_SESSION['userId'] ?>"><button type="submit" name="" class="button">Profile</button></a>
    </div>

    <?php
        require '../basic/footer.php';
    ?>

</main>
