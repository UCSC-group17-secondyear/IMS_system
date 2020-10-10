<main>

    <?php
        require '../basic/header.php';
    ?>

    <div class="header">
        <!-- Breadcrumbs -->
    </div>

    <div class="side-nav">
        <?php
            require 'msmSideNavV.php';
        ?>
    </div>

    <div class="banner">
        <h2>Medical Scheme Maintainer</h2>
    </div>

    <div class="right-side-bar">
        <a href="../../controller/viewProfileController.php?user_id=<?php echo $_SESSION['userId'] ?>"><button type="submit" name="" class="button">Profile</button></a>
    </div>

    <?php
        require '../basic/footer.php';
    ?>

</main>
