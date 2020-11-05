<?php
    require '../basic/topnav.php';
?>

<main>
    <title>Hall Details</title>

    <div class="sansserif">
        <ul class="breadcrumbs">
            <li><a href="asmHomeV.php">Home</a></li>
            <li><a href="asmHallDetailsV.php">View Hall Details</a></li>
            <li>Hall Details</li>
        </ul>

        <div class="row">
            <div class="col left20">
                <?php
                    require 'asmSideNavV.php';
                ?>
            </div>

            <div class="col right80">
                <div>
                    <h2>Hall Details</h2>
                </div>

                <table id="tableStyle">
                    <tr>
                        <th>Name</th>
                        <th>AC / Non AC</th>
                        <th>Capacity</th>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                </table>

                <button class="subbtn" type="submit" name="">
                    <a href="asmHallDetailsV.php">Select another hall</a>
                </button>

                <button id="myBtn" class="cancelbtn">Cancel</button>
                <div id="myModal" class="modal">
                    <div class="modal-content">
                        <span class="close">&times;</span>
                        <h1>Are you sure you want to leave the page?</h1>
                        <button class="mainbtn">
                            <a href="asmHomeV.php">Yes</a>
                        </button>
                    </div>
                </div>
               <!--  <button class="cancelbtn" type="submit" name="">
                    <a href="asmHomeV.php">Cancel</a>
                </button> -->
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