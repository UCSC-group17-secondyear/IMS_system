<?php
    require "../basic/topnav.php";
?>

<main>
    <title>No Forms Avaliable</title>
    <div class="sansserif">
        
            <ul class="breadcrumbs">
                <li><a href="memHomeV.php">Home</a></li>
            </ul>
        
        <div class="row" style="margin-bottom: 5%;">
            <div class="col left20">
                <?php 
                    require('memSideNavV.php');
                ?>
            </div>
            
            <div class="col right80">
                <div class="contentForm">
                    <form action="memHomeV.php" >
                        <div>
                            <h2>No Forms Avaliable</h2>
                        </div>

                        <button  class="subbtn" ><a href="memHomeV.php">Back</a></button>
                        <button  class="cancelbtn"><a href="memHomeV.php">Exit</a></button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</main>

<?php
    require_once('../basic/footer.php');
?>