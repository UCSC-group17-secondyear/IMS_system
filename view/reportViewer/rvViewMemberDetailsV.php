<?php
    require '../basic/topnav.php';
?>

<main>
    <title>View Member Details</title>

    <div class="sansserif">
        <ul class="breadcrumbs">
            <li><a href="rvHomeV.php">Home</a></li>
            <li><a href="rvViewMembershipFormsV.php">View Membership Forms</a></li>
            <li class="active">View Member Details</li>
        </ul>

        <div class="row">
            <div class="col left20">
                <?php
                    require 'rvSideNavV.php';
                ?>
            </div>

            <div class="col right80">
                <div>
                    <h2>View Member Details</h2>
                </div>
                <div class="contentForm">
                    <form action="rvMemberAcceptanceC.php?viewed_member=<?php echo $_SESSION['fr_userId'] ?>" method="post">
                        <div class="row">
	                        <div class="col-25">
	                            <label for="">Employee Id</label>
	                        </div>
	                        <div class="col-75">
	                            <input type="text" name="empid" <?php echo 'value="'.$_SESSION['fr_empid'].'"' ?> disabled> <br>
	                        </div>
	                    </div>
                        <div class="row">
	                        <div class="col-25">
	                            <label for="">Initials of the name</label>
	                        </div>
	                        <div class="col-75">
	                            <input type="text" name="initials" <?php echo 'value="'.$_SESSION['fr_initials'].'"' ?> disabled> <br>
	                        </div>
	                    </div>
                        <div class="row">
	                        <div class="col-25">
	                            <label for="">Surname</label>
	                        </div>
	                        <div class="col-75">
	                            <input type="text" name="sname" <?php echo 'value="'.$_SESSION['fr_sname'].'"' ?> disabled> <br>
	                        </div>
	                    </div>
                        <div class="row">
                            <div class="col-25">
                                <label>Department</label>
                            </div>
                            <div class="col-75">
                                <input type="text" name="department" <?php echo 'value="'.$_SESSION['fr_department'].'"' ?> disabled/>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-25">
                                <label>Health condition</label>
                            </div>
                            <div class="col-75">
                                <input type="text" name="health_condition" <?php echo 'value="'.$_SESSION['fr_health_condition'].'"' ?> disabled/>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-25">
                                <label>Member Type</label>
                            </div>
                            <div class="col-75">
                                <input type="text" name="membert" <?php echo 'value="'.$_SESSION['fr_member'].'"' ?> disabled/>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-25">
                                <label>Civil status</label>
                            </div>
                            <div class="col-75">
                            <?php if ($_SESSION['fr_civil_status'] == 1) { ?>
                                <input type="text" name="civil_status" value="Married" disabled/>
                            <?php } else { ?>
                                <input type="text" name="civil_status" value="Single" disabled/>
                            <?php } ?>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-25">
                                <label>Medical Scheme Type</label>
                            </div>
                            <div class="col-75">
                                <input type="text" name="scheme" <?php echo 'value="'.$_SESSION['fr_scheme'].'"' ?> disabled/>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-25">
                                <label>Acceptance Status</label>
                            </div>
                            <div class="col-75">
                            <?php
                                if($_SESSION['fr_acceptance_status'] == 0){
                            ?>
                                <button class="redbtn" disabled><a class="disabled">Declined</a></button>
                            <?php
                                } else if($_SESSION['fr_acceptance_status'] == 1) {
                            ?>
                                <button class="greenbtn" disabled><a class="disabled">Approved</a></button>
                            <?php
                                } else {
                            ?>
                                <button class="yellowbtn" disabled><a class="disabled">Unchecked</a></button>
                            <?php
                                }
                            ?>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-25">
                                <label>Acceptance Status</label>
                            </div>
                            <div class="col-75">
                            <?php
                                if($_SESSION['fr_membership_status'] == 0){
                            ?>
                                <button class="redbtn" disabled><a class="disabled">Declined</a></button>
                            <?php
                                } else if($_SESSION['fr_membership_status'] == 1) {
                            ?>
                                <button class="greenbtn" disabled><a class="disabled">Approved</a></button>
                            <?php
                                } else {
                            ?>
                                <button class="yellowbtn" disabled><a class="disabled">Unchecked</a></button>
                            <?php
                                }
                            ?>
                            </div>
                        </div>
                        <button class="subbtn" type="submit">
                            <a href="rvViewMembershipFormsV.php">View Another Member</a>
                        </button>
                        <button type="submit" class="cancelbtn">
                            <a href="rvHomeV.php">Exit</a>
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