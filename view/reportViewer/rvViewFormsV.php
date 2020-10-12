<main>
    <title>View Forms</title>
    <?php
        require '../basic/header.php';
    ?>

    <div class="header">
        <ul class="breadcrumbs">
            <li><a href="rvHomeV.php">Home</a></li>
            <li>View Forms</li>
        </ul>
    </div>

    <div class="side-nav">
        <?php
            require 'rvSideNavV.php';
        ?>
    </div>

    <div class="content">
            <div>
                <h3>View Forms of Medical Scheme</h3>
            </div>
            <a href="#"><button type="submit" name="membership-submit">Membership Form</button></a>
            <br>
            <a href="#"><button type="submit" name="refferedClaim-submit">Reffered Claim Form</button></a> <br>
            <a href="#"><button type="submit" name="requestedClaim-submit">Requested Claim Form</button></a> <br>
            <!-- meketh form ekta adaalawa display krnn ona -->
    </div>

    <div class="right-side-bar">
        <a href="../../controller/viewProfileController.php?user_id=<?php echo $_SESSION['userId'] ?>"><button type="submit" name="" class="button">Profile</button></a>
    </div>

    <?php
        require '../basic/footer.php';
    ?>

</main>