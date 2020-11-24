<?php
    require '../basic/topnav.php';
?>

<main>
    <title>View Member Details</title>

    <div class="sansserif">
        <ul class="breadcrumbs">
            <li><a href="msmHomeV.php">Home</a></li>
            <li><a href="../../controller/msmControllers/msmMembershipForms1C.php">View Membership Forms</a></li>
            <li class="active">View Member Details</li>
        </ul>

        <div class="row">
            <div class="col left20">
                <?php
                    require 'msmSideNavV.php';
                ?>
            </div>

            <div class="col right80">
                <div>
                    <h2>View Member Details</h2>
                </div>
                <div class="contentForm">
                    <form action="../../controller/msmControllers/msmMembershipForms3C.php?viewed_member=<?php echo $_SESSION['userId'] ?>" method="post">
                        <div class="row">
	                        <div class="col-25">
	                            <label for="">Employee Id</label>
	                        </div>
	                        <div class="col-75">
	                            <input type="text" name="empid" <?php echo 'value="'.$_SESSION['empid'].'"' ?> disabled> <br>
	                        </div>
	                    </div>
                        <div class="row">
	                        <div class="col-25">
	                            <label for="">Initials of the name</label>
	                        </div>
	                        <div class="col-75">
	                            <input type="text" name="initials" <?php echo 'value="'.$_SESSION['initials'].'"' ?> disabled> <br>
	                        </div>
	                    </div>
                        <div class="row">
	                        <div class="col-25">
	                            <label for="">Surname</label>
	                        </div>
	                        <div class="col-75">
	                            <input type="text" name="sname" <?php echo 'value="'.$_SESSION['sname'].'"' ?> disabled> <br>
	                        </div>
	                    </div>
                        <div class="row">
                            <div class="col-25">
                                <label>Department</label>
                            </div>
                            <div class="col-75">
                                <input type="text" name="department" <?php echo 'value="'.$_SESSION['deps'].'"' ?> disabled/>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-25">
                                <label>Health condition</label>
                            </div>
                            <div class="col-75">
                                <input type="text" name="health_condition" <?php echo 'value="'.$_SESSION['health_condition'].'"' ?> disabled/>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-25">
                                <label>Member Type</label>
                            </div>
                            <div class="col-75">
                                <input type="text" name="membert" <?php echo 'value="'.$_SESSION['membert'].'"' ?> disabled/>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-25">
                                <label>Civil status</label>
                            </div>
                            <div class="col-75">
                                <input type="text" name="civil_status" <?php echo 'value="'.$_SESSION['civil_status'].'"' ?> disabled/>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-25">
                                <label>Medical Scheme Type</label>
                            </div>
                            <div class="col-75">
                                <input type="text" name="scheme" <?php echo 'value="'.$_SESSION['scheme'].'"' ?> disabled/>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-25">
                                <label>Acceptance Status</label>
                            </div>
                            <div class="col-75">
                            <?php
                                if($_SESSION['acceptance_status'] == 0){
                            ?>
                                <button type="submit" class="redbtn" disabled><a class="disabled">Declined</a></button>
                            <?php
                                } else {
                            ?>
                                <button type="submit" class="greenbtn" disabled><a class="disabled">Approved</a></button>
                            <?php
                                }
                            ?>
                            </div>
                        </div>
                    <?php if($_SESSION['membership_status'] != 1) { ?>
                    <form action="../../controller/msmControllers/msmMembershipForms3C.php?viewed_member=<?php echo $_SESSION['userId'] ?>" method="post">
                        <button class="subbtn" type="submit" name="approvemf-submit">Approve</button>
                        <button type="submit" class="cancelbtn" name="declinemf-submit">Decline</button>
                    </form>
                    <?php } else { ?>
                        <div class="row">
                            <div class="col-25">
                                <label>Membership Status</label>
                            </div>
                            <div class="col-75">
                            <?php
                                if($_SESSION['membership_status'] == 1){
                            ?>
                                <button type="submit" class="redbtn" disabled><a class="disabled">Declined</a></button>
                            <?php
                                } else {
                            ?>
                                <button type="submit" class="greenbtn" disabled><a class="disabled">Approved</a></button>
                            <?php
                                }
                            ?>
                            </div>
                        </div>
                    <form>
                        <button class="subbtn" type="submit">
                            <a href="../../controller/msmControllers/msmMembershipForms1C.php">View Another Member</a>
                        </button>
                        <button type="submit" class="cancelbtn">
                            <a href="msmHomeV.php">Exit</a>
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