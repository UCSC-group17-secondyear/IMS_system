<?php
    require '../basic/topnav.php';
?>

<main>
    <title>Already Registered</title>

    <div class="sansserif">
        <ul class="breadcrumbs">
            <li><a href="aHomeV.php">Home</a></li>
            <li class="active">Registeration Error</li>
        </ul>
    
        <div class="row">
            <div class="col left20">
                <?php
                    require 'aSideNavV.php';
                ?>
            </div>

            <div class="col right80">
                <div class="contentForm">
                    <div class="row">
                        <h2>You have already registered to the Medical Scheme!</h2>
                    </div>

                    <button class="subbtn" type="submit">
                        <a href="aHomeV.php">Home</a>
                    <button type="submit" class="cancelbtn">
                        <a href="aHomeV.php">Cancel</a>
                    </button>
                </div>
            </div>
        </div>
    </div>
    
</main>

<?php
    require '../basic/footer.php';
?>