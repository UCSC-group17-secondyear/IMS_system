<?php
    require '../basic/topnav.php';
?>

<main>
    <title>Profile</title>

    <div class="sansserif">
        <ul class="breadcrumbs">
            <li><a href="hamHomeV.php">Home</a></li>
            <li class="active">My Profile</li>
        </ul>

        <div class="row">
            <div class="col left20">
                <?php
                    require 'aSideNavV.php';
                ?>
            </div>

            <div class="col right80">
                <div>
                    <h2>Profile</h2>
                </div>
                <div class="signupForm">
                    <form action="../../controller/updateProfileController.php?user_id=<?php echo $_SESSION['userId'] ?>" method="post">
                        <div class="row">
	                        <div class="col-25">
	                            <label for="">Employee Id</label>
	                        </div>
	                        <div class="col-75">
	                            <input type="text" name="empid" <?php echo 'value="'.$_SESSION['empid'].'"' ?> disabled> <br>
	                        </div>
	                    </div>
                        <div class="row">
	                        <div class="col-25">
	                            <label for="">Initials of the name</label>
	                        </div>
	                        <div class="col-75">
	                            <input type="text" name="initials" <?php echo 'value="'.$_SESSION['initials'].'"' ?> disabled> <br>
	                        </div>
	                    </div>
                        <div class="row">
	                        <div class="col-25">
	                            <label for="">Surname</label>
	                        </div>
	                        <div class="col-75">
	                            <input type="text" name="sname" <?php echo 'value="'.$_SESSION['sname'].'"' ?> disabled> <br>
	                        </div>
	                    </div>
                        <div class="row">
	                        <div class="col-25">
	                            <label for="">Email</label>
	                        </div>
	                        <div class="col-75">
	                            <input type="email" name="email" <?php echo 'value="'.$_SESSION['email'].'"' ?> disabled> <br>
	                        </div>
	                    </div>
                        <div class="row">
	                        <div class="col-25">
	                            <label for="">Mobile Number</label>
	                        </div>
	                        <div class="col-75">
	                            <input type="text" name="mobile" <?php echo 'value="'.$_SESSION['mobile'].'"' ?> disabled> <br>
	                        </div>
	                    </div>
                        <div class="row">
	                        <div class="col-25">
	                            <label for="">Telephone Number</label>
	                        </div>
	                        <div class="col-75">
	                            <input type="text" name="tp" <?php echo 'value="'.$_SESSION['tp'].'"' ?> disabled> <br>
	                        </div>
	                    </div>
                        <div class="row">
	                        <div class="col-25">
	                            <label for="">Date of Birth</label>
	                        </div>
	                        <div class="col-75">
	                            <input type="text" name="dob" <?php echo 'value="'.$_SESSION['dob'].'"' ?> disabled> <br>
	                        </div>
	                    </div>
                        <div class="row">
	                        <div class="col-25">
	                            <label for="">Designation</label>
	                        </div>
	                        <div class="col-75">
	                            <input type="text" name="designation" <?php echo 'value="'.$_SESSION['designation'].'"' ?> disabled> <br>
	                        </div>
	                    </div>
                        <div class="row">
	                        <div class="col-25">
	                            <label for="">Appointment Date</label>
	                        </div>
	                        <div class="col-75">
	                            <input type="text" name="appointment" <?php echo 'value="'.$_SESSION['appointment'].'"' ?> disabled> <br>
	                        </div>
	                    </div>
                        <button type="submit" name="submit" class="mainbtn">Update Profile</button>
                    </form>
                    <a href="asmHomeV.php">
                        <button type="submit" class="cancelbtn">Cancel</button>
                    </a>
                </div>
            </div>
        </div>
    </div>
</main>

<?php
    require "../basic/footer.php";
?>