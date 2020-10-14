<main>
    <title>View Claim Details</title>

    <?php
        require '../basic/header.php';
    ?>

    <div class="header">
        <ul class="breadcrumbs">
            <li><a href="rvHomeV.php">Home</a></li>
            <li>View Claim Details</li>
        </ul>
    </div>

    <div class="side-nav">
        <?php
            require 'rvSideNavV.php';
        ?>
    </div>

    <?php
        require '../basic/viewClaimDetails.php';
    ?>

    <?php
        require '../basic/footer.php';
    ?>
</main>