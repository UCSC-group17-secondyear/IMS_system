<?php
    require '../basic/topnav.php';
?>

<main>
    <title>Bookings</title>

    <div class="sansserif">
        <ul class="breadcrumbs">
            <li><a href="hamHomeV.php">Home</a></li>
            <li><a href="../../controller/asmControllers/addBookingController.php?user_id=<?php echo $_SESSION['userId'] ?>">Add Booking</a></li>
            <li class="active">Action Failed!</li>
        </ul>

        <div class="row">
            <div class="col left20">
                <?php
                    require 'hamSideNavV.php';
                ?>
            </div>

            <div class="col right80">
                <div>
                    <h2></h2>
                </div>
                <div class="contentForm">
                    <div class="row">
                        <h2>Sorry! <br>
                            This slot is all ready booked.
                        </h2>
                    </div>

                    <button class="subbtn">
                        <a href="../../controller/asmControllers/addBookingController.php?user_id=<?php echo $_SESSION['userId'] ?>">Try Again</a>
                    </button>
                    <button class="cancelbtn">
                        <a href="hamHomeV.php">Leave</a> 
                    </button>
                </div>
            </div>
        </div>
    </div>
</main>

<?php
    require '../basic/footer.php';
?>