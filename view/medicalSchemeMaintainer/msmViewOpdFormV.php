<?php
    require "../basic/topnav.php";
?>

<main>
    <title>Claim Details</title>
    <div class="sansserif">
        <ul class="breadcrumbs">
            <li><a href="msmHomeV.php">Home</a></li>
            <?php if ($_SESSION['form_acceptance'] == 2) { ?>
                <li><a href="msmViewRequestedClaimFormV.php">Claim Requested Form List</a></li>
            <?php } elseif ($_SESSION['form_acceptance'] == 1) {
                if ($_SESSION['form_paid'] == 2) { ?>
                <li><a href="msmViewToBePaidClaimFormsV.php">To be paid Form List</a></li>
            <?php } elseif ($_SESSION['form_paid'] == 1) { ?>
                <li><a href="msmViewPaidClaimFormsV.php">Paid Form List</a></li>                
            <?php } } else { ?>
                <li><a href="msmRejectedClaimFormsV.php">Rejected Form List</a></li>
            <?php } ?>
            <li class="active">Claim Details</li>
        </ul>
        <div class="row" style="margin-bottom: 4%;">
            <div class="col left20">
                <?php 
                    require('msmSideNavV.php');
                ?>
            </div>

            <div class="col right80">
                <div>                                                                  
                    <h2>Claim Details</h2>
                </div>

                <div class="contentForm" style="margin-bottom: 1%;">
                    <form action="../../controller/msmControllers/msmViewFormsC.php" method="POST" enctype="multipart/form-data">
                        <div class="row">
                            <div class="col-25">
                                <label for="">Claim Form No</label>
                            </div>
                            <div class="col-75">
                                <input type="text" name="claim_form_no" <?php echo 'value="'.$_SESSION['claim_form_no'].'"'?> readonly> <br>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-25">
                                <label for="">Member Name</label>
                            </div>
                            <div class="col-75">
                                <input type="text" name="claim_form_no" <?php echo 'value="'.$_SESSION['mem_initials']." ".$_SESSION['mem_sname'].'"'?> readonly> <br>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-25">  
                                <label for="">Patient Name</label>
                            </div>
                            <div class="col-75">
                                <input type="text" name="patient_name" <?php echo 'value="'.$_SESSION['patient_name'].'"'?> readonly> <br>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-25">
                                <label for="">Relationship</label>
                            </div>
                            <div class="col-75">
                                <input type="text" name="relationship" <?php echo 'value="'.$_SESSION['relationship'].'"'?> readonly> <br>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-25">
                                <label for="">Doctor Name</label>
                            </div>
                            <div class="col-75">
                                <input type="text" name="doctor_name" <?php echo 'value="'.$_SESSION['doctor_name'].'"'?> readonly> <br>
                            </div>
                        </div> 

                        <div class="row">
                            <div class="col-25">
                                <label for="">Treatment Received Date</label>
                            </div>
                            <div class="col-75">
                                <input type="text" name="treatment_received_date" <?php echo 'value="'.$_SESSION['treatment_received_date'].'"'?> readonly> <br>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-25">
                                <label for="">Bill Issued Date</label>
                            </div>
                            <div class="col-75">
                                <input type="text" name="bill_issued_date" <?php echo 'value="'.$_SESSION['bill_issued_date'].'"'?> readonly> <br>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-25">
                                <label for="">Purpose</label>
                            </div>
                            <div class="col-75">
                                <input type="text" name="purpose" <?php echo 'value="'.$_SESSION['purpose'].'"'?> readonly> <br>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-25">
                                <label for="">Bill Amount</label>
                            </div>
                            <div class="col-75">
                                <input type="text" name="bill_amount" <?php echo 'value="'.$_SESSION['bill_amount'].'"'?> readonly> <br>
                            </div>
                        </div>

                    <?php if ($_SESSION['form_acceptance'] == 2) { ?>

                        <div class="row">
                            <div class="col-25">
                                <label for="">Prescripton Bill</label>
                            </div>
                            <div class="col-75">
                                <input type="text" name="file_name" <?php echo 'value="'.$_SESSION['file_name'].'"'?> readonly> <br>
                            </div>
                        </div>

                    <?php } elseif ($_SESSION['form_acceptance'] == 1) { ?>

                        <div class="row">
                            <div class="col-25">
                                <label>Acceptance Status</label>
                            </div>
                            <div class="col-75">
                                <button type="submit" class="greenbtn" disabled><a class="disabled">Approved</a></button>
                            </div>
                        </div>

                    <?php if ($_SESSION['form_paid'] == 1) { ?>

                        <div class="row">
                            <div class="col-25">
                                <label for="">Revised Bill Amount</label>
                            </div>
                            <div class="col-75">
                                <input type="text" name="revised_bill_amount" <?php echo 'value="'.$_SESSION['revised_bill_amount'].'"'?> readonly> <br>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-25">
                                <label>Paid Status</label>
                            </div>
                            <div class="col-75">
                                <button type="submit" class="greenbtn" disabled><a class="disabled">Paid</a></button>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-25">
                                <label for="">Paid Amount</label>
                            </div>
                            <div class="col-75">
                                <input type="text" name="paid_amount" <?php echo 'value="'.$_SESSION['paid_amount'].'"'?> readonly> <br>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-25">
                                <label for="">Remarks</label>
                            </div>
                            <div class="col-75">
                                <input type="text" name="msm_comment" <?php echo 'value="'.$_SESSION['msm_comment'].'"'?> readonly> <br>
                            </div>
                        </div>

                    <?php } elseif ($_SESSION['form_paid'] == 2) { ?>

                        <div class="row">
                            <div class="col-25">
                                <label for="">Revised Bill Amount</label>
                            </div>
                            <div class="col-75">
                                <input type="text" name="revised_bill_amount" <?php echo 'value="'.$_SESSION['revised_bill_amount'].'"'?> readonly> <br>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-25">
                                <label for="final_bill_amount">Final Bill Amount</label>
                            </div>
                            <div class="col-75">
                                <input type="number" name="final_bill_amount" min="0" placeholder="Final Bill Amount" required> <br>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-25">
                                <label>Medical year</label>
                            </div>
                            <div class="col-75">
                                <input type="text" name="medical_year" <?php echo 'value="'.$_SESSION['medical_year'].'"'?> readonly> <br>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-25">
                                <label>Remain amount for medical year</label>
                            </div>
                            <div class="col-75">
                                <input type="text" name="remain_amount" <?php echo 'value="'.$_SESSION['remain_amount'].'"'?> readonly> <br>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-25">
                                <label>Comment</label>
                            </div>
                            <div class="col-75">
                                <input type="text" name="msm_comment" placeholder="Comment" <?php echo 'value="'.$_SESSION['msm_comment'].'"'?> required> <br>
                            </div>
                        </div>

                    <?php } } else { ?>

                        <div class="row">
                            <div class="col-25">
                                <label>Acceptance Status</label>
                            </div>
                            <div class="col-75">
                                <button type="submit" class="redbtn" disabled><a class="disabled">Rejected</a></button>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-25">
                                <label>Paid Status</label>
                            </div>
                            <div class="col-75">
                                <button type="submit" class="redbtn" disabled><a class="disabled">Rejected</a></button>
                            </div>
                        </div>

                    <?php } ?>

                    <?php if ($_SESSION['form_acceptance'] == 2) { ?>
                        <button class="subbtn" type="submit"><a href="msmViewRequestedClaimFormV.php">View Another</a></button>
                    <?php } elseif ($_SESSION['form_acceptance'] == 1) {
                        if ($_SESSION['form_paid'] == 2) { ?>
                        <button class="subbtn" type="submit" name="paidaccept-submit" onclick="return confirm('Are you sure?')">Update</button>
                    <?php } elseif ($_SESSION['form_paid'] == 1) { ?>
                        <button class="subbtn" type="submit"><a href="msmViewPaidClaimFormsV.php">View Another</a></button>
                    <?php } } else { ?>
                        <button class="subbtn" type="submit"><a href="msmRejectedClaimFormsV.php">View another</a></button>
                    <?php } ?>
                        <button class="cancelbtn" type="submit"><a href="msmHomeV.php">Cancel</a></button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</main>

<?php
    require_once('../basic/footer.php');
?>