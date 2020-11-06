<?php
    require '../basic/topnav.php';
?>

<main>
    <title>Assign monthly sessions</title>

    <div class="sansserif">
        <ul class="breadcrumbs">
            <li><a href="aHomeV.php">Home</a></li>
            <li class="active">Assign monthly sessions</li>
        </ul>

        <div class="row">
            <div class="col left20">
                <?php
                    require 'aSideNavV.php';
                ?>
            </div>

            <div class="col right80">
                <div>
                    <h2>Assign monthly sessions to subjects</h2>
                </div>

                <div class="contentForm">
                    <form action="../../controller/adminControllers/manageMonthlySessionsC.php" method="post">
                        <div class="row">
                            <div class="col-25">
                              <label>Enter calendar year</label>
                            </div>
                            <div class="col-75">
                              <input type="text" name="year" placeholder="Calendar Year" required/><br>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-25">
                              <label>Enter month</label>
                            </div>
                            <div class="col-75">
                              <input type="text" name="month" placeholder="Month" required/><br>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-25">
                              <label>Enter subject</label>
                            </div>
                            <div class="col-75">
                              <input type="text" name="subject" placeholder="Subject" required/>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-25">
                              <label>Enter session type</label>
                            </div>
                            <div class="col-75">
                              <input type="text" name="sessionType" placeholder="Session type" required/>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-25">
                              <label>Enter number of sessions per month</label>
                            </div>
                            <div class="col-75">
                              <input type="text" name="numOfSessions" placeholder="Number of sessions per month" required/>
                            </div>
                        </div>

                        <button class="mainbtn" type="submit" name="addMSession-submit">Add session</button>
                    </form>

                    <button id="subBtn" class="subbtn">View Subjects List</button>
                    <button id="myBtn" class="cancelbtn">Cancel</button>
                    <!-- <form>
                        <button class="subbtn" type="submit" name="">
                            <a href="../../controller/adminControllers/manageMonthlySessionController.php">View Current Session Types</a>
                        </button>
                        <button type="submit" class="cancelbtn">
                            <a href="aHomeV.php">Cancel</a>
                        </button>
                    </form> -->
                </div>
                <div id="subModal" class="modal">
                    <div class="modal-content">
                        <span class="subclose">&times;</span>
                        <?php
                            require 'aSubjectsPopupV.php';
                        ?>
                    </div>
                </div>

                
                <div id="myModal" class="modal">
                    <div class="modal-content">
                        <span class="close">&times;</span>
                        <h1>Are you sure you want to leave the page?</h1>
                        <button class="mainbtn">
                            <a href="aHomeV.php">Yes</a>
                        </button>
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