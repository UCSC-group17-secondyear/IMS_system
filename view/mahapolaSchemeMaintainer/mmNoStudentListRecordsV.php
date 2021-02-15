<?php
    require "../basic/topnav.php";
?>

<main>
    <title>No Form Avaliable</title>
    <div class="sansserif">
        
            <ul class="breadcrumbs">
                <li><a href="mmHomeV.php">Home</a></li>
                <li><a href="../../controller/mmControllers/mahapolaNominatedListControllerOne.php">View Nominated List</a></li>
                <li class="active">No Records Avaliable</li>
            </ul>
        
        <div class="row" style="margin-bottom: 5%;">
            <div class="col left20">
                <?php 
                    require('mmSideNavV.php');
                ?>
            </div>
            
            <div class="col right80">
                <form action="../../controller/mmControllers/mahapolaNominatedListControllerOne.php" class="contentForm">
                    <div>
                        <h2>No Student Records Avaliable</h2>
                    </div>

                    <button  type="submit" class="subbtn">View Another List</button>
                    <button style="background-color:crimson" type="submit" class="cancelbtn"><a href="mmHomeV.php">Exit</a></button>
                </form>
                
            </div>
        </div>
    </div>
</main>

<?php
    require_once('../basic/footer.php');
?>