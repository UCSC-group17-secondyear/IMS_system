<?php
    require '../basic/topnav.php';
?>

<main>
    <title>Update or Remove a subject</title>

    <ul class="breadcrumbs">
        <li><a href="amHomeV.php">home</a></li>
        <li><a href="amDeleteUpdateSubjectSearch.php">Update or Delete Subjects</a></li>
        <li class="active">Subject Details</li>
    </ul>

    <div class="row" style="margin-bottom: 4%;" >
        <div class="col left20">
            <?php
                require 'amSideNavV.php';
            ?>
        </div>

        <div class="col right80">
            <div>
                <h2>Subject Details</h2>
            </div>
            <div class="contentForm">
                <form action="../../controller/amControllers/manageSubjectsC.php" method="post">
                    <div class="row">
                        <div class="col-25">
                            <label>Subject Code</label>
                        </div>
                        <div class="col-75">
                            <input type="text" name="subject_code"  <?php echo 'value="'.$_SESSION['subject_code'].'"' ?> />
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-25">
                            <label>Subject Name</label>
                        </div>
                        <div class="col-75">
                            <input type="text" name="subject_name"  <?php echo 'value="'.$_SESSION['subject_name'].'"' ?> />
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-25">
                            <label>Degree</label>
                        </div>
                        <div class="col-75">
                            <input type="text" name="degree"  <?php echo 'value="'.$_SESSION['degree'].'"' ?> />
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-25">
                            <label>Academic Year</label>
                        </div>
                        <div class="col-75">
                            <input type="number" name="academic_year"  <?php echo 'value="'.$_SESSION['academic_year'].'"' ?> />
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-25">
                            <label>Semester</label>
                        </div>
                        <div class="col-75">
                            <input type="number" name="semester"  <?php echo 'value="'.$_SESSION['semester'].'"' ?> />
                        </div>
                    </div>

                    <button class="subbtn" type="submit" name="updateSubject-submit">Save Updates</button>
                    <button class="cancelbtn" type="submit" name="remeoveSubject-submit">
                        <a href="amSubjectRemoved.php">Remove Subject</a> 
                    </button>
                </form>
                <!-- <button id="subBtn" class="subbtn">View Available Subjects List</button>
                <button id="myBtn" class="cancelbtn">Cancel</button> -->
            </div>

            <div id="subModal" class="modal">
                <div class="modal-content">
                    <span class="subclose">&times;</span>
                    <?php
                        require '../admin/aSubjectsPopupV.php';
                    ?>
                </div>
            </div>
            
            <div id="myModal" class="modal">
                <div class="modal-content">
                    <span class="close">&times;</span>
                    <h1>Are you sure you want to leave the page?</h1>
                    <button class="mainbtn">
                        <a href="amHomeV.php">Yes</a>
                    </button>
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