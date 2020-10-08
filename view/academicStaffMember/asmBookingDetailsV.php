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

        <ul class="breadcrumb">
            <li><a href="asmHomeV.php">Home</a></li>
            <li>View Booking Details</li>
        </ul>

        <div class="content">
            <div>
                <h3>Booking</h3>
            </div>

            <a href="asmBookingUpdateSaveV.php"><button type="submit" name="bookingUpdateSave-submit">Save
                    Updates</button></a><br>
            <a href="asmBookingRemoveV.php"><button type="submit" name="bookingRemove-submit">Remove</button></a>
        </div>
    </div>
</main>

<?php
    require_once('../include/footer.php');
?>