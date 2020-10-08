<?php
    require "../header.php";
    require "hamSideNavV.php";
?>

<main>
    <link rel="stylesheet" href="../assests/css/main.css">
    
    <div class="container">
        <ul class="breadcrumb">
            <li><a href="hamHomeV.php">Home</a></li>
            <li>Hall allocation schedule</li>
        </ul>

<!--         <div class="header">
            <img src="../img/ims.jpg" alt="ims" class="logo">
            <div class="options">
                <a href="hamHomeV.php">Home</a>
                <a href="hamProfileV.php">Profile</a>
                <a href="#">Logout</a>
            </div>
        </div> -->
        
        <div class="content">   
            <div>
                <h3>Hall Allocation Schedule</h3>
            </div>
            Enter Date
            <input type="date" id="" name="enterDate"><br>
            <a href="hamHallAllocationScheduleViewV.php"><button type="submit" name="displayschedule-submit">Display Schedule</button></a>
        </div>
    </div>
</main>
        
<?php
    require_once('../include/footer.php');
?>