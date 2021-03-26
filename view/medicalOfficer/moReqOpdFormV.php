<?php
    require "../basic/topnav.php";
?>

<main>
    <title>OPD Claim Details</title>
    <div class="sansserif">
            
                <ul class="breadcrumbs">
                    <li><a href="moHomeV.php">Home</a></li>
                    <li><a href="../../controller/moControllers/reqClaimFormListControllerOne.php">Form List</a></li>
                    <li class="active">OPD claim Details</li>
                </ul>
        <div class="row" style="margin-bottom: 4%;">
            <div class="col left20">
                <?php 
                    require('moSideNavV.php');
                ?>
            </div>

            <div class="col right80">
                <div>                                                                  
                    <h2>OPD Claim Details</h2>
                </div>

                <div class="contentForm" style="margin-bottom: 1%;">
                        <form action="../../controller/moControllers/reqClaimFormControllerThree.php" method="post" enctype="multipart/form-data">
                        
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

                            <div class="row">
                                <div class="col-25">
                                    <label for="">Prescripton Bill</label>

                                </div>
                                <div class="col-75">
                                    <h6 style="margin-top: 30px;"><a style="color: black; font-size: 20px" href="../../controller/basicControllers/downloadFileController.php?file_name=<?php echo $_SESSION['file_name'] ?>&opd_flag=1"><?php echo $_SESSION['file_name'] ?></a></h6>
                                    
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-25">
                                    <label for="">Revised Bill Amount</label>
                                </div>
                                <div class="col-75">
                                    <input type="number" name="rev_bill_amount" value="0" min="0" required > <br>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-25">
                                    <label for="">Remarks</label>
                                </div>
                                <div class="col-75">
                                    <input type="text" name="mo_comment"  required > <br>
                                </div>
                            </div>

                            <button class="subbtn" type="submit" name="accept-submit" onclick="return confirm('Are you sure?')">Accept</button>
                            <button type="submit" class="cancelbtn" name="reject-submit" onclick="return confirm('Are you sure?')">Reject</button>
                            
                        </form>
                        
                </div>
            </div>
        </div>
    </div>

</main>

<?php
    require_once('../basic/footer.php');
?>