<?php
    require '../basic/topnav.php';
?>

<main>
    <title>Profile Updated</title>
        <div class="sansserif">
            <ul class="breadcrumbs">
                <li><a href="mmHomeV.php">Home</a></li>
                <li class="active">Profile Updated</li>
            </ul>
        
            <div class="row">
                <div class="col left20">
                    <?php 
                        require('mmSideNavV.php');
                    ?>
                </div>

                <div class="col right80">
                    <div class="content">
                        <h2>Your profile has been updated successfully...</h2>

                        <a href="mmHomeV.php"><button class="mainbtn" type="submit">OK</button></a>
                    </div>
                </div>
        </div>
</main>

<?php
    require_once('../basic/footer.php');
?>