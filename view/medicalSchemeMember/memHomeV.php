<?php
    require_once('../header.php');
    require_once('memSideNavV.php');
?>

<main>
    <link rel="stylesheet" href="../assests/css/main.css">

    <div class="container">
        <!-- <div class="header">
            <img src="../img/ims.jpg" alt="ims" class="logo">
            <div class="options">
                <a href="memHomeV.php">Home</a>
                <a href="memProfileV.php">Profile</a>
                <a href="#">Logout</a>
            </div>
        </div> -->

        <!-- breadcrumbs -->
        <div class="header">breadcrums</div>

        <?php
          require_once('memSideNavV.php');
        ?>

        <div class="banner">
            <div>
                <h2>Medical Scheme Member</h2>
            </div>
        </div>
        <div class="content">Content</div>
    </div>
</main>

<?php
    require_once('../include/footer.php');
?>