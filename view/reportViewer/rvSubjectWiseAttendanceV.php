<?php
    require "../header.php";
    require "amSideNavV.php";
?>

<main>
    <link rel="stylesheet" href="../assests/css/style.css">

    <div class="container">
        <ul class="breadcrumb">
            <li><a href="homePageV.php">Home</a></li>
            <li><a href="rvHomeV.php">Attendance Maintainer Page</a></li>
            <li>View Subject Wise Attendance</li>
        </ul>

        <div class="content">
            <div>
                <h3>Subject Wise Attendance</h3>
            </div>

            <form action="rvSubjectWiseAttendanceV.php" method="post">
                <input type="text" name="academic_year" placeholder="Academic Year" required/>
                <input type="text" name="degree" placeholder="Degree" required/>
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