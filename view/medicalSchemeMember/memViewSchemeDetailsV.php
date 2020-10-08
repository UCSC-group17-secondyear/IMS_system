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
            <li>View Scheme Details</li>
        </ul>

        <div class="banner">
            <div>
                <h2>Medical Scheme Member</h2>
            </div>
        </div>
        <div class="content">
            <div>
                <h4>Scheme Details</h4>
            </div>

            <h3>Scheme 1 : </h3>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eius, voluptas cupiditate tenetur incidunt
                ab autem maiores optio inventore sunt dolor. Voluptate tenetur totam similique molestias labore ipsum
                architecto eius amet.</p>

            <h3>Scheme 2 : </h3>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eius, voluptas cupiditate tenetur incidunt
                ab autem maiores optio inventore sunt dolor. Voluptate tenetur totam similique molestias labore ipsum
                architecto eius amet.</p>

            <h3>Scheme 3 : </h3>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eius, voluptas cupiditate tenetur incidunt
                ab autem maiores optio inventore sunt dolor. Voluptate tenetur totam similique molestias labore ipsum
                architecto eius amet.</p>

            <a href="memHomeV.php"><button type="submit" name="">OK</button></a>
        </div>
    </div>
</main>

<?php
    require_once('../include/footer.php');
?>