<?php
    require '../basic/topnav.php';
?>

<main>
    <title>Updated Password</title>

    <div class="sansserif">
        <ul class="breadcrumbs">
            <li><a href="memHomeV.php">Home</a></li>
            <li><a href="../../controller/updatePasswordController.php?user_id=<?php echo $_SESSION['userId'] ?>">Update Password</a></li>
            <li class="active">Action Failed!</li>
        </ul>

        <div class="row" style="margin-bottom: 5%;">
            <div class="col left20">
                <?php
                    require 'memSideNavV.php';
                ?>
            </div>

            <div class="col right80">
                <div class="contentForm">
                    <div class="row">
                        <h2>Sorry!
                            The Password you entered did not get updated.
                        </h2>
                    </div>

                    <button class="subbtn">
                        <a href="../../controller/updatePasswordController.php?user_id=<?php echo $_SESSION['userId'] ?>">Update Password</a>
                    </button>
                    <button class="cancelbtn">
                        <a href="memHomeV.php">Leave</a> 
                    </button>
                </div>
            </div>
        </div>
    </div>
</main>

<?php
    require '../basic/footer.php';
?>