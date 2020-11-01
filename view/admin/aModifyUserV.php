<?php
    require '../basic/topnav.php';
?>

<main>
    <title>Modify User</title>

    <div class="sanserif">
        <ul class="breadcrumbs">
            <li><a href="aHomeV.php">Home</a></li>
            <li><a href="aUsersV.php">Users list</a></li>
            <li>Modify User</li>
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
                <div class="signupForm" style="margin-top: 15px;">
                    <form action="../../controller/aUpdateProfileController.php?user_id=<?php echo $_SESSION['userId'] ?>" method="post">
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
	                            <label for="">Designation</label>
	                        </div>
	                        <div class="col-75">
	                            <input type="text" name="designation" <?php echo 'value="'.$_SESSION['designation'].'"' ?> required> <br>
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
                    </form>
                    <a href="aHomeV.php">
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
