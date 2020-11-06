<?php
    require '../basic/topnav.php';
?>

<main>
    <title>Booking Remove</title>

    <ul class="breadcrumbs">
        <li><a href="asmHomeV.php">Home</a></li>
        <li class="active">Removed a Booking</li>
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
                    <p>Your booking has been removed successfully.</p>
                    <a href="asmUpdateBookingV.php"><button type="submit" name="bookingRemoveSuccess-submit">OK</button></a><br>
                </form>
            </div>
        </div>
    </div>
</main>
    
<?php
    require '../basic/footer.php';
?>