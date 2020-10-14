<main>
    <title>View Scheme Details</title>
    <?php
        require '../basic/header.php';
    ?>

    <div class="header">
        <ul class="breadcrumbs">
            <li><a href="amHomeV.php">Home</a></li>
            <li>View Medical Schemeetails</li>
        </ul>
    </div>

    <div class="side-nav">
        <?php
            require '../attendanceMaintainer/amSideNavV.php';
        ?>
    </div>

    <?php
        require '../basic/viewClaimDetails.php';
    ?>

    <?php
        require '../basic/footer.php';
    ?>

</main>