<?php
    require '../basic/topnav.php';
?>

<main>
    <title>Saved</title>
        <div class="sansserif">
                <ul class="breadcrumbs">
                    <li><a href="mmHomeV.php">Home</a></li>
                    <li><a href="mmMarkMahapolaSelectedStudentsV.php">Mark Mahapola Selected Students</a></li> 
                </ul>
           
            <div class="row">
                <div class="col left20">
                    <?php 
                        require('mmSideNavV.php');
                    ?>
                </div>

                <div class="col right80">
                    <div>
                        <h2>Saved Successfully</h2>
                    </div>
                    <div class="contentForm">
                        <a href="mmHomeV.php" ><button class="subbtn" type="submit" name="" >OK</button></a><br>
                    </div>
                </div>
            </div>
        </div>
</main>

<?php
    require_once('../basic/footer.php');
?>