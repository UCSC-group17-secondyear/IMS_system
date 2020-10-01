<html>

<head>
    <title>Attendance Maintainer Home</title>
    <link rel="stylesheet" href="/assests/css/style.css">
</head>

<body>
    <?php
        require "header.php";
    ?>
    <!-- <div class="titleStyle">
        <h2>Welcome to the Information Management System of UCSC</h2>
    </div> -->
    <div class="sidenav">
        <h2>Welcome to the Information Management System of UCSC</h2>
        <!-- <form action="adminPage.php" method="post"> -->
            <a href="amManageAttendance.php">Manage Attendance</a>
            <br>
            <a href="amViewAttendance.php">View Attendance</a>
            <br>
            <a href="amManageStudentsDetails.php">Manage Students' Details</a>
            <br>
            <a href="amManageSubjectsDetails.php">Manage Subjects' Details</a>
            <br>
            <a href="viewMedicalSchemeDetails.php">viewMedicalSchemeDetails</a>
            <br>
            <!-- <button type="submit" name="manageAttendance-submit">Manage Attendance</button>
            <br>
            <button type="submit" name="viewAttendance-submit">View Attendance</button>
            <br>
            <button type="submit" name="manageStudentsDetails-submit">Manage Students' Details</button>
            <br>
            <button type="submit" name="manageSubjectsDetails-submit">Manage Subjects' Details</button>
            <br>
            <button type="submit" name="viewMedicalSchemeDetails-submit">viewMedicalSchemeDetails</button>
            <br> -->
        </form>
    </div>
    <?php
        require "footer.php";
    ?>
</body>

</html>