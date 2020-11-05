<?php
    require '../basic/topnav.php';
?>

<main>

    <div class="sansserif">
        <ul class="breadcrumbs">
            <li><a href="aHomeV.php">Home</a></li>
            <li><a href="aRemoveUpdateDegreeV.php">Update or remove degree</a></li>
            <li>Update Degree</li>
        </ul>

        <div class="row">
            <div class="col left20">
                <?php
                    require 'aSideNavV.php';
                ?>
            </div>

            <div class="col right80">
                <div>
                    <h2>Update Degree</h2>
                </div>
                
                <div class="contentForm">
                    <form action="../../controller/aUpdateDegreeController.php" method="POST">
                        <div class="row">
                            <div class="col-25">
                                <label for="">Degree name</label>
                            </div>
                            <div class="col-75">
                                <input type="text" name="degree_name" <?php echo 'value="'.$_SESSION['degree_name'].'"' ?> required/><br>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-25">
                                <label for="">Degree code</label>
                            </div>
                            <div class="col-75">
                                <input type="text" name="degree_code" placeholder="degree code" required/><br>
                            </div>
                        </div>
                    </form>

                    <button id="subBtn" class="subbtn">Save updates</button>

                    <button id="myBtn" class="cancelbtn">Cancel</button>
                </div>
                <div id="myModal" class="modal">
                    <div class="modal-content">
                        <span class="close">&times;</span>
                        <h1>Are you sure you want to leave without updating?</h1>
                        <button class="mainbtn">
                            <a href="aRemoveUpdateDegreeV.php">Yes</a>
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