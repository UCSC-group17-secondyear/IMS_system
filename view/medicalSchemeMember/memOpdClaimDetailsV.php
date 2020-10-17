<main>
    <title>OPD Claim Details</title>

<?php
    require('../basic/header.php');
    
?>
 
            <div class="header">
                <ul class="breadcrumbs">
                    <li><a href="memHomeV.php?user_id=<?php echo $_SESSION['user_id'] ?>">Home</a></li>
                    <li>OPD Claim Details</li>
                </ul>
            </div>

            <div class="side-nav">
                <?php 
                    require('../medicalSchemeMember/memSideNavV.php');
                ?>
            </div>

            <div class="content">
                <div>                                                                  
                    <h2>OPD Claim Details</h2>
                </div>

                <form action="memOpdClaimDetailsV.php?user_id=<?php echo $_SESSION['userId'] ?>" method="post" enctype="multipart/form-data">
                    
                    <label for="">User Id</label>
                    <input type="text" name="userId" <?php echo 'value="'.$_SESSION['userId'].'"' ?> disabled> <br> 

                    <label for="">Claim Form No</label>
                    <input type="text" name="claim_form_no" <?php echo 'value="'.$_SESSION['claim_form_no'].'"'?> disabled> <br>

                    <label for="">Patient Name</label>
                    <input type="text" name="patient_name" <?php echo 'value="'.$_SESSION['patient_name'].'"'?> disabled> <br>

                    <label for="">Relationship</label>
                    <input type="text" name="relationship" <?php echo 'value="'.$_SESSION['relationship'].'"'?> disabled> <br>

                    <label for="">Doctor Name</label>
                    <input type="text" name="doctor_name" <?php echo 'value="'.$_SESSION['doctor_name'].'"'?> disabled> <br>

                    <label for="">Treatment Received Date</label>
                    <input type="text" name="treatment_received_date" <?php echo 'value="'.$_SESSION['treatment_received_date'].'"'?> disabled> <br>

                    <label for="">Bill Issued Date</label>
                    <input type="text" name="bill_issued_date" <?php echo 'value="'.$_SESSION['bill_issued_date'].'"'?> disabled> <br>

                    <label for="">Purpose</label>
                    <input type="text" name="purpose" <?php echo 'value="'.$_SESSION['purpose'].'"'?> disabled> <br>

                    <label for="">Bill Amount</label>
                    <input type="text" name="bill_amount" <?php echo 'value="'.$_SESSION['bill_amount'].'"'?> disabled> <br>
                    
                    
                </form>

            </div>

            <div class="right-side-bar">
                <a href="../../controller/viewProfileController.php?user_id=<?php echo $_SESSION['userId'] ?>"><button type="submit" name="" class="button">Profile</button></a>
            </div>
            
            <?php
                require_once('../basic/footer.php');
            ?>

</main>