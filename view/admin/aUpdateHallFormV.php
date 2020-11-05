<?php
    require '../basic/topnav.php';
?>

<main>
    <title>Updated a hall</title>

    <div class="sansserif">
        <ul class="breadcrumbs">
            <li><a href="aHomeV.php">Home</a></li>
            <li>Update halls</li>
        </ul>

        <div class="row">
            <div class="col left20">
                <?php
                    require 'aSideNavV.php';
                ?>
            </div>

            <div class="col right80">
                <div>
                    <h2>Update a Hall</h2>
                </div>

                <div class="contentForm">
                    <form action="../../controller/aUpdateHallController.php" method="POST">
                        
                        <div class="row">
                            <div class="col-25">
                                <label>Enter Hall</label>
                            </div>
                            <div class="col-75">
                                <select name="hall" required>
                                <option value="">Select hall: </option>
                                <?php echo $_SESSION['halls'] ?>
                                </select>
                            </div>
                        </div>
                    
                        <button class="subbtn" type="submit" name="updateHall">Update Hall</button>
                        <button class="cancelbtn" type="submit" name="deleteHall" onclick="return confirm('Are you sure?');">Delete Hall</button>
                    </form>
                    <!-- <form>
                        <button type="submit" class="subbtn">
                            <a href="../../controller/aViewHallController.php">View current Halls</a>
                        </button>
                        <button type="submit" class="cancelbtn">
                            <a href="aHomeV.php">Cancel</a>
                        </button>
                    </form> -->
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