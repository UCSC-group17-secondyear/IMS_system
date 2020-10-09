<?php
    require "../header.php";
    require "amSideNavV.php";
?>

<main>
    <link rel="stylesheet" href="../assests/css/style.css">

    <ul class="breadcrumbs">
        <li><a href="amHomeV.php">Home</a></li>
        <li>View Semester Wise Attendance</li>
    </ul>
    
    <div class="container">
        <div>
            <h3>Semester Wise Attendance</h3>
        </div>

        <div class="content">
            <form action="amBatchWiseAttendanceV.php" method="post">
                <input type="number" name="calander_year" placeholder="Calander Year" required/>
                <input type="text" name="semester" placeholder="Semester" required/>
                <input type="text" name="degree" placeholder="Degree" required/>
                <input type="text" name="academic_year" placeholder="Academic Year" required/>
                <input type="text" name="subject" placeholder="Subject" required/>
                <button type="submit" name="select-submit" href="amDisplayAttendanceV.php">Display Attendance</button>
            </form>
        </div>
    </div>
</main>

<?php
    require "../footer.php";
?>