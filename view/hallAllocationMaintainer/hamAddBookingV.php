<?php
    require '../basic/topnav.php';
?>

<main>
    <title>Booking Details</title>

    <div class="sansserif">
        <ul class="breadcrumbs">
            <li><a href="hamHomeV.php">Home</a></li>
            <li class="active">Add a booking</li>
        </ul>

        <div class="row">
            <div class="col left20">
                <?php
                    require 'hamSideNavV.php';
                ?>
            </div>

            <div class="col right80">
                <div>
                    <h2>Add a Booking</h2>
                </div>

                <div class="contentForm">
                    <form action="../../controller/asmControllers/addBookingController.php?user_id=<?php echo $_SESSION['userId'] ?>" method="POST">
                        <div class="row">
                            <div class="col-25">
                              <label>Enter Date</label>
                            </div>
                            <div class="col-75">
                                <input type="date" name="date" required/>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-25">
                              <label>Enter Hall</label>
                            </div>
                            <div class="col-75">
                                <select name="hall" id="hall" required>
                                    <option value="">Select a Hall</option>
                                    <?php echo $_SESSION['halls'] ?>
                                </select>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-25">
                              <label>Start Time</label>
                            </div>
                            <div class="col-75">
                                <input type="time" name="startTime" required/>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-25">
                              <label>End Time</label>
                            </div>
                            <div class="col-75">
                                <input type="time" name="endTime" required/>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-25">
                              <label>Reason</label>
                            </div>
                            <div class="col-75">
                                <input type="text" name="reason" required/>
                            </div>
                        </div>

                        <button class="subbtn" type="submit" name="add-book-submit">Book</button>
                        <button class="cancelbtn" type="submit" name="add-book-submit"><a href="hamHomeV.php">Cancel</a></button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</main>
                
<?php
    require '../basic/footer.php';
?>