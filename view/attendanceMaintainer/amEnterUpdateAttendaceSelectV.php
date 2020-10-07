<?php
    require "../header.php";
    require "amSideNavV.php";
?>
<main>
    <link rel="stylesheet" href="../assests/css/style.css">
    
    <div class="container">
        <ul class="breadcrumb">
            <li><a href="amHomeV.php">Home</a></li>
            <li>Enter or Update Attendance</li>
        </ul>

        <div class="content">
            <div>
                <h3>Enter or Update Attendance</h3>
            </div>
            
            <form action="amEnterUpdateAttendaceSelectV.php" method="post"> 
                <input type="date" name="date" placeholder="Date" required/>
                <input type="text" name="academic_year" placeholder="Academic Year" required/>
                <input type="text" name="degree" placeholder="Degree" required/>
                <input type="text" name="subject" placeholder="Subject" required/>
                <button type="submit" name="select-submit" href="amEnterUpdateAttendaceV.php">Select</button>
            </form>
        </div>
    </div>
</main>

<?php
    require "../footer.php";
?>