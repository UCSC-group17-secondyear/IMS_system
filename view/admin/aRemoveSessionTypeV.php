<?php
    require '../basic/topnav.php';
?>

<main>
    <div class="sansserif">
        <ul class="breadcrumbs">
            <li><a href="aHomeV.php">Home</a></li>
            <li class="active">Remove session types</li>
        </ul>

        <div class="row">
            <div class="col left20">
                <?php
                    require 'aSideNavV.php';
                ?>
            </div>

            <div class="col right80">
                <div>
                    <h2>Remove a session type</h2>
                </div>

                <div class="contentForm">
                    <form action="../../controller/adminControllers/manageSessionsC.php" method="post">
                        <div class="row">
                            <div class="col-25">
                              <label>Select session type</label>
                            </div>
                            <div class="col-75">
                                <select name="sessionType" id="">
                                    <!-- <option value=""></option> -->
                                    <?php echo $_SESSION['sessionTypes'] ?>
                                </select>
                            </div>
                        </div>
                        <button class="subbtn" type="submit" name="removeSessionType-submit">Remove session type</button>

                        <button class="cancelbtn">
                            <a href="aHomeV.php">Cancel</a> 
                        </button>
                    </form>

                    <!-- <button class="subbtn" type="submit" name="removeSessionType-submit">
                        <a href="aUpdateSessionType.php">Update session type</a>
                    </button>
                    
                    <button id="myBtn" class="cancelbtn">Remove session type</button> -->
                    
                    <!-- <button type="submit" name="removeSession-submit" class="cancelbtn">Remove session type</button> -->
                </div>
                <!-- <div id="myModal" class="modal">
                    <div class="modal-content">
                        <span class="close">&times;</span>
                        <h1>Are you sure you want to remove the session type?</h1>
                        <button class="mainbtn">
                            <a href="aHomeV.php">Yes</a>
                        </button>
                    </div>
                </div> -->
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