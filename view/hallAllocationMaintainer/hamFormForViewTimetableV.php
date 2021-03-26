<?php
    require '../basic/topnav.php';
?>

<main>
    <title>Form for View Weekly Timetable</title>

    <div class="sansserif">
        <ul class="breadcrumbs">
            <li><a href="hamHomeV.php">Home</a></li>
            <li class="active">View Weekly Time Table</li>
        </ul>

        <div class="row">
            <div class="col left20">
                <?php
                    require 'hamSideNavV.php';
                ?>
            </div>

            <div class="col right80">
                <div>
                    <h2>View Weekly Time Table</h2>
                </div>

                <div class="contentForm">
                    <form action="../../controller/hamControllers/hamViewTimeTableController.php?submit=1" method="post">
                        <div class="row">
                            <div class="col-25">
                              <label>Enter Semester</label>
                            </div>
                            <div class="col-75">
                                <select name="semester" id="hall" required>
                                    <option value="">Select Semester</option>
                                    <option value="1">First Semester</option>
                                    <option value="2">Second Semester</option>
                                </select>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-25">
                              <label>Enter Academic Year</label>
                            </div>
                            <div class="col-75">
                                <select name="aca_year" id="hall" required>
                                    <option value="">Select Academic Year</option>
                                    <?php echo $_SESSION['aca_year'] ?>
                                </select>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-25">
                              <label>Enter Batch year</label>
                            </div>
                            <div class="col-75">
                                <select name="batch_year" id="hall" required>
                                    <option value="">Select Batch year</option>
                                    <option value="1">1st year</option>
                                    <option value="2">2nd year</option>
                                    <option value="3">3rd year</option>
                                    <option value="4">4th year</option>
                                </select>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-25">
                              <label>Enter Degree</label>
                            </div>
                            <div class="col-75">
                                <select name="degree" id="hall" required>
                                    <option value="">Select Degree</option>
                                    <?php echo $_SESSION['degree'] ?>
                                </select>
                            </div>
                        </div>

                        <button class="subbtn" type="submit" name="submit-form">View Weekly Time Table</button>
                    
                        <button id="myBtn" class="cancelbtn">Cancel</button>
                    </form>
                    
                    <div id="myModal" class="modal">
                        <div class="modal-content">
                            <span class="close">&times;</span>
                            <h1>Are you sure you want to leave the page?</h1>
                            <button class="mainbtn">
                                <a href="hamHomeV.php">Yes</a>
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