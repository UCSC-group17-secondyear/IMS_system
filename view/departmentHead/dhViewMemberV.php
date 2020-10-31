<?php
    require "../basic/topnav.php";
?>

<main>
    <title>Register to Medical Scheme</title>

    <div class="sansserif">
        <ul class="breadcrumbs">
            <li><a href="dhHomeV.php">Home</a></li>
            <li>Registration to medical scheme</li>
        </ul>

        <div class="row">
            <div class="col left20">
                <?php
                    require 'dhSideNavV.php';
                ?>
            </div>

            <div class="col right80">
                <div>
                    <h2>Register to Staff Medical Scheme</h2>
                </div>

                <div class="contentForm">
                    <form action="../../controller/dhviewMemberFormC.php" method="post">  <!-- Menna methenanin mee inna userge a qwe...
                    view karana userge user id eka yawannone mata-->
                        <p>   
                            <label>Employee ID: </label>
                            <input type="text" name="empid" <?php echo 'value="'.$_SESSION['empid'].'"' ?> disabled>
                        </p>
                        <p>
                            <label>Your initials: </label>
                            <input type="text" name="initials" <?php echo 'value="'.$_SESSION['initials'].'"' ?> disabled/>
                        </p>
                        <p>
                            <label>Your surname: </label>
                            <input type="text" name="sname" <?php echo 'value="'.$_SESSION['sname'].'"' ?> disabled/>
                        </p>
                        <p>
                            <label>Your E-mail: </label>
                            <input type="email" name="email" <?php echo 'value="'.$_SESSION['email'].'"' ?> disabled/>
                        </p>
                        <p>
                            <label>Designation: </label>
                            <input type="text" name="designation" <?php echo 'value="'.$_SESSION['designation'].'"' ?> disabled> <br>
                        </p>
                        <p>  
                            <label>Enter department</label>
                            <input type="text" name="designation" <?php echo 'value="'.$_SESSION['department'].'"' ?> disabled> <br>
                        </p>
                        <p>   
                            <label>Health condition: </label>
                            <input type="text" name="designation" <?php echo 'value="'.$_SESSION['healthcondition'].'"' ?> disabled> <br>
                        </p>
                        <p>
                            <label>Civil status</label>
                            <input type="text" name="designation" <?php echo 'value="'.$_SESSION['civilstatus'].'"' ?> disabled> <br>
                        </p>
                        <p>   
                            <label>Medical Scheme Type: </label>
                            <input type="text" name="designation" <?php echo 'value="'.$_SESSION['scheme'].'"' ?> disabled> <br>
                        </p>
                        <p>   
                            <label>Member Type: </label>
                            <input type="text" name="designation" <?php echo 'value="'.$_SESSION['member_type'].'"' ?> disabled> <br>
                        </p>
                        <p>
                            <button type="submit" name="acceptmr-submit" class="mainbtn">Accept</button> <br>
                            <button type="submit" name="declinemr-submit" class="mainbtn">Decline</button>
                        </p>
                    </form>
                </div>
            </div>
        </div>
    </div>
</main>

<?php
    require '../basic/footer.php';
?>