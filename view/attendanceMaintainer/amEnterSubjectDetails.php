<?php
    require '../basic/topnav.php';
?>

<main>
    <ul class="breadcrumbs">
        <li><a href="amHomeV.php">Home</a></li>
        <li class="active">Add Subject</li>
    </ul>

    <div class="row" style="margin-bottom: 4%;" >
        <div class="col left20">
            <?php
                require 'amSideNavV.php';
            ?>
        </div>

        <div class="col right80">
            <div>
                <h2>Add Subject</h2>
            </div>
            <div class="contentForm">
                <form action="../../controller/amControllers/manageSubjectsC.php" method="post">
                    <div class="row">
                        <div class="col-25">
                            <label>Enter Subject Code</label>
                        </div>
                        <div class="col-75">
                            <input type="text" name="subject_code" placeholder="Subject Code" required/> <br>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-25">
                            <label>Enter Subject Name</label>
                        </div>
                        <div class="col-75">
                            <input type="text" name="subject_name" placeholder="Subject Name" required/> <br>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-25">
                            <label>Enter Relavant Degree</label>
                        </div>
                        <div class="col-75">
                            <input type="textarea" name="degree" placeholder="Degree" required/> <br>
                        </div>
                    </div>
                    <button class="subbtn" type="submit" name="addSubject-submit">Add Subject</button>
                    
                    <button class="cancelbtn">
                        <a href="amHomeV.php">Cancel</a>
                    </button>
                </form>
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