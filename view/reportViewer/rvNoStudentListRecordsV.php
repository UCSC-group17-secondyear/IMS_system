<?php
    require "../basic/topnav.php";
?>

<main>
    <title>No Form Avaliable</title>
    <div class="sansserif">
        
            <ul class="breadcrumbs">
                <li><a href="rvHomeV.php">Home</a></li>
                <li><a href="../../controller/rvControllers/mahapolaNominatedListC1.php">View Nominated List</a></li>
                <li class="active">No Records Avaliable</li>
            </ul>
        
        <div class="row" style="margin-bottom: 5%;">
            <div class="col left20">
                <?php 
                    require('rvSideNavV.php');
                ?>
            </div>
            
            <div class="col right80">
                <form action="../../controller/rvControllers/mahapolaNominatedListC1.php" class="contentForm">
                    <div>
                        <h2>No Student Records Avaliable</h2>
                    </div>

                    <button  type="submit" class="subbtn">View Another List</button>
                    <button style="background-color:crimson" type="submit" class="cancelbtn"><a href="rvHomeV.php">Exit</a></button>
                </form>
                
            </div>
        </div>
    </div>
</main>

<?php
    require_once('../basic/footer.php');
?>