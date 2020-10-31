<?php
    require "../basic/topnav.php";
?>

<main>
    <title>Submit Successfull</title>

        <ul class="breadcrumbs">
            <li><a href="memHomeV.php">Home</a></li>
            <li><a href="memFillClaimFormsV.php">Select Form Type</a></li>
        </ul>

        <div class="row">
            <div class="col left20">
                <?php 
                    require('memSideNavV.php');
                ?>
            </div>
            
            <div class="col right80">
                <h2>Your form has been submitted succesfully.</h2>

                <a href="memHomeV.php"><button class="mainbtn" type="submit" name="">OK</button></a><br>
            </div>
        </div>
</main>

<?php
    require_once('../basic/footer.php');
?>