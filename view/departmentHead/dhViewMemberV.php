<?php
    require "../basic/topnav.php";
?>

<main>
    <title>View Member</title>

    <div class="sansserif">
        <ul class="breadcrumbs">
            <li><a href="dhHomeV.php">Home</a></li>
            <?php
                if ($_SESSION['acceptance_status'] == 3) {
            ?>
                <li><a href="dhMembRequestFormV.php">View Requested Form List</a></li>
            <?php
                } else {
            ?>
                <li><a href="dhCertifiedFormV.php">View Certified Form List</a></li>
            <?php
                }
            ?>
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
                    <?php if($_SESSION['acceptance_status'] == 3) { ?>
                        </form>
                    <form action="../../controller/dhControllers/dhviewMemberForm2C.php?amiamember=<?php echo $_SESSION['userId'] ?>" method="post">
                        <button class="subbtn" type="submit" name="acceptdms-submit">Accept</button>
                        <button type="submit" class="cancelbtn" name="declinedms-submit">Decline</button>
                    </form>
                    <?php } else { ?>
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
                    </form>
                    <?php
                        if ($_SESSION['acceptance_status'] == 3) {
                    ?>
                        <button class="subbtn" type="submit" name="">
                            <a href="dhMembRequestFormV.php"> View Requested Form List</a>
                        </button>
                    <?php
                        } else {
                    ?>
                        <button class="subbtn" type="submit" name="">
                            <a href="dhCertifiedFormV.php"> View Certified Form List</a>
                        </button>
                    <?php
                        }
                    ?>
                    <button class="cancelbtn" type="submit" name="">
                        <a href="msmHomeV.php">Exit</a>
                    </button>
                    <?php }?>
                </div>
                <button onclick="topFunction()" id="myTopBtn" title="Go to top"><i class="fa fa-arrow-circle-up"></i> Top</button>
            </div>
        </div>
    </div>
</main>

<script type="text/javascript">
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

    function topFunction() {
        document.body.scrollTop = 0;
        document.documentElement.scrollTop = 0;
    }
</script>

<?php
    require '../basic/footer.php';
?>