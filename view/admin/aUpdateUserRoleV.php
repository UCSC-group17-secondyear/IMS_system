<?php
	require "../header.php";
?>

<main>
	<link rel="stylesheet" href="../assests/css/style.css">
	
	<ul class="breadcrumb">
        <li><a href="homePageV.php">Home</a></li>
        <li><a href="adminV.php">Admin Page</a></li>
        <li>Update User role</li>
    </ul>
    <?php
        require "aSideNavV.php";
    ?>

    <div class="formStyle">
		<form action="aUpdateUserRole.php" method="post">	
			<input type="text" name="empid" placeholder="Enter Employee Id" required>
			<input type="text" name="userRole" placeholder="Enter User Role" required>
			<button type="submit" name="userRole-submit">Save Updates</button>
		</form>
	</div>
</main>

<?php
	require "../footer.php";
?>