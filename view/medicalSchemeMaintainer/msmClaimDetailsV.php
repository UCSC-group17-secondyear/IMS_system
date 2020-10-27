<?php
    require '../basic/topnav.php';
?>

<main>
    <title>Claim Details</title>

    <div class="sansserif">
        <ul class="breadcrumbs">
            <li><a href="msmHomeV.php">Home</a></li>
            <li>View Form List</li>
        </ul>

        <div class="row">
            <div class="col left20">
                <?php
                    require 'msmSideNavV.php';
                ?>
            </div>

            <div class="col right80">
                <div>
                    <h2>View Form List</h2>
                </div>

                <div class="contentForm">
                    <div>
                        <h4>OPD Claim details</h4>
                        <p></p>
                            <!-- methnta opd claim details tika danna -->

                        <h4>Surgical Hospitalization Claim Details</h4>
                        <p></p>
                            <!-- methnta surgical claim details tika danna -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

<?php
    require '../basic/footer.php';
?>