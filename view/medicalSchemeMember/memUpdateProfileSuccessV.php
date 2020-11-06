<?php
    require "../basic/topnav.php";
?>

<main>
    <title>Update Successfull</title>
    <div class="sansserif">
            
                <ul class="breadcrumbs">
                    <li><a href="memHomeV.php">Home</a></li>
                    <li><a href="memProfileV.php">Profile</a></li>
                    <li class="active">Update Success</li>
                </ul>
            
        <div class="row">
            
                <div class="col left20">
                    <?php 
                        require('memSideNavV.php');
                    ?>
                </div>

            <div class="col right80">
                <div class="contentForm">
                    <h2>Your profile has been updated successfully..</h2>

                    <a href="memHomeV.php"><button class="mainbtn" type="submit">OK</button></a>
                </div>
            </div>
        </div>
    </div>
</main>

<?php
    require_once('../basic/footer.php');
?>