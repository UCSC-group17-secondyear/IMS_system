<main>
    <title>Nominated List</title>
    <?php
        require('../basic/header.php');    
    ?>

        
    <div class="header">
        <ul class="breadcrumb">
            <li><a href="mmHomeV.php">Home</a></li>
            <li><a href="mmViewMahapolaNominatedListV.php">View Mahapola Nominated List</a></li>
            <li>Nominated List</li>
        </ul>
    </div>

    <div class="side-nav">
        <?php 
            require('../mahapolaSchemeMaintainer/mmSideNavV.php');
        ?>
    </div>

    <div class="content">
        <div>
            <h4>Student List</h4>
        </div>

        <!-- pdf ekak generate kranna -->

        <a href="mmViewMahapolaNominatedListV.php" ><button type="submit" name="" >Back</button></a><br>
    </div>

    <div class="right-side-bar">
        <a href="../../controller/viewProfileController.php?user_id=<?php echo $_SESSION['userId'] ?>"><button type="submit" name="" class="button">Profile</button></a>
    </div>
    
    <?php
        require_once('../basic/footer.php');
    ?>
</main>