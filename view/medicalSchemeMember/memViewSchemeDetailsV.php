<?php
    require "../basic/topnav.php";
?>

<main>
    <title>Scheme Details</title>
    <div class="sansserif">   
            
                <ul class="breadcrumbs">
                    <li><a href="memHomeV.php">Home</a></li>
                    <li>Medical Scheme Details</li>
                </ul>
            
        <div class="row">
            <div class="col left20">
                <?php 
                    require('memSideNavV.php');
                ?>
            </div>

            <div class="col right80">
                    <?php
                        require '../basic/viewClaimDetails.php';
                    ?>
            </div>
        </div>
    </div>
</main>

<?php
    require_once('../basic/footer.php');
?>