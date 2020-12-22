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
                    <form action="../../controller/asmControllers/modifyBookingControllerTwo.php?booking_id=<?php echo $_SESSION['booking_id']?>&user_id=<?php echo $_SESSION['user_id']?>" method="post">
                        <div class="row">
                            <div class="col-25">
                                <label for="">Enter Date: </label>
                            </div>
                            <div class="col-75">
                                <input type="date" name="date" <?php echo 'value="'.$_SESSION['date'].'"' ?> required> <br>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-25">
                                <label for="">Enter Hall: </label>
                            </div>
                            <div class="col-75">
                                <select name="hall" id="hall" required>
                                    <option <?php echo 'value="'.$_SESSION['hall_name'].'"' ?>><?php echo $_SESSION['hall_name'] ?></option>
                                    <?php echo $_SESSION['halls'] ?>
                                </select>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-25">
                                <label for="">Start Time</label>
                            </div>
                            <div class="col-75">
                                <input type="time" name="startTime" <?php echo 'value="'.$_SESSION['start_time'].'"' ?> required> <br>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-25">
                                <label for="">End Time</label>
                            </div>
                            <div class="col-75">
                                <input type="time" name="endTime" <?php echo 'value="'.$_SESSION['end_time'].'"' ?> required> <br>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-25">
                                <label for="">Reason: </label>
                            </div>
                            <div class="col-75">
                                <input type="text" name="reason" <?php echo 'value="'.$_SESSION['reason'].'"' ?> required> <br> 
                            </div>
                        </div>

                        <button class="mainbtn" type="submit" name="submit">Update Booking</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

</main>

<?php
    require '../basic/footer.php';
?>