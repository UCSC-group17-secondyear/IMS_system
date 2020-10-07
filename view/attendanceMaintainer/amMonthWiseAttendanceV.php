<?php
    require "../header.php";
    require "amSideNavV.php";
?>

<main>
    <link rel="stylesheet" href="../assests/css/style.css">
    
    <div class="container">
        <ul class="breadcrumb">
            <li><a href="amHomeV.php">Home</a></li>
            <li>View Month Wise Attendance</li>
        </ul>

        <div class="content">
            <div>
                <h3>Month Wise Attendance</h3>
            </div>

            <form action="amMonthWiseAttendanceV.php" method="post">
                <input type="number" name="calander_year" placeholder="Calander Year" required/>
                <input type="text" name="month" placeholder="Month" required/>
                <input type="text" name="degree" placeholder="Degree" required/>
                <input type="text" name="academic_year" placeholder="Academic Year" required/>
                <input type="text" name="semester" placeholder="Semester" required/>
                <input type="text" name="subject" placeholder="Subject" required/>
                <button type="submit" name="select-submit" href="amDisplayAttendanceV.php">Display Attendance</button>
            </form>
        </div>
    </div>
</main>

<?php
    require "../footer.php";
?>