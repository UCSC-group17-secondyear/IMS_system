<?php
    require '../basic/topnav.php';
?>

<main>
    <title>Update Profile</title>

    <div class="sansserif">
        <ul class="breadcrumbs">
            <li><a href="nasmHomeV.php">Home</a></li>
            <li><a href="../../controller/basicControllers/viewProfileController.php?user_id=<?php echo $_SESSION['userId'] ?>">My Profile</a></li>
            <li class="active">Update Profile</li>
        </ul>

        <div class="row">
            <div class="col left20">
                <?php
                    require 'nasmSideNavV.php';
                ?>
            </div>

            <div class="col right80">
                <div>
                    <h2>Update Profile</h2>
                </div>

                <div class="signupForm">
                    <?php
    					require '../basic/updateProfileV.php';
					?>
					<a href="nasmHomeV.php">
                        <button type="submit" class="cancelbtn">Cancel</button>
                    </a>
                </div>
                <button onclick="topFunction()" id="myTopBtn" title="Go to top"><i class="fa fa-arrow-circle-up"></i> Top</button>

                <script type="text/javascript">
                    var mybutton = document.getElementById("myTopBtn");
                    function topFunction() {
                        document.body.scrollTop = 0;
                        document.documentElement.scrollTop = 0;
                    }
                </script>
            </div>
        </div>
    </div>
</main>

<?php
    require "../basic/footer.php";
?>