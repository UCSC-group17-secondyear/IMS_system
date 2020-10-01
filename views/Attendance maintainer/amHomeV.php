<html>
<head>
<title>Attendance Maintainer Home</title>
<link rel="stylesheet" href="/assests/css/style.css">
</head>
<body>
    <?php
        require "/views/header.php";
    ?>
    <!-- <div class="titleStyle"><h2>Welcome to the Information Management System of UCSC</h2></div> -->
    <div class="sidenav">
        <h2>Welcome to the Information Management System of UCSC</h2>
        <!-- <form action="adminPage.php" method="post">	 -->
            <a href="manageAttendance.php">Manage Attendance</a>
            <br>
            <a href="viewAttendance.php">View Attendance</a>
            <br>
            <a href="manageStudentsDetails.php">Manage Students' Details</a>
            <br>
            <a href="manageSubjectsDetails.php">Manage Subjects' Details</a>
            <br>
            <a href="viewMedicalSchemeDetails.php">viewMedicalSchemeDetails</a>
            <br>
           <!--  <button type="submit" name="manageUserRole-submit">Manage User Roles</button>
            <br>
            <button type="submit" name="manageMedicalPolicy-submit">Manage Medical Policies</button>
            <br>
            <button type="submit" name="manageDegrees-submit">Manage Degrees</button>
            <br>
            <button type="submit" name="manageSessions-submit">Manage Sessions</button>
            <br>
            <button type="submit" name="manageMonthlySessions-submit">Manage Sessions Per Month</button>
            <br>
            <button type="submit" name="manageSemester-submit">Manage Semesters</button>
            <br>
            <button type="submit" name="manageHalls-submit">Manage Halls</button>
            <br>
            <button type="submit" name="manageDepartments-submit">Manage Departments</button>
            <br>
            <button type="submit" name="manageDesignations-submit">Manage Designations</button> 
        </form>
    </div> -->
    </div>
    <?php
        require "/views/footer.php";
    ?>
</body>
</html>