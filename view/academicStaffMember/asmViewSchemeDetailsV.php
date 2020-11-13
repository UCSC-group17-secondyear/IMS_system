<?php
    require '../basic/topnav.php';
?>

<main>
    <title>View Medical Scheme Details</title>

    <div class="sansserif">
        <ul class="breadcrumbs">
            <li><a href="asmHomeV.php">Home</a></li>
            <li class="active">Scheme Details</li>
        </ul>

        <div class="row">
            <div class="col left20">
                <?php
                    require 'asmSideNavV.php';
                ?>
            </div>

            <div class="col right80">
                <div>
                    <h2>Scheme Details</h2>
                </div>

                <table id="tableStyle" class="mytable">
                    <tr>
                        <th>Scheme Name</th>
                        <th>Maximum Room Charge</th>
                        <th>Hospital Charges</th>
                        <th>Annual Premium</th>
                        <th>Monthly Premium</th>
                        <th>Gvt No Paying Ward</th>
                        <th>Gvt Child Birth Cover</th>
                        <th>Travel Expenses Cover</th>
                        <th>Annual Limit</th>
                        <th>Consultant Fee</th>
                        <th>Investigations Cost</th>
                        <th>Spectacles Cost</th>
                        <th>Permanent Staff (required service period)</th>
                        <th>Contact Staff (required service period)</th>
                        <th>Temporary Staff (required service period)</th>
                    </tr>
                    <?php echo $_SESSION['scheme_list']; ?>
                </table>
                
                <!-- <button type="submit" class="subbtn">
                    <a href="">Register to medical scheme</a>
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