<?php
    require_once('../header.php');
    require_once('memSideNavV.php');
?>

<main>
    <link rel="stylesheet" href="../assests/css/main.css">
    <div class="container">
        <div class="header">
            <img src="../img/ims.jpg" alt="ims" class="logo">
            <div class="options">
                <a href="memHomeV.php">Home</a>
                <a href="memProfileV.php">Profile</a>
                <a href="#">Logout</a>
            </div>
        </div>

        <div class="header">breadcrums</div>

        <div class="banner">
            <div>
                <h2>Medical Scheme Member</h2>
            </div>
        </div>
        <div class="content">
            <div>
                <h4>View Claim Details</h4>
            </div>

            <a href="memSearchByReferenceFormV.php"><button type="submit" name="">Search by Reference
                    Number</button></a><br>
            <a href="memClaimFormListV.php"><button type="submit" name="">Display Claim Forms List</button></a><br>
        </div>
    </div>
</main>

<?php
    require_once('../include/footer.php');
?>