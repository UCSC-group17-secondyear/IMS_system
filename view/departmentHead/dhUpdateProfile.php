<?php
    require '../basic/topnav.php';
?>

<main>
    <title>Update Profile</title>

    <div class="sansserif">
        <ul class="breadcrumbs">
            <li><a href="dhHomeV.php">Home</a></li>
            <li><a href="dhProfileV.php">My Profile</a></li>
            <li>Update Profile</li>
        </ul>

        <div class="row">
            <div class="col left20">
                <?php
                    require '../departmentHead/dhSideNavV.php';
                ?>
            </div>

            <div class="col right80">
                <div style="margin-top:-10px">
                    <h2>Update Profile</h2>
                </div>

                <div class="profileForm" style="margin-top:-1px">
                    <form action="../../controller/updateProfileControllerTwo.php?user_id=<?php echo $_SESSION['userId'] ?>" method="post">
                        <label for="">Employee Id</label>
                        <input type="text" name="empid" <?php echo 'value="'.$_SESSION['empid'].'"' ?> required> <br>
                        <label for="">Initials of the name</label>
                        <input type="text" name="initials" <?php echo 'value="'.$_SESSION['initials'].'"' ?> required> <br>
                        <label for="">Surname</label>
                        <input type="text" name="sname" <?php echo 'value="'.$_SESSION['sname'].'"' ?> required> <br>
                        <label for="">Email</label>
                        <input type="email" name="email" <?php echo 'value="'.$_SESSION['email'].'"' ?> required> <br>
                        <label for="">Mobile Number</label>
                        <input type="text" name="mobile" <?php echo 'value="'.$_SESSION['mobile'].'"' ?> required> <br>
                        <label for="">Telephone Number</label>
                        <input type="text" name="tp" <?php echo 'value="'.$_SESSION['tp'].'"' ?> required> <br>
                        <label for="">Date of Birth</label>
                        <input type="text" name="dob" <?php echo 'value="'.$_SESSION['dob'].'"' ?> required> <br>
                        <label for="">Designation</label>
                        <input type="text" name="designation" <?php echo 'value="'.$_SESSION['designation'].'"' ?> required> <br>
                        <label for="">Appointment Date</label>
                        <input type="text" name="appointment" <?php echo 'value="'.$_SESSION['appointment'].'"' ?> required> <br>                    
                        <label for="">Password: </label>
                        <span>******</span> | <a href="../../controller/updatePasswordController.php?user_id=<?php echo $_SESSION['userId'] ?>">Change Password</a> <br>
                        <button type="submit" name="submit" class="mainbtn">Save Updates</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</main>

<?php
    require "../basic/footer.php";
?>