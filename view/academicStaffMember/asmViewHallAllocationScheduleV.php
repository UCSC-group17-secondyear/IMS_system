<?php
    require '../basic/topnav.php';
?>

<main>
    <title>View Hall Allocation Schedule</title>

    <div class="sansserif">
        <ul class="breadcrumbs">
            <li><a href="asmHomeV.php">Home</a></li>
            <li class="active">Hall Allocation Date</li>
        </ul>

        <div class="row">
            <div class="col left20">
                <?php
                    require 'asmSideNavV.php';
                ?>
            </div>

            <div class="col right80">
                <div>
                    <h2>Hall Allocation Schedule</h2>
                </div>

                <div class="contentForm">
                    <form action="" method="POST">
                        <div class="row">
                            <div class="col-25">
                              <label>Enter Date</label>
                            </div>
                            <div class="col-75">
                                <input type="date" id="" name="enterDate"/>
                            </div>
                        </div>

                        <div class="row">
                            <h4>Or Enter Date Range</h4>
                        </div><!-- 

                        <div class="row">
                            <div class="col-25">
                                <label><b>Or Enter Date Range</b></label>
                            </div>
                        </div> -->

                        <div class="row">
                            <div class="col-25">
                              <label>Enter Starting Date</label>
                            </div>
                            <div class="col-75">
                                <input type="date" id="" name="startDate" />
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-25">
                                <label>Enter Ending Date</label>
                            </div>
                            <div class="col-75">
                                <input type="date" id="" name="endDate" />
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-25">
                              <label>Enter Hall</label>
                            </div>
                            <div class="col-75">
                                <input type="text" id="" name="enterHall"/>
                            </div>
                        </div>

                        
                        <!-- <button type="submit" class="cancelbtn">
                            <a href="asmHomeV.php">Cancel</a>
                        </button> -->
                    </form>
                    <button class="subbtn" name="displayschedule-submit">
                        <a href="asmHallAllocationScheduleViewV.php">Display Schedule</a>
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