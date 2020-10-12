<main>
    <title>Profile Update Success</title>
    <?php
        require '../basic/header.php';
    ?>

    <div class="header">
        <ul class="breadcrumbs">
            <li><a href="msmHomeV.php">Home</a></li>
            <li>Profile</li>
        </ul>
    </div>

    <div class="side-nav">
        <?php
            require 'msmSideNavV.php';
        ?>
    </div>

    <div class="content">
        <p>Your profile has been updated successfully..</p>

        <a href="msmProfileV.php"><button type="submit">OK</button></a>
    </div>

    <div class="right-side-bar">
        <a href="../../controller/viewProfileController.php?user_id=<?php echo $_SESSION['userId'] ?>"><button type="submit" name="" class="button">Profile</button></a>
    </div>

    <?php
        require '../basic/footer.php';
    ?>

</main>

