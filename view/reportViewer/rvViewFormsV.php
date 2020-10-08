<?php
    require_once('../header.php');
    require_once('asmSideNavV.php');
?>

<main>
    <link rel="stylesheet" href="../assests/css/main.css">

    <div class="container">

        <!-- <div class="header">
            <img src="../img/ims.jpg" alt="ims" class="logo">
            <div class="options">
                <a href="rvHomeV.php">Home</a>
                <a href="rvProfileV.php">Profile</a>
                <a href="#">Logout</a>
            </div>
        </div> -->

        <div class="header">breadcrums</div>

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
    </div>
</main>

<?php
    require_once('../include/footer.php');
?>