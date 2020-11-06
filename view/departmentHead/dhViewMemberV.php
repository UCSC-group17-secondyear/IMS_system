<?php
    require "../basic/topnav.php";
?>

<main>
    <title>View Member</title>

    <div class="sansserif">
        <ul class="breadcrumbs">
            <li><a href="dhHomeV.php">Home</a></li>
            <li class="active">View Member</li>
        </ul>

        <div class="row">
            <div class="col left20">
                <?php
                    require 'dhSideNavV.php';
                ?>
            </div>

            <div class="col right80">
                <div>
                    <h2>View Member</h2>
                </div>

                <div class="contentForm">
                    <form action="../../controller/dhviewMemberFormC.php" method="post">
                        <div class="row">
                            <div class="col-25">
                                <label>Employee ID: </label>
                            </div>
                            <div class="col-75">
                                <input type="text" name="empid" <?php echo 'value="'.$_SESSION['empid'].'"' ?> disabled>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-25">
                                <label>Initials: </label>
                            </div>
                            <div class="col-75">
                                <input type="text" name="initials" <?php echo 'value="'.$_SESSION['initials'].'"' ?> disabled/>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-25">
                                <label>Surname: </label>
                            </div>
                            <div class="col-75">
                                <input type="text" name="sname" <?php echo 'value="'.$_SESSION['sname'].'"' ?> disabled/>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-25">
                                <label>E-mail: </label>
                            </div>
                            <div class="col-75">
                                <input type="email" name="email" <?php echo 'value="'.$_SESSION['email'].'"' ?> disabled/>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-25">
                                <label>Designation: </label>
                            </div>
                            <div class="col-75">
                                <input type="text" name="designation" <?php echo 'value="'.$_SESSION['designation'].'"' ?> disabled> <br>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-25">
                                <label>Department: </label>
                            </div>
                            <div class="col-75">
                                <input type="text" name="designation" <?php echo 'value="'.$_SESSION['department'].'"' ?> disabled> <br>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-25">
                                <label>Health condition: </label>
                            </div>
                            <div class="col-75">
                                <input type="text" name="designation" <?php echo 'value="'.$_SESSION['healthcondition'].'"' ?> disabled> <br>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-25">
                                <label>Civil status: </label>
                            </div>
                            <div class="col-75">
                                <input type="text" name="designation" <?php echo 'value="'.$_SESSION['civilstatus'].'"' ?> disabled> <br>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-25">
                                <label>Medical Scheme Type: </label>
                            </div>
                            <div class="col-75">
                                <input type="text" name="designation" <?php echo 'value="'.$_SESSION['scheme'].'"' ?> disabled> <br>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-25">
                                <label>Member Type: </label>
                            </div>
                            <div class="col-75">
                                <input type="text" name="designation" <?php echo 'value="'.$_SESSION['member_type'].'"' ?> disabled> <br>
                            </div>
                        </div>
                    </form>
                    <form>
                        <button class="subbtn" type="submit" name="acceptmr-submit">
                            <a href="#">Accept</a>
                        </button>
                        <button type="submit" class="cancelbtn" name="declinemr-submit">
                            <a href="#">Decline</a>
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</main>

<?php
    require '../basic/footer.php';
?>