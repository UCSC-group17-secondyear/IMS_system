<?php
	require "header.php";
?>

<main>
    <link rel="stylesheet" href="/assests/css/style.css">
    <!-- <div class="formstyle"> -->
    <h2>Manage Attendance</h2>
    <form action="amManageStudentsDetails.php" method="POST">
        <a href="amEnterStudentDetails.php">Enter Student Details</a>
        <br>
        <a href="amDeleteUpdateStudent.php">Delete/Update Student Details</a>
        <br>
        <!-- <button type="submit" name="amEnterStudentDetails-submit">Enter Student Details</button>
        <br>
        <button type="submit" name="amDeleteUpdateStudent-submit">Delete/Update Student Details</button>
        <br> -->
    </form>
    <!-- </div> -->
</main>

<?php
	require "footer.php";
?>