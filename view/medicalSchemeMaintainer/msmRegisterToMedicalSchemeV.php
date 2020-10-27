<?php
    require '../basic/topnav.php';
?>

<main>
    <title>Register to the Medical Scheme</title>

    <div class="sansserif">
        <ul class="breadcrumbs">
            <li><a href="msmHomeV.php">Home</a></li>
            <li>Register to the Medical Scheme</li>
        </ul>

        <div class="row">
            <div class="col left20">
                <?php
                    require '../medicalSchemeMaintainer/msmSideNavV.php';
                ?>
            </div>

            <div class="col right80">
                <div style="margin-top:-10px">
                    <h2>Register to the Medical Scheme</h2>
                </div>

                <div class="profileForm" style="margin-top:-1px">
                <form action="../../controller/memControllers/registerMSControllerTwo.php?user_id=<?php echo $_SESSION['userId'] ?>" method="post">
                        <label>Employee ID: </label>
                        <input type="text" name="empid" <?php echo 'value="'.$_SESSION['empid'].'"' ?> disabled>
                        <label>Your initials: </label>
                        <input type="text" name="initials" <?php echo 'value="'.$_SESSION['initials'].'"' ?> disabled/>
                        <label>Your surname: </label>
                        <input type="text" name="sname" <?php echo 'value="'.$_SESSION['sname'].'"' ?> disabled/>
                        <label>Your E-mail: </label>
                        <input type="email" name="email" <?php echo 'value="'.$_SESSION['email'].'"' ?> disabled/>
                        <label>Designation: </label>
                        <input type="text" name="designation" <?php echo 'value="'.$_SESSION['designation'].'"' ?> disabled> <br>
                        <label>Enter department</label>
                        <select name="department"required>
                            <option value="">Select department: </option>
                            <?php echo $_SESSION['deps'] ?>
                        </select>
                        <label>Health condition: </label>
                        <input name="health_condition" type="text" required> <br>
                        <label>Civil status</label>
                        <select name="civil_status" required>
                            <option value="">...</option>
                            <option value="married">Married</option>
                            <option value="unmarried">Unmarried</option>
                        </select> <br>
                        <label>Medical Scheme Type: </label>
                        <select name="scheme_name" id="schemename" required>
                            <option value="">Select Scheme</option>
                            <?php echo $_SESSION['scheme'] ?>
                        </select> <br>
                        <button  class="subbtn" type="submit" name="registerMS-submit">Register</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</main>

<?php
    require "../basic/footer.php";
?>