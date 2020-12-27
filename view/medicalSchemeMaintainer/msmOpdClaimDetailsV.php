<?php
    require "../basic/topnav.php";
?>

<main>
    <title>OPD Claim Details</title>
    <div class="sansserif">
        <ul class="breadcrumbs">
            <li><a href="msmHomeV.php">Home</a></li>
            <?php
                if ($_SESSION['acceptance_status'] == 3) {
            ?>
                <li><a href="msmViewRequestedClaimFormV.php">Claim Requested Form List</a></li>
            <?php
                } else {
            ?>
                <li><a href="msmViewRefferedClaimFormsV.php">Claim Reffered Form List</a></li>
            <?php
                }
            ?>
            <li class="active">OPD claim Details</li>
        </ul>
        <div class="row">
            <div class="col left20">
                <?php 
                    require('msmSideNavV.php');
                ?>
            </div>

            <div class="col right80">
                <div>
                    <h2>OPD Claim Details</h2>
                </div>
                <div class="contentForm">
                    <form action="" method="post" enctype="multipart/form-data">
                        <div class="row">
                            <div class="col-25">
                                <label for="">Username</label>
                            </div>
                            <div class="col-75">
                                <input type="text" name="empid" <?php echo 'value="'.$_SESSION['empid'].'"' ?> disabled>
                                <br>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-25">
                                <label for="">Initials of the name</label>
                            </div>
                            <div class="col-75">
                                <input type="text" name="initials" <?php echo 'value="'.$_SESSION['initials'].'"' ?>
                                    disabled> <br>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-25">
                                <label for="">Surname</label>
                            </div>
                            <div class="col-75">
                                <input type="text" name="sname" <?php echo 'value="'.$_SESSION['sname'].'"' ?> disabled>
                                <br>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-25">
                                <label for="">Claim Form No</label>
                            </div>
                            <div class="col-75">
                                <input type="text" name="claim_form_no"
                                    <?php echo 'value="'.$_SESSION['claim_form_no'].'"'?> disabled> <br>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-25">
                                <label for="">Patient Name</label>
                            </div>
                            <div class="col-75">
                                <input type="text" name="patient_name"
                                    <?php echo 'value="'.$_SESSION['patient_name'].'"'?> disabled> <br>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-25">
                                <label for="">Relationship</label>
                            </div>
                            <div class="col-75">
                                <input type="text" name="relationship"
                                    <?php echo 'value="'.$_SESSION['relationship'].'"'?> disabled> <br>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-25">
                                <label for="">Doctor Name</label>
                            </div>
                            <div class="col-75">
                                <input type="text" name="doctor_name"
                                    <?php echo 'value="'.$_SESSION['doctor_name'].'"'?> disabled> <br>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-25">
                                <label for="">Treatment Received Date</label>
                            </div>
                            <div class="col-75">
                                <input type="text" name="treatment_received_date"
                                    <?php echo 'value="'.$_SESSION['treatment_received_date'].'"'?> disabled> <br>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-25">
                                <label for="">Bill Issued Date</label>
                            </div>
                            <div class="col-75">
                                <input type="text" name="bill_issued_date"
                                    <?php echo 'value="'.$_SESSION['bill_issued_date'].'"'?> disabled> <br>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-25">
                                <label for="">Purpose</label>
                            </div>
                            <div class="col-75">
                                <input type="text" name="purpose" <?php echo 'value="'.$_SESSION['purpose'].'"'?>
                                    disabled> <br>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-25">
                                <label for="">Bill Amount</label>
                            </div>
                            <div class="col-75">
                                <input type="text" name="bill_amount"
                                    <?php echo 'value="'.$_SESSION['bill_amount'].'"'?> disabled> <br>
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
                                } else if($_SESSION['acceptance_status'] == 1) {
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
                    </form>
                    <?php
                        if ($_SESSION['acceptance_status'] == 3) {
                    ?>
                        <button class="subbtn" type="submit" name="">
                            <a href="msmViewRequestedClaimFormV.php"> View Claim Form List</a>
                        </button>
                    <?php
                        } else {
                    ?>
                        <button class="subbtn" type="submit" name="">
                            <a href="msmViewRefferedClaimFormsV.php"> View Claim Form List</a>
                        </button>
                    <?php
                        }
                    ?>
                    <button class="cancelbtn" type="submit" name="">
                        <a href="msmHomeV.php">Exit</a>
                    </button>
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
    require_once('../basic/footer.php');
?>