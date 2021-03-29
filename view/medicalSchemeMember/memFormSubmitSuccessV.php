<?php
    require "../basic/topnav.php";
?>

<main>
    <title>Submit Successfull</title>

        <ul class="breadcrumbs">
            <li><a href="memHomeV.php">Home</a></li>
            <li class="active">Form Submitted</li>
        </ul>

        <div class="row" style="margin-bottom: 5%;">
            <div class="col left20">
                <?php 
                    require('memSideNavV.php');
                ?>
            </div>
            
            <div class="col right80">
                <div  class="contentForm">
                    <h2>Your form has been submitted succesfully.</h2>

                    <button class="subbtn" type="submit" name=""><a href="memHomeV.php">Back</a></button>
                    <button class="cancelbtn" type="submit" name=""><a href="memHomeV.php">Exit</a></button>

                </div>
                
            </div>
        </div>
</main>

<?php
    require_once('../basic/footer.php');
?>