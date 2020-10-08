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
            <li>Form List</li>
        </ul>

        <div class="banner">
            <div>
                <h2>Medical Scheme Member</h2>
            </div>
        </div>
        <div class="content">
            <div>
                <h4>Claim Form List</h4>
            </div>

            <h2>OPD Forms</h2>
            <ul>
                <li><a href="memClaimDetailsFormListV.php">Form 1</a></li>
                <li><a href="#">Form 2</a></li>
                <li><a href="#">Form 3</a></li>
                <!-- pdf widiyat meke form database eken ganna one  -->
            </ul>

            <h2>Surgical Hospitalization Forms</h2>
            <ul>
                <li><a href="#">Form 1</a></li>
                <li><a href="#">Form 2</a></li>
                <li><a href="#">Form 3</a></li>
                <!-- meke form database eken ganna one  -->
            </ul>

            <!-- form eka click kalama claimDetails.php ekat yanwa -->
        </div>
    </div>
</main>

<?php
    require_once('../include/footer.php');
?>