<?php
    require "../basic/topnav.php";
?>

<main>
    <title>No Form Avaliable</title>
    <div class="sansserif">
        
            <ul class="breadcrumbs">
                <li><a href="moHomeV.php">Home</a></li>
                <li class="active">No Forms Avaliable</li>
            </ul>
        
        <div class="row" style="margin-bottom: 5%;">
            <div class="col left20">
                <?php 
                    require('moSideNavV.php');
                ?>
            </div>
            
            <div class="col right80">
                <form action="moHomeV.php" class="contentForm">
                    <div>
                        <h2>No Forms Avaliable</h2>
                    </div>

                    <button type="submit" class="subbtn">
                        <a href="moHomeV.php">Back</a>
                    </button>
                    <button type="submit" class="cancelbtn">
                        <a href="moHomeV.php">Exit</a>
                    </button>
                </form>
            </div>
        </div>
    </div>
</main>

<?php
    require_once('../basic/footer.php');
?>