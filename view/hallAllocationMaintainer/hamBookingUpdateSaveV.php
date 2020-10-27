<?php
    require '../basic/topnav.php';
?>

<main>
    <title>Remove a booking</title>

    <div class="sansserif">
        <ul class="breadcrumbs">
            <li><a href="hamHomeV.php">Home</a></li>
            <li>Remove a booking</li>
        </ul>

        <div class="row">
            <div class="col left20">
                <?php
                    require 'hamSideNavV.php';
                ?>
            </div>

            <div class="col right80">
                <div class="contentForm">
                    <form>
                        <h3>Your booking has been updated successfully.</h3>

                        <a href="hamUpdateBookingV.php"><button class="mainbtn" type="submit" name="bookingUpdateSuccess-submit">OK</button></a><br>
                    </form>
                </div>
            </div>
        </div>
    </div>
</main>

<?php
    require '../basic/footer.php';
?>