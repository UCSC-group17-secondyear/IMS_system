<?php
    require '../basic/topnav.php';
?>

<main>
    <title>View Medical Scheme Details</title>

    <div class="sansserif">
        <ul class="breadcrumbs">
            <li><a href="hamHomeV.php">Home</a></li>
            <li>View Medical Scheme Details</li>
        </ul>

        <div class="row">
            <div class="col left20">
                <?php
                    require 'hamSideNavV.php';
                ?>
            </div>

            <div class="col right80">
                <div>
                    <?php
                        require '../basic/schemeDetails.php';
                    ?>
                </div>
            </div>
        </div>
    </div>
</main>

<?php
    require '../basic/footer.php';
?>