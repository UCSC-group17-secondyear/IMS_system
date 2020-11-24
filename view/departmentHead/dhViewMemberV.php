<?php
    require "../basic/topnav.php";
?>

<main>
    <title>View Member</title>

    <div class="sansserif">
        <ul class="breadcrumbs">
            <li><a href="dhHomeV.php">Home</a></li>
            <li><a href="../../controller/dhControllers/dhMemberRequestFormC.php?user=<?php echo $_SESSION['userId'] ?>">Memebership Request Forms</a></li>
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
                    <form action="../../controller/dhControllers/dhviewMemberForm2C.php?amiamember=<?php echo $_SESSION['userId'] ?>" method="post">
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
                    <?php if($_SESSION['acceptance_status'] == 3) { ?>
                    <form action="../../controller/dhControllers/dhviewMemberForm2C.php?amiamember=<?php echo $_SESSION['userId'] ?>" method="post">
                        <button class="subbtn" type="submit" name="acceptdms-submit">Accept</button>
                        <button type="submit" class="cancelbtn" name="declinedms-submit">Decline</button>
                    </form>
                    <?php } else { ?>
                    <form action="../../controller/dhControllers/dhviewMemberForm2C.php?amiamember=<?php echo $_SESSION['userId'] ?>" method="post">
                        <button class="subbtn" type="submit">
                            <a href="dhHomeV.php">Ok</a>
                        </button>
                        <button type="submit" class="cancelbtn">
                            <a href="dhHomeV.php">Exit</a>
                        </button>
                    </form>
                    <?php }?>
                </div>
            </div>
        </div>
    </div>
</main>

<?php
    require '../basic/footer.php';
?>