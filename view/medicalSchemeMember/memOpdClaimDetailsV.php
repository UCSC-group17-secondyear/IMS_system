<?php
    require "../basic/topnav.php";
?>

<main>
    <title>OPD Claim Details</title>
    <div class="sansserif">
            
                <ul class="breadcrumbs">
                    <li><a href="memHomeV.php">Home</a></li>
                    <li><a href="../../controller/memControllers/claimFormListControllerOne.php?user_id=<?php echo $_SESSION['userId'] ?>">Form List</a></li>
                    <li class="active">OPD claim Details</li>
                </ul>
        <div class="row" style="margin-bottom: 4%;">
            <div class="col left20">
                <?php 
                    require('memSideNavV.php');
                ?>
            </div>

            <div class="col right80">
                <div>                                                                  
                    <h2>OPD Claim Details</h2>
                </div>

                <div class="contentForm" style="margin-bottom: 1%;">
                        <form action="" method="post" enctype="multipart/form-data">
                        
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
                                <input type="text" name="patient_name" <?php echo 'value="'.$_SESSION['patient_name'].'"'?> disabled> <br>
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
                            
                        </form>
                        
                        <button class="subbtn" type="submit" name="">
                            <a href="../../controller/memControllers/claimFormListControllerOne.php?user_id=<?php echo $_SESSION['userId'] ?>"> View Claim Form List</a>
                        </button>
                        <button class="cancelbtn" type="submit" name="">
                            <a href="memHomeV.php">Exit</a>
                        </button>
                </div>
            </div>
        </div>
    </div>

</main>

<?php
    require_once('../basic/footer.php');
?>