<?php
	require "header.php";
?>

<main>
    <link rel="stylesheet" href="/assests/css/style.css">
    <!-- <div class="formstyle"> -->
    <h2>Manage Attendance</h2>
    <form action="amManageSubjectsDetails.php" method="POST">
        <a href="amEnterSubjectDetails.php">Enter Subject Details</a>
        <br>
        <a href="amDeleteUpdateSubject.php">Delete/Update Subject Details</a>
        <br>
        <!-- <button type="submit" name="amEnterSubjectDetails-submit">Enter Subject Details</button>
        <br>
        <button type="submit" name="amDeleteUpdateSubject-submit">Delete/Update Subject Details</button>
        <br> -->
    </form>
    <!-- </div> -->
</main>

<?php
	require "footer.php";
?>