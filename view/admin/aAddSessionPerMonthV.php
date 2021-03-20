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
                                <label>Enter the calendar year</label>
                            </div>
                            <div class="col-75">
                                <input type="text" name="calendarYear" placeholder="Calendar Year" required/><br>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-25">
                              <label>Enter the month</label>
                            </div>
                            <div class="col-75">
                              <input type="number" name="month" placeholder="Month" min="1" max="12" required/><br>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-25">
                              <label>Select the degree</label>
                            </div>
                            <div class="col-75">
                                <select name="degree_name" id="">
                                    <?php echo $_SESSION['degreeList'] ?>
                                </select>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-25">
                              <label>Select the subject</label>
                            </div>
                            <div class="col-75">
                                <select name="subject_name" id="">
                                    <?php echo $_SESSION['subject_list'] ?>
                                </select>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-25">
                              <label>Select the session type</label>
                            </div>
                            <div class="col-75">
                                <select name="sessionType" id="">
                                    <?php echo $_SESSION['sessionTypes'] ?>
                                </select>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-25">
                              <label>Enter the number of sessions per month</label>
                            </div>
                            <div class="col-75">
                              <input type="text" name="numOfSessions" placeholder="Number of sessions per month" min="0" required/>
                            </div>
                        </div>

                        <button class="subbtn" type="submit" name="addMSession-submit">Add session</button>
                        <button class="cancelbtn" type="submit">
                            <a href="aHomeV.php">Cancel</a>
                        </button>
                    </form>

                    <!-- <button id="subBtn" class="subbtn">View Subjects List</button>
                    <button id="myBtn" class="cancelbtn">Cancel</button> -->
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