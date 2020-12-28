<?php
    require '../basic/topnav.php';
?>

<main>
    <title>Check Membership Acceptance</title>

    <div class="sansserif">
        <ul class="breadcrumbs">
            <li><a href="nasmHomeV.php">Home</a></li>
            <li class="active">Registeration Error</li>
        </ul>
    
        <div class="row">
            <div class="col left20">
                <?php
                    require 'nasmSideNavV.php';
                ?>
            </div>

            <div class="col right80">
                <div class="contentForm">
                    <div class="row">
                        <h2>You are already a member of Medical Scheme!</h2>
                    </div>

                    <button class="subbtn" type="submit">
                        <a href="nasmHomeV.php">Home</a>
                    <button type="submit" class="cancelbtn">
                        <a href="nasmHomeV.php">Cancel</a>
                    </button>
                </div>
            </div>
        </div>
    </div>
    
</main>

<?php
    require '../basic/footer.php';
?>