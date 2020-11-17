<?php
    require '../basic/topnav.php';
?>

<main>
    <title>Modify User</title>

    <ul class="breadcrumbs">
        <li><a href="aHomeV.php">Home</a></li>
        <li><a href="aUsersV.php">Users list</a></li>
        <li class="active">Modify User</li>
    </ul>

    <div class="row">
        <div class="col left20">
            <?php
                require '../admin/aSideNavV.php';
            ?>
        </div>

        <div class="col right80">
            <div>
                <h2>Modify User</h2>
            </div>
            <div class="signupForm">
                <form action="../../controller/aUpdateProfileController.php?user_id_Two=<?php echo $_SESSION['userIdTwo'] ?>&oldMail=<?php echo $_SESSION['email'] ?>" method="post">
                    <div class="row">
                        <div class="col-25">
                            <label for="">Employee Id</label>
                        </div>
                        <div class="col-75">
                            <input type="text" name="empid" <?php echo 'value="'.$_SESSION['empid'].'"' ?> required> <br>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-25">
                            <label for="">Initials of the name</label>
                        </div>
                        <div class="col-75">
                            <input type="text" name="initials" <?php echo 'value="'.$_SESSION['initials'].'"' ?> required> <br>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-25">
                            <label for="">Surname</label>
                        </div>
                        <div class="col-75">
                            <input type="text" name="sname" <?php echo 'value="'.$_SESSION['sname'].'"' ?> required> <br>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-25">
                            <label for="">Email</label>
                        </div>
                        <div class="col-75">
                            <input type="email" name="email" <?php echo 'value="'.$_SESSION['email'].'"' ?> required> <br>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-25">
                            <label for="">Mobile Number</label>
                        </div>
                        <div class="col-75">
                            <input type="text" name="mobile" <?php echo 'value="'.$_SESSION['mobile'].'"' ?> required> <br>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-25">
                            <label for="">Telephone Number</label>
                        </div>
                        <div class="col-75">
                            <input type="text" name="tp" <?php echo 'value="'.$_SESSION['tp'].'"' ?> required> <br>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-25">
                            <label for="">Date of Birth</label>
                        </div>
                        <div class="col-75">
                            <input type="text" name="dob" <?php echo 'value="'.$_SESSION['dob'].'"' ?> required> <br>
                        </div>
                    </div>
                    <div class="row">
						<div class="col-25">
							<label>Designation</label>
						</div>
						<div class="col-75">
							<select name="designation" required>
								<option value="<?php echo $_SESSION['designation'] ?>"><?php echo $_SESSION['designation'] ?></option>
								<?php echo $_SESSION['design'] ?>
							</select>
						</div>
                    </div>
                    <div class="row">
							<div class="col-25">
								<label>Post</label>
							</div>
							<div class="col-75">
								<select name="post" required>
									<option value="<?php echo $_SESSION['post'] ?>"><?php echo $_SESSION['post'] ?></option>
									<option value="post1">Post 1</option>
									<option value="post2">Post 2</option>
								</select>
							</div>
						</div>
                    <div class="row">
                        <div class="col-25">
                            <label for="">Appointment Date</label>
                        </div>
                        <div class="col-75">
                            <input type="text" name="appointment" <?php echo 'value="'.$_SESSION['appointment'].'"' ?> required> <br>
                        </div>
                    </div>
                    <button type="submit" name="submit" class="mainbtn">Save Updates</button>

                    <button id="myBtn" class="cancelbtn">
                        <a href="aUsersV.php">Cancel</a>
                    </button>
                    <!-- <div id="myModal" class="modal">
                        <div class="modal-content">
                            <span class="close">&times;</span>
                            <h1>Are you sure you want to leave the page?</h1>
                            <button class="mainbtn">
                                <a href="aHomeV.php">Yes</a>
                            </button>
                        </div>
                    </div> -->
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

        // When the user clicks anywhere outside of the modal, close it
        window.onclick = function(event) {
          if (event.target == modal) {
            modal.style.display = "none";
          }
        }
    </script>
    
</main>

<?php
    require "../basic/footer.php";
?>
