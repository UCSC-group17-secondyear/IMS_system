<?php
    require '../basic/topnav.php';
?>

<main>
    <title>Register Success</title>
        <div class="sansserif">
            
                <ul class="breadcrumbs">
                    <li><a href="mmHomeV.php">Home</a></li>
                </ul>
            
            <div class="row">
                <div class="col left20">
                    <?php 
                        require('mmSideNavV.php');
                    ?>
                </div>

                <div class="col right80">
                    <div class="contentForm">
                        <h2>
                            Your membership form has been sent for the approval. You will be inform about the membership later.<br>
                            Thank you..
                        </h2> 
                        <br>

                        <a href="mmHomeV.php"><button class="mainbtn" type="submit" name="registerSuccess-submit">OK</button></a><br>
                    </div>
                </div>
            </div>
        </div>
</main>

<?php
    require_once('../basic/footer.php');
?>