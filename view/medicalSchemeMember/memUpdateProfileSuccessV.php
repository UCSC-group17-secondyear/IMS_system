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
            <li><a href="memProfileV.php">Profile</a></li>
            <li>Update Success</li>
        </ul>

        <div class="banner">
            <div>
                <h2>Member Scheme Member</h2>
            </div>

        </div>
        <div class="content">
            <p>Your profile has been updated successfully..</p>

            <a href="memProfileV.php"><button type="submit">OK</button></a>
        </div>
    </div>
</main>

<?php
    require_once('../include/footer.php');
?>