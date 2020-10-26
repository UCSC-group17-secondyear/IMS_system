<?php
    require '../basic/topnav.php';
?>

<main>
    <title>Update Password</title>

    <div class="sansserif">
        <ul class="breadcrumbs">
            <li><a href="hamHomeV.php">Home</a></li>
            <li><a href="hamProfileV.php">Profile</a></li>
            <li>Update Password</li>
        </ul>

        <div class="row">
            <div class="col left20">
                <?php
                    require 'hamSideNavV.php';
                ?>
            </div>

            <div class="col right80">
                <div>
                    <h2>Update Password</h2>
                </div>

                <?php
                    require '../basic/updatePwd.php';
                ?>
            </div>
        </div>
    </div>
</main>
                
<!-- <?php
    // require '../basic/footer.php';
?> -->