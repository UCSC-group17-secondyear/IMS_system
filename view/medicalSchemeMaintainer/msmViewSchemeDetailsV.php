<main>
    <title>Medical Scheme Details</title>
    <?php
        require '../basic/header.php';
    ?>

    <div class="header">
        <ul class="breadcrumbs">
            <li><a href="msmHomeV.php">Home</a></li>
            <li>Scheme Details</li>
        </ul>
    </div>

    <div class="side-nav">
        <?php
            require 'msmSideNavV.php';
        ?>
    </div>

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

            <a href="msmHomeV.php"><button type="submit" name="">OK</button></a>
    </div>

    <div class="right-side-bar">
        <a href="../../controller/viewProfileController.php?user_id=<?php echo $_SESSION['userId'] ?>"><button type="submit" name="" class="button">Profile</button></a>
    </div>

    <?php
        require '../basic/footer.php';
    ?>

</main>
