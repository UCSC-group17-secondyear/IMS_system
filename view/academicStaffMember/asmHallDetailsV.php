<?php
    require '../basic/topnav.php';
?>

<main>
    <title>Hall Details</title>

    <div class="sansserif">
        <ul class="breadcrumbs">
            <li><a href="asmHomeV.php">Home</a></li>
            <li class="active">View Hall Details</li>
        </ul>

        <div class="row">
            <div class="col left20">
                <?php
                    require 'asmSideNavV.php';
                ?>
            </div>

            <div class="col right80">
                <div>
                    <h2>Select Hall</h2>
                </div>

                <div class="contentForm">
                    <form action="../../controller/asmControllers/asmViewHallController.php" method="POST">
                        <div class="row">
                            <div class="col-25">
                              <label>Select Hall</label>
                            </div>
                            <div class="col-75">
                                <select name="hall" id="hall">
                                    <option value="">Select a Hall</option>
                                    <?php echo $_SESSION['halls'] ?>
                                </select>
                            </div>
                        </div>
                        
                        <button class="subbtn" type="submit" name="hall-submit">Display Details</button>
                        <button id="myBtn" class="cancelbtn">
                            <a href="asmHomeV.php">Cancel</a>
                        </button>
                        <!-- <button type="submit" class="cancelbtn">
                            <a href="asmHomeV.php">Cancel</a>
                        </button> -->
                    </form>

                    <!-- <div id="myModal" class="modal">
                        <div class="modal-content">
                            <span class="close">&times;</span>
                            <h1>Are you sure you want to leave the page?</h1>
                            <button class="mainbtn">
                                <a href="asmHomeV.php">Yes</a>
                            </button>
                        </div>
                    </div> -->
                </div>
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
    </script> -->

</main>
    
<?php
    require '../basic/footer.php';
?>