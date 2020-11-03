<?php
    require '../basic/topnav.php';
?>

<main>
    <title>Add a degree</title>

    <div class="sansserif">
        <ul class="breadcrumbs">
            <li><a href="aHomeV.php">Home</a></li>
            <li>Add a new degree</li>
        </ul>

        <div class="row">
            <div class="col left20">
                <?php
                    require 'aSideNavV.php';
                ?>
            </div>

            <div class="col right80">
                <div>
                    <h2>Add a new degree</h2>
                </div>

                <div class="contentForm">
                    <form action="../../controller/adminControllers/manageDegreesC.php" method="post">
                        <div class="row">
                            <div class="col-25">
                              <label>Enter Degree Name</label>
                            </div>
                            <div class="col-75">
                              <input type="text" id="" name="degree_name" placeholder="Degree name" required/><br>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-25">
                              <label>Enter Abbreviation/code</label>
                            </div>
                            <div class="col-75">
                              <input type="text" id="" name="degree_abbriviation" placeholder="Abbriviation" required/><br>
                            </div>
                        </div>

                        <button class="mainbtn" type="submit" name="addDegree-submit">Add degree</button>
                    </form>
                    
                    <form>
                        <button id="subBtn" class="subbtn">View Current Degree List</button>
                        <div id="subModal" class="modal">
                            <div class="modal-content">
                                <span class="close">&times;</span>
                                <?php
                                    require 'aDegreesPopupV.php';
                                ?>
                            </div>
                        </div>

                        <button id="myBtn" class="cancelbtn">Cancel</button>
                        <div id="myModal" class="modal">
                            <div class="modal-content">
                                <span class="close">&times;</span>
                                <h1>Are you sure you want to leave the page?</h1>
                                <button class="mainbtn">
                                    <a href="aHomeV.php">Yes</a>
                                </button>
                            </div>
                        </div>
                        <!-- <button type="submit" class="cancelbtn">
                            <a href="aHomeV.php">Cancel</a>
                        </button> -->
                    </form>
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

        // var modal2 = document.getElementById("subModal");
        // var btn2 = document.getElementById("subBtn");
        document.getElementById("subBtn").onclick = function() {
            document.getElementById("subModal").style.display = "block";
        }

        // When the user clicks on <span> (x), close the modal
        span.onclick = function() {
          modal.style.display = "none";
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