<?php
    require '../basic/topnav.php';
?>

<main>
    <title>Updated Profile</title>

    <div class="sansserif">
        <ul class="breadcrumbs">
            <li><a href="msmHomeV.php">Home</a></li>
            <li class="active">Registeration Error</li>
        </ul>
    
        <div class="row">
            <div class="col left20">
                <?php
                    require 'msmSideNavV.php';
                ?>
            </div>

            <div class="col right80">
                <div class="contentForm">
                    <div class="row">
                        <h2>Sorry! Yet you can't register to the Medical Scheme.</h2>
                    </div>

                    <button class="subbtn">
                        <a href="msmHomeV.php">Ok</a> 
                    </button>
                    <button class="cancelbtn">
                        <a href="msmHomeV.php">Exit</a> 
                    </button>
                </div>
            </div>
        </div>
    </div>
    
</main>

<?php
    require '../basic/footer.php';
?>