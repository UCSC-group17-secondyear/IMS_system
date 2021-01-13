<?php
    require "../basic/topnav.php";
?>

<main>
    <title>No Form Avaliable</title>
    <div class="sansserif">
        
            <ul class="breadcrumbs">
                <li><a href="moHomeV.php">Home</a></li>
                <li class="active">Update Success</li>
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
                        <h2>Form Updated Successfully</h2>
                    </div>

                    <button style="background-color:crimson" class="mainbtn">Exit</button>
                </form>
            </div>
        </div>
    </div>
</main>

<?php
    require_once('../basic/footer.php');
?>