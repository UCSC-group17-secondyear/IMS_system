<?php
    require '../basic/topnav.php';
?>

<main>
    <title>Update Profile</title>

    <div class="sansserif">
        <ul class="breadcrumbs">
            <li><a href="amHomeV.php">Home</a></li>
            <li><a href="../../controller/basicControllers/viewProfileController.php?user_id=<?php echo $_SESSION['userId'] ?>">My Profile</a></li>
            <li class="active">Update Profile</li>
        </ul>

		<div class="row" style="margin-bottom: 4%;" >
			<div class="col left20">
				<?php
					require 'amSideNavV.php';
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
					<a href="amHomeV.php">
                        <button type="submit" class="cancelbtn">Cancel</button>
                    </a>
                </div>
            </div>
        </div>
    </div>
</main>

<?php
    require "../basic/footer.php";
?>