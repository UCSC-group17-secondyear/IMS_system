<?php
    require "../basic/topnav.php";
?>

<main>
    <title>Register to Medical Scheme</title>

    <div class="sansserif">
        <ul class="breadcrumbs">
            <li><a href="nasmHomeV.php">Home</a></li>
            <li class="active">Register to the medical scheme - Part 1</li>
        </ul>

        <div class="row">
            <div class="col left20">
                <?php
                    require 'nasmSideNavV.php';
                ?>
            </div>
            <div class="col right80">
                <div>
                    <?php
                        require '../basic/registerToMedSchemeP1V.php';
                    ?>
                </div>
            </div>
        </div>
    </div>
</main>

<?php
    require '../basic/footer.php';
?>