<?php
    require "../basic/topnav.php";
?>

<main>
    <title>Delete Claim Form</title>
    <div class="sansserif">
        
            <ul class="breadcrumbs">
                <li><a href="memHomeV.php">Home</a></li>
                <li class="active">Claim Form Deleted</li>
            </ul>
        
        <div class="row" style="margin-bottom: 4%;">
            <div class="col left20">
                <?php 
                    require('memSideNavV.php');
                ?>
            </div>
            
            <div class="col right80">
                <form action="memHomeV.php" class="contentForm">
                    <div>
                        <h2>Claim Form Deleted Succesfully</h2>
                    </div>
                    <button class="subbtn"><a href="memHomeV.php">Back</a></button>
                    <button class="cancelbtn">Exit</button>
                </form>
            </div>
        </div>
    </div>
</main>

<?php
    require_once('../basic/footer.php');
?>