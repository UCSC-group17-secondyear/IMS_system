<?php
    require '../basic/topnav.php';
?>

<main>
    <title>Check Membership Acceptance</title>

    <div class="sansserif">
        <ul class="breadcrumbs">
            <li><a href="hamHomeV.php">Home</a></li>
            <li class="active">Registeration Error</li>
        </ul>
    
        <div class="row">
            <div class="col left20">
                <?php
                    require 'hamSideNavV.php';
                ?>
            </div>

            <div class="col right80">
                <div class="contentForm">
                    <div class="row">
                        <h2>Sorry! Your request has been declined.</h2>
                    </div>

                    <button class="subbtn" type="submit">
                        <a href="hamHomeV.php">Home</a>
                    <button type="submit" class="cancelbtn">
                        <a href="hamHomeV.php">Cancel</a>
                    </button>
                </div>
            </div>
        </div>
    </div>
    
</main>

<?php
    require '../basic/footer.php';
?>