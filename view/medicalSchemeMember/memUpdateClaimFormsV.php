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
        <ul class="breadcrumb">
            <li><a href="memHomeV.php">Home</a></li>
            <li>Select Form</li>
        </ul>

        <div class="banner">
            <div>
                <h2>Medical Scheme Member</h2>
            </div>
        </div>
        <div class="content">
            <div>
                <h4>Update Claim Forms</h4>
            </div>

            <ul>
                <li><a href="memClaimFormToUpdateV.php" name="">Form 1</a></li>
                <li><a href="#" name="">Form 2</a></li>
                <li><a href="#"></a></li>
            </ul>
            <!-- database eken form list ekak enawa -->
            <!-- eken form eka select krala form page ekat yanwa -->

        </div>
    </div>
</main>

<?php
    require_once('../include/footer.php');
?>