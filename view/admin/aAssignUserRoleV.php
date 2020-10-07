<?php
	require "../header.php";
	require "aSideNavV.php";
?>

<main>
	<link rel="stylesheet" href="../assests/css/style.css">
	
	<ul class="breadcrumb">
        <li><a href="adminV.php">Home</a></li>
        <li>Assign a User role</li>
    </ul>

    <div class="content">
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