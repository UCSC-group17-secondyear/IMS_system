<?php
    require '../basic/topnav.php';
?>

<main>
    <title>Update Profile</title>

    <div class="sansserif">
        <ul class="breadcrumbs">
            <li><a href="nasmHomeV.php">Home</a></li>
            <li><a href="../../controller/viewProfileController.php?user_id=<?php echo $_SESSION['userId'] ?>">My Profile</a></li>
            <li class="active">Update Profile</li>
        </ul>

        <div class="row">
            <div class="col left20">
                <?php
                    require 'nasmSideNavV.php';
                ?>
            </div>

            <div class="col right80">
                <?php
                    require '../basic/updateProfileV.php';
                ?>
                <button type="submit" class="cancelbtn">
                    <a href="nasmHome.php">Cancel</a>
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