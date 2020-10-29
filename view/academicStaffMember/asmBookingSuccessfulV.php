<?php
    require '../basic/topnav.php';
?>

<main>
    <ul class="breadcrumbs">
        <li><a href="asmHomeV.php">Home</a></li>
        <li>Booking Successfull</li>
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
                    <p>Your booking request has been sent for the approval. You will be inform about the approval shortly.</p>
                    <p>Thank you..</p>
                    <a href="asmManageBookingV.php"><button class="mainbtn" type="submit" name="bookingSuccessful-submit">OK</button></a>
                </form>
            </div>
        </div>
    </div>
</main>
    
<?php
    require '../basic/footer.php';
?>