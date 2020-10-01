<?php
	require "header.php";
?>

<main>
    <link rel="stylesheet" href="/assests/css/style.css">
    <!-- <div class="formstyle"> -->
    <h2>View Student Attendance Reports</h2>
    <form action="amViewAttendance.php" method="POST">
        <a href="amvaStudentWise.php">View Student Wise Attendance</a>
        <br>
        <a href="amvaMonthWise.php">View Student Wise Attendance</a>
        <br>
        <a href="amvaSubjectWise.php">View Student Wise Attendance</a>
        <br>
        <a href="amvaBatchWise.php">View Student Wise Attendance</a>
        <br>
        <a href="amvaSemesterWise.php">View Student Wise Attendance</a>
        <br>
        <!-- <button type="submit" name="vaStudentWise-submit">View Student Wise Attendance</button>
        <br>
        <button type="submit" name="vaMonthWise-submit">View Student Wise Attendance</button>
        <br>
        <button type="submit" name="vaSubjectWise-submit">View Student Wise Attendance</button>
        <br>
        <button type="submit" name="vaBatchWise-submit">View Student Wise Attendance</button>
        <br>
        <button type="submit" name="vaSemesterWise-submit">View Student Wise Attendance</button>
        <br> -->
    </form>
    <!-- </div> -->
</main>

<?php
	require "footer.php";
?>