<?php
    require "../header.php";
    require "hamSideNavV.php";
?>

<main>
    <link rel="stylesheet" href="../assests/css/main.css">
    
    <div class="container">
        <!-- <ul class="breadcrumb">
            <li><a href="hamHomeV.php">Home</a></li>
            <li>TT has been removed</li>
        </ul> -->
        
        <!-- <div class="header">
            <img src="../img/ims.jpg" alt="ims" class="logo">
            <div class="options">
                <a href="hamHomeV.php">Home</a>
                <a href="hamProfileV.php">Profile</a>
                <a href="#">Logout</a>
            </div>
        </div>
 -->

        <div class="content">
            <div>
                <p>The time table has been successfully removed</p>
            </div>

            <a href="hamManageWeeklyTimeTableV.php"><button type="submit" name="">Ok</button></a>

        </div>
    </div>
</main>
        
<?php
    require_once('../include/footer.php');
?>