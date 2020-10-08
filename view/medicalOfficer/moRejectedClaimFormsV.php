<?php
    require_once('../header.php');
    require_once('moSideNavV.php');
?>

<main>
    <link rel="stylesheet" href="../assests/css/main.css">

    <div class="container">
        <!-- <div class="header">
            <img src="../img/ims.jpg" alt="ims" class="logo">
            <div class="options">
                <a href="moHomeV.php">Home</a>
                <a href="moProfileV.php">Profile</a>
                <a href="#">Logout</a>
            </div>
        </div> -->

        <ul class="breadcrumb">
            <li><a href="homePageV.php">Home</a></li>
            <li><a href="medicalOfficerV.php">Medical Officer's Page</a></li>
            <li>Rejected Claim Forms</li>
        </ul>
    </div>

    <div class="content">
        <div>
            <h3>Rejected Claim Forms</h3>
        </div>
    </div>
</main>

<?php
    require_once('../include/footer.php');
?>