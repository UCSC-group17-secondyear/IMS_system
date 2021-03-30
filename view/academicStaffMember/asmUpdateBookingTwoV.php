<?php
    require "../basic/topnav.php";
?>

<main>
    <title>Update Booking</title>

    <div class="sansserif">
        <ul class="breadcrumbs">
            <li><a href="asmHomeV.php">Home</a></li>
            <li class="active">Update Booking</li>
        </ul>
    
        <div class="row">
            <div class="col left20">
                <?php
                    require 'asmSideNavV.php';
                ?>
            </div>

            <div class="col right80">
                <div>
                    <h2>Update Booking</h2>
                </div>

                <div class="contentForm">
                    <form action="../../controller/asmControllers/modifyBookingController.php?booking_id=<?php echo $_SESSION['booking_id']?>&user_id=<?php echo $_SESSION['user_id']?>" method="post">
                        <div class="row">
                            <div class="col-25">
                            <label>Select Hall</label>
                            </div>
                            <div class="col-75">
                                <select name="hall" required>
                                    <option value="">Select Hall</option>
                                    <?php echo $_SESSION['available_halls'] ?>
                                </select>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-25">
                            <label>Reason</label>
                            </div>
                            <div class="col-75">
                                <input type="text" name="reason" <?php echo 'value="'.$_SESSION['reason'].'"' ?> required/>
                            </div>
                        </div>

                        <button class="mainbtn" type="submit" name="add-book-submit" id="btnCompare" onclick="Compare">Book</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

</main>

<?php
    require '../basic/footer.php';
?>