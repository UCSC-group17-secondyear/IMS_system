<?php
    require "../basic/topnav.php";
?>

<main>
    <title>No Records Avaliable</title>
    <div class="sansserif">
        
            <ul class="breadcrumbs">
                <li><a href="mmHomeV.php">Home</a></li>
                <li class="active">No Records Avaliable</li>
            </ul>
        
        <div class="row" style="margin-bottom: 5%;">
            <div class="col left20">
                <?php 
                    require('mmSideNavV.php');
                ?>
            </div>
            
            <div class="col right80">
                <form action="" class="contentForm">
                    <div>
                        <h2>No Records Avaliable</h2>
                    </div>

                    <button type="submit" class="subbtn"><a href="mmHomeV.php">Back</a></button>
                    <button type="submit" class="cancelbtn"><a href="mmHomeV.php">Exit</a></button>
                </form>
                
            </div>
        </div>
    </div>
</main>

<?php
    require_once('../basic/footer.php');
?>