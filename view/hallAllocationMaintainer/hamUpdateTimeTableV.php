<?php
    require "../header.php";
    require "hamSideNavV.php";
?>

<main>
    <link rel="stylesheet" href="../assests/css/main.css">
    
    <div class="container">
        <ul class="breadcrumb">
            <li><a href="hamHomeV.php">Home</a></li>
            <li>Update time table</li>
        </ul>

        <!-- <div class="header">
            <img src="../img/ims.jpg" alt="ims" class="logo">
            <div class="options">
                <a href="hamHomeV.php">Home</a>
                <a href="hamProfileV.php">Profile</a>
                <a href="#">Logout</a>
            </div>
        </div> -->

        <div class="content">
            <div>
                <h3>Update/Remove Weekly Time Table</h3>
            </div>
            <br>

            <form action="" method="POST">
                <label for="subjectName">Subject Name:</label>
                <input type="text" value=""> <br>
                <label for="subjectCode">Subject Code:</label>
                <input type="text" value=""> <br>
                <label for="hall">Hall</label>
                <input type="text" value=""> <br>
                <label for="startTime">Start time:</label>
                <input type="time" value=""> <br>
                <label for="endTime">End Time:</label>
                <input type="time" value=""> <br>
            </form>
            <!-- meka database eken update wela enna ona -->

            <a href="hamSaveUpdateTimeTableV.php"><button type="submit" name="">Save Updates</button></a>
            <br>
            <br>
            <a href="hamRemoveTimeTableV.php"><button type="submit" name="">Remove</button></a>
        </div>
    </div>
</main>

<?php
    require_once('../include/footer.php');
?>