<?php
    require "../header.php";
    require "amSideNavV.php";
?>

<main>
    <link rel="stylesheet" href="../assests/css/style.css">
    <div class="container">
        <ul class="breadcrumb">
            <li><a href="rvHomeV.php">Home</a></li>
            <li>View Student Wise Attendance</li>
        </ul>

        <div class="content">
            <div>
                <h3>Student Wise Attendance</h3>
            </div>

            <form action="rvStudentWiseAttendanceV.php" method="post">
                <input type="text" name="student_index" placeholder="Student Index" required/>
                <input type="text" name="degree" placeholder="Degree" required/>
                <input type="text" name="academic_year" placeholder="Academic Year" required/>
                <input type="text" name="semester" placeholder="Semester" required/>
                <input type="text" name="subject" placeholder="Subject" required/>
                <input type="date" name="start_date" placeholder="Start Date" required/>
                <input type="date" name="end_date" placeholder="End Date" required/>
                <button type="submit" name="select-submit" href="#">Display Attendance</button>
            </form>
        </div>
    </div>
</main>

<?php
    require "../footer.php";
?>