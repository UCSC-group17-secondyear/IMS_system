<?php
    require '../basic/topnav.php';
?>

<main>
    <title>Remove a scheme</title>

   <div class="sansserif">
        <ul class="breadcrumbs">
            <li><a href="aHomeV.php">Home</a></li>
            <li class="active">Remove a medical scheme</li>
        </ul>

        <div class="row">
            <div class="col left20">
                <?php
                    require 'aSideNavV.php';
                ?>
            </div>

            <div class="col right80">
                <div>
                    <h2>Remove a medical scheme</h2>
                </div>

                <div class="contentForm">
                    <form action="../../controller/adminControllers/manageSchemesC.php" method="POST">
                        <div class="row">
                            <div class="col-25">
                                <label>Select Scheme Name</label>
                            </div>
                            <div class="col-75">
                                <select name="schemeName" id="">
                                    <option value="">Select Scheme</option>
                                    <?php echo $_SESSION['schemes'] ?>
                                </select>
                              <!-- <input type="text" name="schemeName" placeholder="Scheme Name" required/><br> -->
                            </div>
                        </div>

                        <button class="subbtn" type="submit" name="removeScheme-submit">Remove</button>
                        <button class="cancelbtn">
                            <a href="aHomeV.php">Cancel</a>
                        </button>
                    </form>

                    <!-- <button id="subBtn" class="subbtn">View available schemes</button>
                    <button id="myBtn" class="cancelbtn">Cancel</button> --> 
                </div>

                <!-- <div id="subModal" class="modal">
                    <div class="modal-content">
                        <span class="subclose">&times;</span>
                        <?php
                            // require 'aSchemesPopupV.php';
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
                </div> -->
            </div>
        </div>
    </div>

    <!-- <script type="text/javascript">
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
    </script> -->

</main>

<?php
    require '../basic/footer.php';
?>