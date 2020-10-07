<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Scheme Details</title>
    <link rel="stylesheet" href="../css/main.css">
</head>

<body>
    <div class="container">

        <div class="header">
            <!-- <div class="nameLogo"> -->
            <img src="../img/ims.jpg" alt="ims" class="logo">
            <!-- </div> -->
            <div class="options">
                <a href="asmHomeV.php">Home</a>
                <a href="asmProfileV.php">Profile</a>
                <a href="#">Logout</a>
            </div>
        </div>

        <div class="header">breadcrums</div>

        <?php
            require_once('asmSideNavV.php');
        ?>

        <div class="content">
            <div>
                <h3>Scheme Details</h3>
            </div>
            <h4>Scheme 1 : </h4>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eius, voluptas cupiditate tenetur incidunt
                ab autem maiores optio inventore sunt dolor. Voluptate tenetur totam similique molestias labore ipsum
                architecto eius amet.</p>

            <h4>Scheme 2 : </h4>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eius, voluptas cupiditate tenetur incidunt
                ab autem maiores optio inventore sunt dolor. Voluptate tenetur totam similique molestias labore ipsum
                architecto eius amet.</p>

            <h4>Scheme 3 : </h4>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eius, voluptas cupiditate tenetur incidunt
                ab autem maiores optio inventore sunt dolor. Voluptate tenetur totam similique molestias labore ipsum
                architecto eius amet.</p>

            <a href="asmHomeV.php"><button type="submit" name="">OK</button></a>
        </div>

        <div class="footer">
            <?php
                require_once('../include/footer.php');
            ?>
        </div>
    </div>
</body>

</html>