<?php
	require "header.php";
?>

<main>
	<link rel="stylesheet" href="style.css">
	<!-- <div class="formstyle"> -->
		<h2>Assign User Roles</h2>
		<form action="assignUserRole.php" method="post">	
			<input type="text" name="empid" placeholder="Enter Employee Id" required>
			<input type="text" name="userRole" placeholder="Enter User Role" required>
			<button type="submit" name="userRole-submit">Save</button>
		</form>
	<!-- </div> -->
</main>

<?php
	require "footer.php";
?>