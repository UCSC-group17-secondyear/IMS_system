<?php
    require '../basic/topnav.php';
?>

<main>
    <title>My Bookings</title>

    <div class="sansserif">
        <ul class="breadcrumbs">
            <li><a href="asmHomeV.php">Home</a></li>
            <li><a href="../../controller/asmControllers/viewBookingController.php?user_id=<?php echo $_SESSION['userId'] ?>">Booking List</a></li>
            <li class="active">Action Failed!</li>
        </ul>

        <div class="row">
            <div class="col left20">
                <?php
                    require 'asmSideNavV.php';
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
                        <a href="../../controller/asmControllers/viewBookingController.php?user_id=<?php echo $_SESSION['userId'] ?>">Booking List</a>
                    </button>
                    <button class="cancelbtn">
                        <a href="asmHomeV.php">Leave</a> 
                    </button>
                </div>
            </div>
        </div>
    </div>
</main>

<?php
    require '../basic/footer.php';
?>