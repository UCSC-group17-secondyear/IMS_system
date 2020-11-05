<?php
    require '../basic/topnav.php';
?>

<main>
    <title>Update or Remove a subject</title>

    <ul class="breadcrumbs">
        <li><a href="amHomeV.php">home</a></li>
        <li>Update or Remove a subject</li>
    </ul>

    <div class="row">
        <div class="col left20">
            <?php
                require 'amSideNavV.php';
            ?>
        </div>

        <div class="col right80">
            <div>
                <h2>Update or Remove a subject</h2>
            </div>
            <div class="contentForm">
                <form action="" method="post">
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
                            <label>Enter Description</label>
                        </div>
                        <div class="col-75">
                            <input type="textarea" name="description" placeholder="Description" required/> <br>
                        </div>
                    </div>

                    <button class="mainbtn" type="submit" name="updateSubject-submit">Save Updates</button>
                </form>
                <button id="subBtn" class="subbtn">View Available Subjects List</button>
                <button id="myBtn" class="cancelbtn">Cancel</button>
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