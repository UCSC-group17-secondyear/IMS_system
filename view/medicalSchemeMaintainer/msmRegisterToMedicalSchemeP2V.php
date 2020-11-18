<?php
    require "../basic/topnav.php";
?>

<main>
    <title>Register to Medical Scheme</title>

    <div class="sansserif">
        <ul class="breadcrumbs">
            <li><a href="msmHomeV.php">Home</a></li>
            <li class="active">Register to the medical scheme</li>
        </ul>

        <div class="row" style="margin-bottom:10px;">
            <div class="col left20">
                <?php
                    require 'msmSideNavV.php';
                ?>
            </div>
            <div class="col right80">
                <div>
                    <?php
                        require '../basic/registerToMedSchemeP2V.php';
                    ?>
                </div>
            </div>
        </div>
    </div>
</main>

<?php
    require '../basic/footer.php';
?>