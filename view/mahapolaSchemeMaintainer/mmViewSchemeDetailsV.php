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

    <?php
        require '../basic/viewClaimDetails.php';
    ?>
    
    <?php
        require_once('../basic/footer.php');
    ?>
</main>