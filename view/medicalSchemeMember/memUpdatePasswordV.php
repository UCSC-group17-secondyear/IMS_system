<?php
    require '../basic/topnav.php';
?>

<main>
    <title>Update Password</title>

    <div class="sansserif">
        <ul class="breadcrumbs">
            <li><a href="memHomeV.php">Home</a></li>
            <li><a href="../../controller/viewProfileController.php?user_id=<?php echo $_SESSION['userId'] ?>">My Profile</a></li>
            <li><a href="../../controller/updateProfileController.php?user_id=<?php echo $_SESSION['userId'] ?>">Update Profile</a></li>
            <li class="active">Update Password</li>
        </ul>

        <div class="row" style="margin-bottom: 6%;">
            <div class="col left20">
                <?php
                    require 'memSideNavV.php';
                ?>
            </div>

            <div class="col right80">
                <div>
                    <h2>Update Password</h2>
                </div>

                <div class="contentForm">
                    <form action="../../controller/updatePasswordControllerTwo.php?user_id=<?php echo $_SESSION['userId'] ?>" method="post">
                        <div class="row">
                            <div class="col-25">
                              <label for="">New Password: </label>
                            </div>
                            <div class="col-75">
                              <input type="password" name="password" required> <br>
                            </div>
                        </div>
                        
                        <div class="row">
                            <div class="col-25">
                              <label for="">Confirm Password: </label>
                            </div>
                            <div class="col-75">
                              <input type="password" name="conpassword" required> <br>
                            </div>
                        </div>

                        <button type="submit" name="submit" class="subbtn">Save Password</button>
                        <button type="submit" class="cancelbtn">
                            <a href="memHomeV.php">Cancel</a>
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</main>

<?php
    require "../basic/footer.php";
?>