<main>
    <?php
        require('../basic/header.php');     
    ?>
    
    <div class="header">
        
    </div>

    <div class="side-nav">
        <?php 
          require('../mahapolaSchemeMaintainer/mmSideNavV.php');
        ?>
    </div>
    
    <div class="banner">
        <h2>Mahapola Scheme Maintainer</h2>
    </div>

    <div class="right-side-bar">
        <a href="../../controller/viewProfileController.php?user_id=<?php echo $_SESSION['userId'] ?>"><button type="submit" name="" class="button">Profile</button></a>
    </div>
    
    <?php
        require_once('../basic/footer.php');
    ?>
</main>