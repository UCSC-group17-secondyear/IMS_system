<?php
    require "../basic/topnav.php";
?>

<main>
    <title>OPD Claim Details</title>
        <div class="sansserif">
                
                    <ul class="breadcrumbs">
                        <li><a href="memHomeV.php?user_id=<?php echo $_SESSION['user_id'] ?>">Home</a></li>
                        <li>Update OPD Form</li>
                    </ul>
                
            <div class="row">
                    <div class="col left20">
                        <?php 
                            require('../medicalSchemeMember/memSideNavV.php');
                        ?>
                    </div>
                <div class="row">
                    <div class="col right80">
                        <div>                                                                  
                            <h2>OPD Claim Details</h2>
                        </div>

                        <div class="contentForm">
                            <form action="../../controller/updateOpdFormController.php?user_id=<?php echo $_SESSION['userId']?>&claim_form_no=<?php echo $_SESSION['claim_form_no'] ?>" method="post" enctype="multipart/form-data">
                             
                            <div class="row">
                                <div class="col-25">
                                    <label for="">User Id</label>
                                </div>
                                <div class="col-75">
                                    <input type="text" name="userId" <?php echo 'value="'.$_SESSION['userId'].'"' ?> disabled> <br> 
                                </div>
                            </div>

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
                                    <label for="">Patient Name</label>
                                </div>
                                <div class="col-75">
                                    <input type="text" name="patient_name" <?php echo 'value="'.$_SESSION['patient_name'].'"'?> required> <br>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-25">
                                    <label for="">Relationship</label>
                                </div>
                                <div class="col-75">
                                    <input type="text" name="relationship" <?php echo 'value="'.$_SESSION['relationship'].'"'?> required> <br>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-25">
                                    <label for="">Doctor Name</label>
                                </div>
                                <div class="col-75">
                                    <input type="text" name="doctor_name" <?php echo 'value="'.$_SESSION['doctor_name'].'"'?> required> <br>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-25">
                                    <label for="">Treatment Received Date</label>
                                </div>
                                <div class="col-75">
                                    <input type="date" name="treatment_received_date" <?php echo 'value="'.$_SESSION['treatment_received_date'].'"'?> required> <br>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-25">
                                    <label for="">Bill Issued Date</label>
                                </div>
                                <div class="col-75">
                                    <input type="date" name="bill_issued_date" <?php echo 'value="'.$_SESSION['bill_issued_date'].'"'?> required> <br>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-25">
                                    <label for="">Purpose</label>
                                </div>
                                <div class="col-75">
                                    <input type="text" name="purpose" <?php echo 'value="'.$_SESSION['purpose'].'"'?> required> <br>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-25">
                                    <label for="">Bill Amount</label>
                                </div>
                                <div class="col-75">
                                    <input type="text" name="bill_amount" <?php echo 'value="'.$_SESSION['bill_amount'].'"'?> required> <br>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-25">
                                    <label for="">Scanned copy of bill</label>
                                </div>
                                <div class="col-75">
                                    <input type="file" name="file" required>
                                </div>
                            </div>

                                <button class="mainbtn" type="submit" name="update-form">Update Form</button>
                            </form>

                            <form>
                                <button class="subbtn" type="submit" name="userroleList-submit">
                                    <a href="../../controller/updateClaimFormControllerOne.php?user_id=<?php echo $_SESSION['userId']?>">View Claim Form List</a>
                                </button>
                                <button type="submit" class="cancelbtn">
                                    <a href="memHomeV.php">Cancel</a>
                                </button>
                            </form> 
                        </div>
                    </div>
                </div>
            </div> 
        </div>
</main>

<?php
    require_once('../basic/footer.php');
?>
