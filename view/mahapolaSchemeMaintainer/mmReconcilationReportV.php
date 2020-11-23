<?php
    require '../basic/topnav.php';
?>

<main>
    <title>Nominated List</title>
        <div class="sansserif">
            <ul class="breadcrumbs">
                <li><a href="mmHomeV.php">Home</a></li>
                <li class="active">Reconcilation Report</li>
            </ul>
        
            <div class="row" style="margin-bottom: 4%;">
                <div class="col left20">
                    <?php 
                        require('mmSideNavV.php');
                    ?>
                </div>

                <div class="col right80">
                    <div>
                        <h2>Reconcilation Report</h2>
                    </div>

                
                    <a href="mmViewReportsMahapolaSchemeV.php" ><button class="subbtn" type="submit" name="" >View Another</button></a>
                    <a href="mmHomeV.php" ><button class="cancelbtn" type="submit" name="" >Exit</button></a>
                
                </div>
            </div>
        </div>
</main>

<?php
    require_once('../basic/footer.php');
?>