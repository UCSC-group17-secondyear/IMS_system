<?php
    require '../basic/topnav.php';
?>

<main>
    <title>View Member Details</title>

    <div class="sansserif">
        <ul class="breadcrumbs">
            <li><a href="msmHomeV.php">Home</a></li>
            <li><a href="msmViewMembershipFormsV.php">View Membership Forms</a></li>
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
                    <form action="../../controller/msmControllers/msmViewFormsC.php?viewed_member=<?php echo $_SESSION['membership_form_view'] ?>" method="post">
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
                                <label>Form Submitted Date</label>
                            </div>
                            <div class="col-75">
                                <input type="text" name="submitteddate" <?php echo 'value="'.$_SESSION['fr_form_submission_date'].'"' ?> disabled/>
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
                                <button type="submit" class="redbtn" disabled><a class="disabled">Declined</a></button>
                            <?php
                                } else if($_SESSION['fr_acceptance_status'] == 1) {
                            ?>
                                <button type="submit" class="greenbtn" disabled><a class="disabled">Approved</a></button>
                            <?php
                                } else {
                            ?>
                                <button type="submit" class="yellowbtn" disabled><a class="disabled">Unchecked</a></button>
                            <?php
                                }
                            ?>
                            </div>
                        </div>
                <?php if($_SESSION['fr_acceptance_status'] != 2) { ?>
                    <?php if($_SESSION['fr_membership_status'] != 1) { ?>
                        <button class="subbtn" type="submit" name="approvemf-submit">Approve</button>
                        <button type="submit" class="cancelbtn" name="declinemf-submit">Decline</button>
                    <?php } else { ?>
                        <div class="row">
                            <div class="col-25">
                                <label>Membership Status</label>
                            </div>
                            <div class="col-75">
                            <?php
                                if($_SESSION['fr_membership_status'] == 0){
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
                        <button class="subbtn" type="submit">
                            <a href="msmViewMembershipFormsV.php">View Another Member</a>
                        </button>
                        <button type="submit" class="cancelbtn">
                            <a href="msmHomeV.php">Exit</a>
                        </button>
                    </form>
                    <?php }?>
                <?php } else { ?>
                    <form>
                        <button class="subbtn" type="submit">
                            <a href="msmViewMembershipFormsV.php">View Another Member</a>
                        </button>
                        <button type="submit" class="cancelbtn">
                            <a href="msmHomeV.php">Exit</a>
                        </button>
                    </form>
                <?php } ?>
                </div>
                <button onclick="topFunction()" id="myTopBtn" title="Go to top"><i class="fa fa-arrow-circle-up"></i> Top</button>
            </div>
        </div>
    </div>
</main>

<script type="text/javascript">
    //Get the button
    var mybutton = document.getElementById("myTopBtn");

    // When the user scrolls down 20px from the top of the document, show the button
    window.onscroll = function() {scrollFunction()};

    function scrollFunction() {
        if (document.body.scrollTop > 5 || document.documentElement.scrollTop > 5) {
        mybutton.style.display = "block";
        } else {
        mybutton.style.display = "none";
        }
    }

    // When the user clicks on the button, scroll to the top of the document
    function topFunction() {
        document.body.scrollTop = 0;
        document.documentElement.scrollTop = 0;
    }
</script>

<?php
    require '../basic/footer.php';
?>