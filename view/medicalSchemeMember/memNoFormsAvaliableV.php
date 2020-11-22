<?php
    require "../basic/topnav.php";
?>

<main>
    <title>Delete Claim Form</title>
    <div class="sansserif">
        
            <ul class="breadcrumbs">
                <li><a href="memHomeV.php">Home</a></li>
            </ul>
        
        <div class="row">
            <div class="col left20">
                <?php 
                    require('memSideNavV.php');
                ?>
            </div>
            
            <div class="col right80">
                <form action="memHomeV.php" class="contentForm">
                    <div>
                        <h2>No Forms Avaliable</h2>
                    </div>

                    <button class="mainbtn">Leave</button>
                </form>
            </div>
        </div>
    </div>
</main>

<?php
    require_once('../basic/footer.php');
?>