<?php
    require "../header.php";
    require "amSideNavV.php";
?>
<main>
    <link rel="stylesheet" href="../assests/css/style.css">
    
    <div class="container">
        <ul class="breadcrumbs">
            <li><a href="amHomeV.php">Home</a></li>
            <li>Delete Attendance</li>
        </ul>

        <div class="content">
            <div>
                <h3>Delete Attendance</h3>
            </div>

            <form action="amDeleteAttendaceSearchV.php" method="post"> 
                <input type="date" name="date" placeholder="Date" required/>
                <input type="text" name="academic_year" placeholder="Academic Year" required/>
                <input type="text" name="degree" placeholder="Degree" required/>
                <input type="text" name="subject" placeholder="Subject" required/>
                <button type="submit" name="select-submit" href="amDeleteAttendaceV.php">Select</button>
            </form>
        </div>
    </div>
</main>

<?php
    require "../footer.php";
?>