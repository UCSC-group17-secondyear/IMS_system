<?php
    require '../basic/topnav.php';
?>

<main>
    <title>Medical Forms</title>

    <div class="sansserif">
        <ul class="breadcrumbs">
            <li><a href="msmHomeV.php">Home</a></li>
            <li>Medical Forms</li>
        </ul>

        <div class="row">
            <div class="col left20">
                <?php
                    require 'msmSideNavV.php';
                ?>
            </div>

            <div class="col right80">
                <div>
                    <h2>Medical Forms</h2>
                </div>

                <div class="contentForm">
                    <!-- database eken form eka pennanna -->
                    <!-- pdf eka generate krnna ona -->
                </div>
            </div>
        </div>
    </div>
</main>

<?php
    require '../basic/footer.php';
?>