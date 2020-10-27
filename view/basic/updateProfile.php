<main>
    <div class="contentForm">
        <form action="../../controller/updateProfileControllerTwo.php?user_id=<?php echo $_SESSION['userId'] ?>" method="post">

            <div class="row">
                <div class="col-25">
                    <label>Employee ID</label>
                </div>
                <div class="col-75">
                    <input type="text" name="empid" <?php echo 'value="'.$_SESSION['empid'].'"' ?> required><br>
                </div>
            </div>

            <div class="row">
                <div class="col-25">
                    <label>Your initials</label>
                </div>
                <div class="col-75">
                    <input type="text" name="initials" <?php echo 'value="'.$_SESSION['initials'].'"' ?> required/><br>
                </div>
            </div>

            <div class="row">
                <div class="col-25">
                    <label>Your surname</label>
                </div>
                <div class="col-75">
                    <input type="text" name="sname" <?php echo 'value="'.$_SESSION['sname'].'"' ?> required/> <br>
                </div>
            </div>

            <div class="row">
                <div class="col-25">
                    <label>Your E-mail</label>
                </div>
                <div class="col-75">
                    <input type="email" name="email" <?php echo 'value="'.$_SESSION['email'].'"' ?> required/> <br>
                </div>
            </div>

            <div class="row">
                <div class="col-25">
                    <label>Mobile Number</label>
                </div>
                <div class="col-75">
                    <input type="text" name="mobile" <?php echo 'value="'.$_SESSION['mobile'].'"' ?> required/> <br>
                </div>
            </div>

            <div class="row">
                <div class="col-25">
                    <label>Telephone Number</label>
                </div>
                <div class="col-75">
                    <input type="text" name="tp" <?php echo 'value="'.$_SESSION['tp'].'"' ?> required/> <br>
                </div>
            </div>

            <div class="row">
                <div class="col-25">
                    <label>Date of Birth</label>
                </div>
                <div class="col-75">
                    <input type="text" name="dob" <?php echo 'value="'.$_SESSION['dob'].'"' ?> required/> <br>
                </div>
            </div>

            <div class="row">
                <div class="col-25">
                    <label>Designation</label>
                </div>
                <div class="col-75">
                    <input type="text" name="designation" <?php echo 'value="'.$_SESSION['designation'].'"' ?> required/> <br>
                </div>
            </div>

            <div class="row">
                <div class="col-25">
                    <label>Appointment Date</label>
                </div>
                <div class="col-75">
                    <input type="text" name="appointment" <?php echo 'value="'.$_SESSION['appointment'].'"' ?> required> <br>
                </div>
            </div>

            <div class="row">
                <div class="col-25">
                    <label>Password</label>
                </div>
                <div class="col-75">
                    <span>******</span> | <a href="../../controller/updatePasswordController.php?user_id=<?php echo $_SESSION['userId'] ?>">Change Password</a> <br>
                </div>
            </div>
            <button class="mainbtn" type="submit" name="submit">Save Updates</button>
        </form>
        <form>
            <button class="cancelbtn" type="submit" name="cancel-submit">Cancel</button>
        </form>
    </div>
</main>