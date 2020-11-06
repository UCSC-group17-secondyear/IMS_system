<?php
    require '../basic/topnav.php';
?>

<main>
    <title>Profile</title>

    <div class="sansserif">
        <ul class="breadcrumbs">
            <li><a href="dhHomeV.php">Home</a></li>
            <li class="active">My Profile</li>
        </ul>

        <div class="row">
            <div class="col left20">
                <?php
                    require '../departmentHead/dhSideNavV.php';
                ?>
            </div>

            <div class="col right80">
				<?php
                    require '../basic/profileV.php';
                ?>
				<a href="dhHomeV.php">
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