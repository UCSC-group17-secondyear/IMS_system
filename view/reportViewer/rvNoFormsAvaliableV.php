<?php
    require "../basic/topnav.php";
?>

<main>
    <title>No Form Avaliable</title>
    <div class="sansserif">
        
            <ul class="breadcrumbs">
                <li><a href="rvHomeV.php">Home</a></li>
                <li class="active">No Forms Available</li>
            </ul>
        
        <div class="row" style="margin-bottom: 5%;">
            <div class="col left20">
                <?php 
                    require('rvSideNavV.php');
                ?>
            </div>
            
            <div class="col right80">
                <div class="contentForm">
                    <form action="rvHomeV.php" class="">
                        <div>
                            <h2>No Forms Available</h2>
                        </div>

                        <button class="subbtn" type="submit" name="">
                                <a href="rvHomeV.php">Back</a>
                        </button>
                        <button class="cancelbtn" type="submit" name="">
                                <a href="rvHomeV.php">Exit</a>
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</main>

<?php
    require_once('../basic/footer.php');
?>