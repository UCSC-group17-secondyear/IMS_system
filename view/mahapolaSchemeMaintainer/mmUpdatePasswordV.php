<?php
    require '../basic/topnav.php';
?>

<main>
    <title>Update Password</title>

    <div class="sansserif">
        <ul class="breadcrumbs">
            <li><a href="mmHomeV.php">Home</a></li>
            <li><a href="mmProfileV.php">Profile</a></li>
            <li>Update Password</li>
        </ul>

        <div class="row">
            <div class="col left20">
                <?php
                    require 'mmSideNavV.php';
                ?>
            </div>

            <div class="col right80">
                <div>
                    <h2>Update Password</h2>
                </div>

                <div class="signupForm">
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

                        <button type="submit" name="submit" class="mainbtn">Save Password</button>
                    </form>
                    <a href="mmHomeV.php"><button type="submit" class="cancelbtn"  style="margin-left:310px;">Cancel</button></a>
                </div>
                
            </div>
        </div>
    </div>
</main>

<?php
    require "../basic/footer.php";
?>

