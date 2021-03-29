<?php
    require '../basic/topnav.php';
?>

<main>
    <title>Add Booking</title>

    <div class="sansserif">
        <ul class="breadcrumbs">
            <li><a href="asmHomeV.php">Home</a></li>
            <li class="active">Add Booking</li>
        </ul>

        <div class="row">
            <div class="col left20">
                <?php
                    require 'asmSideNavV.php';
                ?>
            </div>

            <div class="col right80">
                <div>
                    <h2>Add a Booking</h2>
                </div>

                <div class="contentForm">
                    <form action="../../controller/asmControllers/addBookingController.php?user_id=<?php echo $_SESSION['userId'] ?>" method="post">
                        <div class="row">
                            <div class="col-25">
                              <label>Enter Date</label>
                            </div>
                            <div class="col-75">
                                <input type="date" name="date" min="<?php echo date('Y-m-d') ?>" required/>
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
                                <input type="time" name="startTime" id="txtStartTime" required/>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-25">
                              <label>End Time</label>
                            </div>
                            <div class="col-75">
                                <input type="time" name="endTime" id="txtEndTime" required/>
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

                        <button class="mainbtn" type="submit" name="add-book-submit" id="btnCompare" onclick="Compare">Book</button>
                    </form>
                    <button class="subbtn" type="submit" name="">
                        <a href="../../controller/asmControllers/viewBookingController.php?user_id=<?php echo $_SESSION['userId'] ?>">View my bookings</a>
                    </button>
                    
                    <button id="myBtn" class="cancelbtn">Cancel</button>
                    <div id="myModal" class="modal">
                        <div class="modal-content">
                            <span class="close">&times;</span>
                            <h1>Are you sure you want to leave the page?</h1>
                            <button class="mainbtn">
                                <a href="asmHomeV.php">Yes</a>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script type="text/javascript">
        var modal = document.getElementById("myModal");
        // Get the button that opens the modal
        var btn = document.getElementById("myBtn");
        // Get the <span> element that closes the modal
        var span = document.getElementsByClassName("close")[0];
        // When the user clicks on the button, open the modal
        btn.onclick = function() {
          modal.style.display = "block";
        }

        // When the user clicks on <span> (x), close the modal
        span.onclick = function() {
          modal.style.display = "none";
        }

        // var modal2 = document.getElementById("subModal");
        // var btn2 = document.getElementById("subBtn");
        document.getElementById("subBtn").onclick = function() {
            document.getElementById("subModal").style.display = "block";
        }

        

        // When the user clicks anywhere outside of the modal, close it
        window.onclick = function(event) {
          if (event.target == modal) {
            modal.style.display = "none";
          }
        }

        // Check start date and end date
        // function Compare() {
        //     var strStartTime = document.getElementById("txtStartTime").value;
        //     var strEndTime = document.getElementById("txtEndTime").value;

        //     var startTime = new Date().setHours(GetHours(strStartTime), GetMinutes(strStartTime), 0);
        //     var endTime = new Date(startTime)
        //     endTime = endTime.setHours(GetHours(strEndTime), GetMinutes(strEndTime), 0);

        //     if (startTime > endTime) {
        //         alert("Start Time is greater than end time");
        //     }
        //     if (startTime == endTime) {
        //         alert("Start Time equals end time");
        //     }
        //     if (startTime < endTime) {
        //         alert("Start Time is less than end time");
        //     }
        // }
        // function GetHours(d) {
        //     var h = parseInt(d.split(':')[0]);
        //     if (d.split(':')[1].split(' ')[1] == "PM") {
        //         h = h + 12;
        //     }
        //     return h;
        // }
        // function GetMinutes(d) {
        //     return parseInt(d.split(':')[1].split(' ')[0]);
        // }
    </script>

</main>

<?php
    require '../basic/footer.php';
?>