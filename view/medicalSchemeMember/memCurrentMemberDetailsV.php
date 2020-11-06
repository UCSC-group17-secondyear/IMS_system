<?php
    require "../basic/topnav.php";
?>

<main>
    <title>Member Details</title>
        <div class="sanssrif">
            
                <ul class="breadcrumbs">
                    <li><a href="memHomeV.php">Home</a></li>
                    <li><a href="memRenewMembershipV.php">Renew Membership</a></li>
                    <li class="active">Current Member Details</li>
                </ul>
            

            <div class="col left20">
                <?php 
                    require('memSideNavV.php');
                ?>
            </div>

            <div class="row">
                <div class="col right80">
                    <div>
                        <h2>Current Member Details</h2>
                    </div>

                    <div class="contentForm">
                        <form action="../../controller/currentMemberDetailsControllerTwo.php?user_id=<?php echo $_SESSION['userId'] ?>" method="post">
                            <div class="row">
                                <div class="col-25">
                                    <label>Employee ID</label>
                                </div>
                                <div class="col-75">
                                    <input type="text" name="empid" <?php echo 'value="'.$_SESSION['empid'].'"' ?> disabled>
                                </div>
                                </div>

                            <div class="row">
                                <div class="col-25">
                                    <label>Your initials</label>
                                </div>
                                <div class="col-75">
                                    <input type="text" name="initials" <?php echo 'value="'.$_SESSION['initials'].'"' ?> disabled/>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-25">
                                    <label>Your surname</label>
                                </div>
                                <div class="col-75">
                                    <input type="text" name="sname" <?php echo 'value="'.$_SESSION['sname'].'"' ?> disabled/>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-25">
                                    <label>Your E-mail</label>
                                </div>
                                <div class="col-75">
                                    <input type="email" name="email" <?php echo 'value="'.$_SESSION['email'].'"' ?> disabled/>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-25">
                                    <label>Designation</label>
                                </div>
                                <div class="col-75">
                                    <input type="text" name="designation" <?php echo 'value="'.$_SESSION['designation'].'"' ?> disabled>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-25">
                                    <label>Enter department</label>
                                </div>
                                <div class="col-75">
                                    <select name="department" <?php echo 'value="'.$_SESSION['department'].'"' ?> required>
                                        <option value="">Select department: </option>
                                        <?php echo $_SESSION['department'] ?>
                                    </select>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-25">
                                    <label>Health condition</label>
                                </div>
                                <div class="col-75">
                                    <input name="health_condition" type="text" <?php echo 'value="'.$_SESSION['health_condition'].'"' ?> required>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-25">
                                    <label>Civil status</label>
                                </div>
                                <div class="col-75">
                                    <select name="civilstatus" <?php echo 'value="'.$_SESSION['civilstatus'].'"' ?> required>
                                        <option value="">...</option>
                                        <option value="married">Married</option>
                                        <option value="unmarried">Unmarried</option>
                                    </select>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-25">
                                    <label>Medical Scheme Type</label>
                                </div>
                                <div class="col-75">
                                    <input name="scheme" type="text" <?php echo 'value="'.$_SESSION['scheme'].'"' ?> disabled>
                                </div>
                            </div>

                            <button class="mainbtn" type="submit" name="update-submit">Update Details</button>
                        </form> 
                    </div>
                </div>
            </div>
        </div>
</main>

<?php
    require_once('../basic/footer.php');
?>