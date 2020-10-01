<?php
	require "header.php";
?>

<main>
    <link rel="stylesheet" href="/assests/css/style.css">
    <!-- <div class="formstyle"> -->
    <h2>Manage Attendance</h2>
    <form action="amManageAttendance.php" method="POST">
        <a href="amEnterAttendance.php">Enter/Update Attendance</a>
        <br>
        <a href="amDeleteAttendance.php">Delete Attendance</a>
        <br>
        <!-- <button type="submit" name="enterAttendance-submit">Enter/Update Attendance</button>
        <br>
        <button type="submit" name="deleteAttendance-submit">Delete Attendance</button>
        <br> -->
    </form>
    <!-- </div> -->
</main>

<?php
	require "footer.php";
?>