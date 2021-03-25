<?php
    require "../basic/topnav.php";
?>

<main>
    <title>No Records Avaliable</title>
    <div class="sansserif">
        
            <ul class="breadcrumbs">
                <li><a href="rvHomeV.php">Home</a></li>
                <li class="active">No Records Avaliable</li>
            </ul>
        
        <div class="row" style="margin-bottom: 5%;">
            <div class="col left20">
                <?php 
                    require('rvSideNavV.php');
                ?>
            </div>
            
            <div class="col right80">
                <form action="" class="contentForm">
                    <div>
                        <h2>No Records Avaliable</h2>
                    </div>

                    <button type="submit" class="mainbtn"><a href="rvHomeV.php">Exit</a></button>
                </form>
                
            </div>
        </div>
    </div>
</main>

<?php
    