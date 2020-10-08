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
            <li><a href="memUpdateClaimFormsV.php">Select Form</a></li>
            <li>Form</li>
        </ul>

        <div class="banner">
            <div>
                <h2>Medical Scheme Member</h2>
            </div>
        </div>
        <div class="content">
            <div>
                <h4>Form</h4>
            </div>
            <form action="" method="POST">
                <label for="name">Name</label>
                <input type="text" value=""> <br>
                <label for="empNo">Employee Number</label>
                <input type="text" value=""> <br>

                <!-- auto fill wenna one database eken -->
                <label for="bill">Scanned copy of bill</label><br><br>

            </form>

            <a href="memFormUpdateSuccessV.php"><button type="submit" name="">Submit</button></a><br>

        </div>
    </div>
</main>

<?php
    require_once('../include/footer.php');
?>