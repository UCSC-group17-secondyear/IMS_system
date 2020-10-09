<main>
    <title>Schemem Details</title>

    <?php
        require('../basic/header.php');        
    ?>

    <div class="header">
        <ul class="breadcrumbs">
            <li><a href="mmHomeV.php">Home</a></li>
            <li>View Scheme Details</li>
        </ul>
    </div>

    <div class="side-nav">
        <?php 
            require('../mahapolaSchemeMaintainer/mmSideNavV.php');
        ?>
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

        <a href="mmHomeV.php"><button type="submit" name="">OK</button></a>
    </div>
   
    <div class="right-side-bar">
        <a href="../../controller/viewProfileController.php?user_id=<?php echo $_SESSION['userId'] ?>"><button type="submit" name="" class="button">Profile</button></a>
    </div>
    
    <?php
        require_once('../basic/footer.php');
    ?>
</main>