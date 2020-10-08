<?php
    require_once('../header.php');
    require_once('asmSideNavV.php');
?>

<main>
    <link rel="stylesheet" href="../assests/css/main.css">

    <div class="container">
        <!-- <div class="header">
            <img src="../img/ims.jpg" alt="ims" class="logo">
            <div class="options">
                <a href="asmHomeV.php">Home</a>
                <a href="asmProfileV.php">Profile</a>
                <a href="#">Logout</a>
            </div>
        </div> -->

        <div class="header">breadcrums</div>

        <?php
            require_once('asmSideNavV.php');
        ?>

        <div class="content">
            <div>
                <h3>Hall Allocation Schedule</h3>
            </div>
            Enter Date
            <input type="date" id="" name="enterDate"><br>
            <a href="asmHallAllocationScheduleViewV.php"><button type="submit" name="displayschedule-submit">Display
                    Schedule</button></a>
        </div>
    </div>
</main>

<?php
    require_once('../include/footer.php');
?>