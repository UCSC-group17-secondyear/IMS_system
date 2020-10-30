<?php
    require '../basic/topnav.php';
?>

<main>
    <title>Profile</title>

    <div class="sansserif">
        <ul class="breadcrumbs">
            <li><a href="moHomeV.php">Home</a></li>
            <li>My Profile</li>
        </ul>

        <div class="row">
            <div class="col left20">
                <?php
                    require 'moSideNavV.php';
                ?>
            </div>

            <div class="col right80">
                <div>
                    <h2>Profile</h2>
                </div>
                <div class="profileForm">
                    <form action="../../controller/updateProfileController.php?user_id=<?php echo $_SESSION['userId'] ?>" method="post">
                        <label for="">Employee Id</label>
                        <input type="text" name="empid" <?php echo 'value="'.$_SESSION['empid'].'"' ?> disabled> <br>
                        <label for="">Initials of the name</label>
                        <input type="text" name="initials" <?php echo 'value="'.$_SESSION['initials'].'"' ?> disabled> <br>
                        <label for="">Surname</label>
                        <input type="text" name="sname" <?php echo 'value="'.$_SESSION['sname'].'"' ?> disabled> <br>
                        <label for="">Email</label>
                        <input type="email" name="email" <?php echo 'value="'.$_SESSION['email'].'"' ?> disabled> <br>
                        <label for="">Mobile Number</label>
                        <input type="text" name="mobile" <?php echo 'value="'.$_SESSION['mobile'].'"' ?> disabled> <br>
                        <label for="">Telephone Number</label>
                        <input type="text" name="tp" <?php echo 'value="'.$_SESSION['tp'].'"' ?> disabled> <br>
                        <label for="">Date of Birth</label>
                        <input type="text" name="dob" <?php echo 'value="'.$_SESSION['dob'].'"' ?> disabled> <br>
                        <label for="">Designation</label>
                        <input type="text" name="designation" <?php echo 'value="'.$_SESSION['designation'].'"' ?> disabled> <br>
                        <label for="">Appointment Date</label>
                        <input type="text" name="appointment" <?php echo 'value="'.$_SESSION['appointment'].'"' ?> disabled> <br>                    
                        <button type="submit" name="submit" class="mainbtn">Update Profile</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</main>

<?php
    require "../basic/footer.php";
?>

