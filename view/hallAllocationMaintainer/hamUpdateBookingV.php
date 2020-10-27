<?php
    require '../basic/topnav.php';
?>

<main>
    <title>Update Booking</title>

    <div class="sansserif">
        <ul class="breadcrumbs">
            <li><a href="hamHomeV.php">Home</a></li>
            <li>Update Booking</li>
        </ul>

        <div class="row">
            <div class="col left20">
                <?php
                    require 'hamSideNavV.php';
                ?>
            </div>

            <div class="col right80">
                <div>
                    <h2>Update / Remove Booking</h2>
                </div>

                <div class="contentForm">
                    <form action="" method="POST">
                        <div class="row">
                            <div class="col-25">
                                <label>Enter booking id</label>
                            </div>
                            <div class="col-75">
                                <input type="text" id="" name="bookingId"><br>
                            </div>
                        </div>
                        <a href="hamBookingDetailsV.php"><button type="submit" name="updateBooking-submit">OK</button></a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</main>

<?php
    require '../basic/footer.php';
?>