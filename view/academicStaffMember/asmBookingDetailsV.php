<?php
    require '../basic/topnav.php';
?>

<main>
    <title>Booking Details</title>

    <div class="sansserif">
        <ul class="breadcrumbs">
            <li><a href="asmHomeV.php">Home</a></li>
            <li>View Booking Details</li>
        </ul>

        <div class="row">
            <div class="col left20">
                <?php
                    require 'asmSideNavV.php';
                ?>
            </div>

            <div class="col right80">
                <div>
                    <h2>Booking</h2>
                </div>

                <div class="contentForm">
                    <form>
                        <a href="asmBookingUpdateSaveV.php"><button class="subbtn" type="submit" name="bookingUpdateSave-submit">Save Updates</button></a><br>
                        
                        <a href="asmBookingRemoveV.php"><button class="subbtn" type="submit" name="bookingRemove-submit">Remove</button></a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</main>
    
<?php
    require '../basic/footer.php';
?>