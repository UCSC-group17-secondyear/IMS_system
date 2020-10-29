<?php
    require '../basic/topnav.php';
?>

<main>
    <ul class="breadcrumbs">
        <li><a href="asmHomeV.php">Home</a></li>
        <li>Updated a Booking</li>
    </ul>

    <div class="row">
        <div class="col left20">
            <?php
                require 'asmSideNavV.php';
            ?>
        </div>

        <div class="col right80">
            <div class="contentForm">
                <form>
                    <p>Your booking has been updated successfully.</p>
                    <a href="asmUpdateBookingV.php"><button class="mainbtn" type="submit" name="bookingUpdateSuccess-submit">OK</button></a><br>
                </form>
            </div>
        </div>
    </div>
</main>