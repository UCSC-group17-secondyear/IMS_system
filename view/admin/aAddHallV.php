<?php
    require '../basic/topnav.php';
?>

<main>
    <title>Add a hall</title>

    <div class="sansserif">
        <ul class="breadcrumbs">
            <li><a href="aHomeV.php">Home</a></li>
            <li class="active">Add a new hall</li>
        </ul>

        <div class="row">
            <div class="col left20">
                <?php
                    require 'aSideNavV.php';
                ?>
            </div>

            <div class="col right80">
                <div>
                    <h2>Add a new hall</h2>
                </div>

                <div class="contentForm">
                    <form action="../../controller/aAddHallController.php" method="POST">
                        <div class="row">
                            <div class="col-25">
                              <label>Hall Name</label>
                            </div>
                            <div class="col-75">
                                <input type="text" name="hall_name" placeholder="Enter hall name" required/>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-25">
                              <label>Hall Location</label>
                            </div>
                            <div class="col-75">
                                <input type="text" name="hall_location" placeholder="Enter hall location" required/>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-25">
                              <label>Seating Capacity</label>
                            </div>
                            <div class="col-75">
                                <input type="text" name="seating_capacity" placeholder="Enter seating capacity" required/>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-25">
                              <label>AC availability</label>
                            </div>
                            <div class="col-75">
                                <select name="ac"required>
                                    <option value="">Select AC availability: </option>
                                    <option value="1">A/C</option>
                                    <option value="0">Non A/C</option>
                                </select> 
                            </div>
                        </div>
                        <button class="mainbtn" type="submit" name="addHall-submit">Add Hall</button>
                    </form>
                    <button id="subBtn" class="subbtn">View current hall list</button>
                    <button id="myBtn" class="cancelbtn">Cancel</button>
                </div>
                <div id="subModal" class="modal">
                    <div class="modal-content">
                        <span class="subclose">&times;</span>
                        <?php
                            require 'aHallsPopupV.php';
                        ?>
                    </div>
                </div>

                
                <div id="myModal" class="modal">
                    <div class="modal-content">
                        <span class="close">&times;</span>
                        <h1>Are you sure that you want to leave the page?</h1>
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