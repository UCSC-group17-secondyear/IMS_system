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
            <li>Search By Reference</li>
        </ul>

        <div class="banner">
            <div>
                <h2>Medical Scheme Member</h2>
            </div>
        </div>
        <div class="content">
            <div>
                <h4>Search by Reference Number</h4>
            </div>

            <label for="refNUmber">Enter Reference Number</label>
            <input type="text" value=""> <br>

            <a href="memClaimDetailsReferenceNumberV.php"><button type="submit" name="">Display Form</button></a><br>
        </div>
    </div>
</main>

<?php
    require_once('../include/footer.php');
?>