<main>
    <div class="contentForm">
        <form action="../../controller/updatePasswordControllerTwo.php?user_id=<?php echo $_SESSION['userId'] ?>" method="post">

            <div class="row">
                <div class="col-25">
                    <label>Employee ID</label>
                </div>
                <div class="col-75">
                    <input type="text" name="empid" <?php echo 'value="'.$_SESSION['empid'].'"' ?> disabled><br>
                </div>
            </div>

            <div class="row">
                <div class="col-25">
                    <label>Your initials</label>
                </div>
                <div class="col-75">
                    <input type="text" name="initials" <?php echo 'value="'.$_SESSION['initials'].'"' ?> disabled/><br>
                </div>
            </div>

            <div class="row">
                <div class="col-25">
                    <label>Your surname</label>
                </div>
                <div class="col-75">
                    <input type="text" name="sname" <?php echo 'value="'.$_SESSION['sname'].'"' ?> disabled/> <br>
                </div>
            </div>

            <div class="row">
                <div class="col-25">
                    <label>Your E-mail</label>
                </div>
                <div class="col-75">
                    <input type="email" name="email" <?php echo 'value="'.$_SESSION['email'].'"' ?> disabled/> <br>
                </div>
            </div>

            <div class="row">
                <div class="col-25">
                    <label>Mobile Number</label>
                </div>
                <div class="col-75">
                    <input type="text" name="mobile" <?php echo 'value="'.$_SESSION['mobile'].'"' ?> disabled> <br>
                </div>
            </div>

            <div class="row">
                <div class="col-25">
                    <label>Telephone Number</label>
                </div>
                <div class="col-75">
                    <input type="text" name="tp" <?php echo 'value="'.$_SESSION['tp'].'"' ?> disabled> <br>
                </div>
            </div>

            <div class="row">
                <div class="col-25">
                    <label>Date of Birth</label>
                </div>
                <div class="col-75">
                    <input type="text" name="dob" <?php echo 'value="'.$_SESSION['dob'].'"' ?> disabled> <br>
                </div>
            </div>

            <div class="row">
                <div class="col-25">
                    <label>Designation</label>
                </div>
                <div class="col-75">
                    <input type="text" name="designation" <?php echo 'value="'.$_SESSION['designation'].'"' ?> disabled> <br>
                </div>
            </div>

            <div class="row">
                <div class="col-25">
                    <label>Appointment Date</label>
                </div>
                <div class="col-75">
                    <input type="text" name="appointment" <?php echo 'value="'.$_SESSION['appointment'].'"' ?> disabled> <br>
                </div>
            </div>

            <div class="row">
                <div class="col-25">
                    <label>New Password</label>
                </div>
                <div class="col-75">
                    <input type="password" name="password" required> <br>
                </div>
            </div>

            <div class="row">
                <div class="col-25">
                    <label>Confirm Password</label>
                </div>
                <div class="col-75">
                    <input type="password" name="conpassword" required> <br>
                </div>
            </div>
            <button type="submit" class="mainbtn" name="pwd-submit">Save Password</button>
        </form>
        <form>
            <button type="submit" class="cancelbtn" name="cancel-submit">Cancel</button>
        </form>
    </div>
</main>