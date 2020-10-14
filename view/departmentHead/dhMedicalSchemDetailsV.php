<main>
    <title>Scheme Details</title>
    <?php
        require '../basic/header.php';
    ?>

    <div class="header">
        <ul class="breadcrumbs">
            <li><a href="dhHomeV.php">Home</a></li>
            <li>Medical Scheme Details</li>
        </ul>
    </div>

    <div class="side-nav">
        <?php 
            require '../departmentHead/dhSideNavV.php';
        ?>
    </div>

    <?php
        require '../basic/viewClaimDetails.php';
    ?>
    
    <?php
        require_once('../basic/footer.php');
    ?>
</main>