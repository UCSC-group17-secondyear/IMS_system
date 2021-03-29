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
                    <form action="../../controller/asmControllers/addBookingController.php?user_id=<?php echo $_SESSION['userId'] ?>&hall=10" method="post">
                        <div class="row">
                            <div class="col-25">
                              <label>Enter Date</label>
                            </div>
                            <div class="col-75">
                                <input type="date" name="date" min="<?php echo date('Y-m-d')?>" max="<?php echo $_SESSION['max-date'] ?>" required/>
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

                        <button class="mainbtn" type="submit" name="add-book-submit" id="btnCompare" onclick="Compare">Continue</button>
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

    </script>

</main>

<?php
    require '../basic/footer.php';
?>