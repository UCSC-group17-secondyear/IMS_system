<?php
	require "../header.php";
?>

<main>
	<link rel="stylesheet" href="../assests/css/style.css">
	
	<ul class="breadcrumb">
        <li><a href="homePageV.php">Home</a></li>
        <li><a href="adminV.php">Admin Page</a></li>
        <li>Remove a User role</li>
    </ul>
    <?php
        require "aSideNavV.php";
    ?>

	<div class="formStyle">
		<form action="aRemoveUserRole.php" method="post">	
			<input type="text" name="userRole" placeholder="Enter User role" required>
			<button type="submit" name="remove-submit">Remove user role</button>
		</form>
	</div>
</main>

<?php
	require "../footer.php";
?>