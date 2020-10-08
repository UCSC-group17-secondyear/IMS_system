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
            <li>Renew Membership</li>
        </ul>

        <div class="banner">
            <div>
                <h2>Medical Scheme Member</h2>
            </div>
        </div>
        <div class="content">
            <div>
                <h2>Renew Membership</h2>
                <h4>Change Scheme</h4>
            </div>

            <a href="memSchemeChangeYesV.php"><button type="submit" name="">Yes</button></a><br>
            <!-- experience eka 2 years wadinam auto scheme 3 walat yanawa.natnam scheme eka select kranna page eka -->
            <!-- if ekakin check krala selectScheme.php & schemeChangeYes.php walin ekakat yanwa -->
            <a href="memCurrentMemberDetailsV.php"><button type="submit" name="">No</button></a><br>
        </div>
    </div>
</main>

<?php
    require_once('../include/footer.php');
?>