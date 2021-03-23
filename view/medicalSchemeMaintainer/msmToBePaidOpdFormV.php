<?php
    require "../basic/topnav.php";
?>

<main>
    <title>Claim Details</title>
    <div class="sansserif">
            
                <ul class="breadcrumbs">
                    <li><a href="msmHomeV.php">Home</a></li>
                    <li><a href="msmViewToBePaidClaimFormsV.php">To Be Paid Form List</a></li>
                    <li class="active">claim Details</li>
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

                        <form action="../../controller/msmControllers/toBePaidFormController.php" method="POST" enctype="multipart/form-data">

                            <div class="row">
                                <div class="col-25">
                                    <label for="">Claim Form No</label>
                                </div>
                                <div class="col-75">
                                    <input type="text" name="claim_form_no" <?php echo 'value="'.$_SESSION['claim_form_no'].'"'?> disabled> <br>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-25">
                                    <label for="">Member Name</label>
                                </div>
                                <div class="col-75">
                                    <input type="text" name="mem_name" <?php echo 'value="'.$_SESSION['mem_initials']." ".$_SESSION['mem_sname'].'"'?> disabled> <br>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-25">  
                                    <label for="">Patient Name</label>
                                </div>
                                <div class="col-75">
                                    <input type="text" name="patient_name" <?php echo 'value="'.$_SESSION['patient_name'].'"'?> disabled> <br>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-25">
                                    <label for="">Relationship</label>
                                </div>
                                <div class="col-75">
                                    <input type="text" name="relationship" <?php echo 'value="'.$_SESSION['relationship'].'"'?> disabled> <br>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-25">
                                    <label for="">Doctor Name</label>
                                </div>
                                <div class="col-75">
                                    <input type="text" name="doctor_name" <?php echo 'value="'.$_SESSION['doctor_name'].'"'?> disabled> <br>
                                </div>
                            </div> 

                            <div class="row">
                                <div class="col-25">
                                    <label for="">Treatment Received Date</label>
                                </div>
                                <div class="col-75">
                                    <input type="text" name="treatment_received_date" <?php echo 'value="'.$_SESSION['treatment_received_date'].'"'?> disabled> <br>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-25">
                                    <label for="">Bill Issued Date</label>
                                </div>
                                <div class="col-75">
                                    <input type="text" name="bill_issued_date" <?php echo 'value="'.$_SESSION['bill_issued_date'].'"'?> disabled> <br>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-25">
                                    <label for="">Purpose</label>
                                </div>
                                <div class="col-75">
                                    <input type="text" name="purpose" <?php echo 'value="'.$_SESSION['purpose'].'"'?> disabled> <br>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-25">
                                    <label for="">Bill Amount</label>
                                </div>
                                <div class="col-75">
                                    <input type="text" name="bill_amount" <?php echo 'value="'.$_SESSION['bill_amount'].'"'?> disabled> <br>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-25">
                                    <label for="">Revised Bill Amount</label>
                                </div>
                                <div class="col-75">
                                    <input type="text" name="revised_bill_amount" <?php echo 'value="'.$_SESSION['revised_bill_amount'].'"'?> disabled> <br>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-25">
                                    <label>Acceptance Status</label>
                                </div>
                                <div class="col-75">
                                    <button type="submit" class="greenbtn" readonly><a class="disabled">Approved</a></button> 
                                </div>
                            </div>
                            
                            <div class="row">
                                <div class="col-25">
                                    <label for="final_bill_amount">Final Bill Amount</label>
                                </div>
                                <div class="col-75">
                                    <input type="number" name="final_bill_amount" min="0" value="0" required> <br>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-25">
                                    <h3>Remarks</h3>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-25">
                                    <label>Medical year</label>
                                </div>
                                <div class="col-75">
                                    <input type="text" name="medical_year" <?php echo 'value="'.$_SESSION['medical_year'].'"'?> disabled> <br>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-25">
                                    <label>Remain amount for medical year</label>
                                </div>
                                <div class="col-75">
                                    <input type="text" name="remain_amount" <?php echo 'value="'.$_SESSION['remain_amount'].'"'?> disabled> <br>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-25">
                                    <label>Comment</label>
                                </div>
                                <div class="col-75">
                                    <input type="text" name="msm_comment" <?php echo 'value="'.$_SESSION['msm_comment'].'"'?> required> <br>
                                </div>
                            </div>

                            <button class="subbtn" type="submit" name="paid-submit" onclick="return confirm('Are you sure?')">Update</button>
                            <button class="cancelbtn" type="submit" name="">
                                <a href="msmHomeV.php">Exit</a>
                            </button>

                        </form>
                    </div>
                </div>
            </div>
        </div>
</main>

<?php
    require_once('../basic/footer.php');
?>