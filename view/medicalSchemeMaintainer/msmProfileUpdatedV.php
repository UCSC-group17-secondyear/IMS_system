<?php
    require '../basic/topnav.php';
?>

<main>
    <title>Updated Profile</title>

    <div class="sansserif">
        <ul class="breadcrumbs">
            <li><a href="msmHomeV.php">Home</a></li>
            <li><a href="../../controller/basicControllers/updateProfileController.php?user_id=<?php echo $_SESSION['userId'] ?>">Profile</a></li>
            <li class="active">Action was success!</li>
        </ul>
    
        <div class="row">
            <div class="col left20">
                <?php
                    require 'msmSideNavV.php';
                ?>
            </div>

            <div class="col right80">
                <div class="contentForm">
                    <div class="row">
                        <h2>The Profile is updated successfully!</h2>
                    </div>

                    <button class="subbtn" type="submit">
                        <a href="../../controller/basicControllers/updateProfileController.php?user_id=<?php echo $_SESSION['userId'] ?>">Try Again</a>
                    </button>
                    <button class="cancelbtn" type="submit">
                        <a href="msmHomeV.php">Leave</a>
                    </button>
                </div>
            </div>
        </div>
    </div>
    
</main>

<?php
    require '../basic/footer.php';
?>