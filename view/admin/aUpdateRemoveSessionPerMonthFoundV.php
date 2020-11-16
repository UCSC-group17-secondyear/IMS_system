<?php
    require '../basic/topnav.php';
?>

<main>
    <title>Update or Remove a monthly session</title>

    <div class="sansserif">
        <ul class="breadcrumbs">
            <li><a href="aHomeV.php">Home</a></li>
            <li class="active">Update or remove a monthly session</li>
        </ul>

        <div class="row">
            <div class="col left20">
                <?php
                    require 'aSideNavV.php';
                ?>
            </div>

            <div class="col right80">
                <div>
                    <h2>Update or remove a monthly session</h2>
                </div>

                <div class="contentForm">
                    <form action="../../controller/adminControllers/manageMonthlySessionsC.php" method="post">
                        <div class="row">
                            <div class="col-25">
                                <label>Session ID</label>
                            </div>
                            <div class="col-75">
                                <input type="text" name="sessionMid"  <?php echo 'value="'.$_SESSION['sessionMid'].'"' ?> /><br>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-25">
                                <label>Subject</label>
                            </div>
                            <div class="col-75">
                                <input type="text" name="subject"  <?php echo 'value="'.$_SESSION['subject'].'"' ?> /><br>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-25">
                                <label>Session type</label>
                            </div>
                            <div class="col-75">
                                <input type="text" name="sessionType"  <?php echo 'value="'.$_SESSION['sessionType'].'"' ?>/><br>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-25">
                                <label>Calendar year</label>
                            </div>
                            <div class="col-75">
                                <input type="text" name="calendarYear"  <?php echo 'value="'.$_SESSION['calendarYear'].'"' ?> /><br>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-25">
                              <label>Select month</label>
                            </div>
                            <div class="col-75">
                                <select name="month">
                                    <option>January</option>
                                    <option>February</option>
                                    <option>March</option>
                                    <option>April</option>
                                    <option>May</option>
                                    <option>June</option>
                                    <option>July</option>
                                    <option>August</option>
                                    <option>September</option>
                                    <option>October</option>
                                    <option>November</option>
                                    <option>December</option>
                                </select>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-25">
                                <label>Number of sessions</label>
                            </div>
                            <div class="col-75">
                                <input type="text" name="numOfSessions"  <?php echo 'value="'.$_SESSION['numOfSessions'].'"' ?> /><br>
                            </div>
                        </div>

                        <button class="subbtn" type="submit" name="updateMonthlySession-submit">Save Updates</button>
                        <button class="cancelbtn" name="removeMonthlySession-submit">Remove</button>
                    </form>

                </div>
                <div id="myModal" class="modal">
                    <div class="modal-content">
                        <span class="close">&times;</span>
                        <h1>Are you sure you want to remove the session assign to the subject?</h1>
                        <button class="mainbtn">
                            <a href="aHomeV.php">Yes</a>
                        </button>
                    </div>
                </div>

                <div id="subModal" class="modal">
                    <div class="modal-content">
                        <span class="subclose">&times;</span>
                        <?php
                            require 'aSubjectsPopupV.php';
                        ?>
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

        var submodal = document.getElementById("subModal");
        var subbtn = document.getElementById("subBtn");
        var subspan = document.getElementsByClassName("subclose")[0];
        subbtn.onclick = function() {
          submodal.style.display = "block";
        }
        subspan.onclick = function() {
          submodal.style.display = "none";
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