<?php
    require '../basic/topnav.php';
?>

<main>
    <title>Update Password</title>

    <ul class="breadcrumbs">
        <li><a href="asmHomeV.php">Home</a></li>
        <li><a href="asmProfileV.php">Profile</a></li>
        <li>Update Password</li>
    </ul>

    <div class="row">
        <div class="col left20">
            <?php
                require 'asmSideNavV.php';
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
                </form>
                <form>
                    <a href="asmHomeV.php"><button type="submit" class="cancelbtn">Cancel</button></a>
                </form>
                
            </div>
        </div>
    </div>
</main>

<?php
    require "../basic/footer.php";
?>