<?php
	require "../header.php";
?>

<main>
	<link rel="stylesheet" href="../assests/css/style.css">
	
	<ul class="breadcrumb">
        <li><a href="homePageV.php">Home</a></li>
        <li><a href="adminV.php">Admin Page</a></li>
        <li>Assign a User role</li>
    </ul>
    <?php
        require "aSideNavV.php";
    ?>

    <div class="formStyle">
		<form action="aAssignUserRole.php" method="post">	
			<input type="text" name="empid" placeholder="Enter Employee Id" required>
			<input type="text" name="userRole" placeholder="Enter User Role" required>
			<button type="submit" name="userRole-submit">Save</button>
		</form>
	</div>
</main>

<?php
	require "../footer.php";
?>