<?php
    require '../basic/topnav.php';
?>

<main>
    <title>Booking Details</title>

    <div class="sansserif">
        <ul class="breadcrumbs">
            <li><a href="hamHomeV.php">Home</a></li>
            <li>Booking Details</li>
        </ul>

        <div class="row">
            <div class="col left20">
                <?php
                    require 'hamSideNavV.php';
                ?>
            </div>

            <div class="col right80">
                <div>
                    <h2>Booking</h2>
                </div>

                <div class="contentForm">
                    <form action="" method="POST">
                        <div class="row">
                            <div class="col-25">
                                <label>Enter Date</label>
                            </div>
                            <div class="col-75">
                                <input type="date" id="" name="enterDate" placeholder="Date" required/><br>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-25">
                                <label>Select a Hall</label>
                            </div>
                            <div class="col-75">
                                <select name="hall" id="hall">
                                    <option value="">Select a Hall</option>
                                    <option value="E401">E401</option>
                                    <option value="S104">S104</option>
                                    <option value="W001">W001</option>
                                </select>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-25">
                              <label>Start time</label>
                            </div>
                            <div class="col-75">
                              <input type="time" id="" name="s_time" placeholder="Starting_time" required/><br>
                            </div>
                        </div>


                        <div class="row">
                            <div class="col-25">
                              <label>End time</label>
                            </div>
                            <div class="col-75">
                              <input type="time" id="" name="e_time" placeholder="Ending_time" required/><br>
                            </div>
                        </div>

                        <a href="hamBookingUpdateSaveV.php"><button class="mainbtn" type="submit" name="bookingUpdateSave-submit">Save Updates</button></a><br>
                    </form>
                    <form>
                        <a href="hamBookingRemoveV.php"><button class="cancelbtn" type="submit" name="bookingRemove-submit">Remove</button></a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</main>

<?php
    require '../basic/footer.php';
?>