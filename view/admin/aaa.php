<?php
    require '../basic/topnav.php';
?>

<main>
    <div class="sansserif">
        <ul class="breadcrumbs">
            <li><a href="aHomeV.php">Home</a></li>
            <li><a href="aAddNewSchemeV.php">Add Scheme</a></li>
            <li class="active">Available schemes</li>
        </ul>

        <div class="row">
            <div class="col left20">
                <?php
                    require 'aSideNavV.php';
                ?>
            </div>

            <div class="col right80">
                <div>
                    <h2>Schemes List</h2>
                </div>

                <div class="contentForm">
                    <?php
                        require '../../controller/adminControllers/aViewSchemesC.php';
                    ?>
                </div>
            </div>
        </div>
    </div>
</main>

<?php
    require '../basic/footer.php';
?>