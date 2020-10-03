<?php
	require "../header.php";
?>

<main>
	<link rel="stylesheet" href="../assests/css/style.css">
	
	<ul class="breadcrumb">
        <li><a href="homePageV.php">Home</a></li>
        <li><a href="adminV.php">Admin Page</a></li>
        <li>Add new User role</li>
    </ul>
    <?php
        require "aSideNavV.php";
    ?>

	<div class="formStyle">
		<form action="aAddNewUserRole.php" method="post">	
			<input type="text" name="userRole" placeholder="Enter User role" required>
			<input type="text" name="description" placeholder="Enter its description" required>
			<button type="submit" name="userRole-submit">Add user role</button>
		</form>
	</div>
</main>

<?php
	require "../footer.php";
?>