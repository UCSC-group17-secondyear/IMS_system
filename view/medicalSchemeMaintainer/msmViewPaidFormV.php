<?php
    require "../basic/topnav.php";
?>

<main>
    <title>Paid Claim Details</title>
    <div class="sansserif">
            
                <ul class="breadcrumbs">
                    <li><a href="msmHomeV.php">Home</a></li>
                    <li><a href="../../controller/msmControllers/paidFormControllerOne.php">Paid Form List</a></li>
                    <li class="active">Paid claim Details</li>
                </ul>
        <div class="row" style="margin-bottom: 4%;">
            <div class="col left20">
                <?php 
                    require('msmSideNavV.php');
                ?>
            </div>

            <div class="col right80">
                <div>                                                                  
                    <h2>Paid Claim Details</h2>
                </div>

                <div class="contentForm" style="margin-bottom: 1%;">
                    
                    <?php
                        if($_SESSION['opd'] == 1){
                    ?>
                        <form action="" method="post" enctype="multipart/form-data">
                        
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
                                    <input type="text" name="mem_name" <?php echo 'value="'.$_SESSION['mem_initials']." ".$_SESSION['mem_sname'].'"'?> readonly> <br>
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

                            <div class="row">
                                <div class="col-25">
                                    <label>Acceptance Status</label>
                                </div>
                                <div class="col-75">
                                    <?php
                                        if($_SESSION['a_status'] == 0){
                                    ?>
                                        <button type="submit" class="redbtn" disabled><a class="disabled">Rejected</a></button>
                                    <?php
                                        } else {
                                    ?>
                                        <button type="submit" class="greenbtn" disabled><a class="disabled">Approved</a></button>
                                    <?php
                                        }
                                    ?>
                                </div>
                            </div>

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
                                    <?php
                                        if($_SESSION['p_status'] == 0){
                                    ?>
                                        <button type="submit" class="redbtn" disabled><a class="disabled">Paid denied</a></button>
                                    <?php
                                        } else {
                                    ?>
                                        <button type="submit" class="greenbtn" disabled><a class="disabled">Paid</a></button>
                                    <?php
                                        }
                                    ?>
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
                            
                        </form>
                    <?php
                        }
                    ?>

                    <?php
                        if($_SESSION['surgical'] == 1){
                    ?>
                        <form action="" method="post" enctype="multipart/form-data">
                            
                            <div class="row">
                                <div class="col-25">
                                    <label for="">Claim Form No</label>
                                </div>
                                <div class="col-75">
                                    <input type="text" name="claim_form_no" <?php echo 'value="'.$_SESSION['claim_form_no'].'"' ?> readonly> <br>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-25">
                                    <label for="">Member Name</label>
                                </div>
                                <div class="col-75">
                                    <input type="text" name="mem_name" <?php echo 'value="'.$_SESSION['mem_initials']." ".$_SESSION['mem_sname'].'"'?> readonly> <br>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-25">
                                    <label for="">Patient Name No</label>
                                </div>
                                <div class="col-75">
                                    <input type="text" name="patient_name" <?php echo 'value="'.$_SESSION['patient_name'].'"' ?> readonly> <br>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-25">
                                    <label for="">Relationship</label>
                                </div>
                                <div class="col-75">
                                    <input type="text" name="relationship" <?php echo 'value="'.$_SESSION['relationship'].'"' ?> readonly> <br>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-25">
                                    <label for="">Date of the Accident</label>
                                </div>
                                <div class="col-75">
                                    <input type="date" name="accident_date" <?php echo 'value="'.$_SESSION['accident_date'].'"' ?> readonly><br>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-25">
                                    <label for="">How Accident Occured</label>
                                </div>
                                <div class="col-75">
                                    <input type="text" name="how_occured" <?php echo 'value="'.$_SESSION['how_occured'].'"' ?> readonly> <br>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-25">
                                    <label for="">Nature and Extend of Injuries</label>
                                </div>
                                <div class="col-75">
                                    <input type="text" name="injuries" <?php echo 'value="'.$_SESSION['injuries'].'"' ?> readonly> <br>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-25">
                                    <label for="">Nature of Illness</label>
                                </div>
                                <div class="col-75">
                                    <input type="text" name="nature_of_illness" <?php echo 'value="'.$_SESSION['nature_of_illness'].'"' ?> readonly> <br>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-25">
                                    <label for="">Date of Commencement of Illness</label>
                                </div>
                                <div class="col-75">
                                    <input type="date" name="commence_date" <?php echo 'value="'.$_SESSION['commence_date'].'"' ?> readonly> <br>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-25">
                                    <label for="">Date of First Consultation</label>
                                </div>
                                <div class="col-75">
                                    <input type="date" name="first_consult_date" <?php echo 'value="'.$_SESSION['first_consult_date'].'"' ?> readonly> <br>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-25">
                                    <label for="">Name of the Doctor</label>
                                </div>
                                <div class="col-75">
                                    <input type="text" name="doctor_name" <?php echo 'value="'.$_SESSION['doctor_name'].'"' ?> readonly> <br>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-25">
                                    <label for="">Address of the Doctor</label>
                                </div>
                                <div class="col-75">
                                    <input type="text" name="doctor_address" <?php echo 'value="'.$_SESSION['doctor_address'].'"' ?> readonly> <br>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-25">
                                    <label for="">Hospitalized On</label>
                                </div>
                                <div class="col-75">
                                    <input type="date" name="hospitalized_date" <?php echo 'value="'.$_SESSION['hospitalized_date'].'"' ?> readonly> <br>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-25">
                                    <label for="">Discharged On</label>
                                </div>
                                <div class="col-75">
                                    <input type="date" name="discharged_date" <?php echo 'value="'.$_SESSION['discharged_date'].'"' ?> readonly> <br>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-25">
                                    <label for="">Have you ever had the same illness before ? <br>if so give the particulars and date</label>
                                </div>
                                <div class="col-75">
                                    <input type="text" name="illness_before" <?php echo 'value="'.$_SESSION['illness_before'].'"' ?> readonly> <br>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-25">
                                    <label for="">Have you during the past five years had any illness or <br>
                                                  accident necessitating medical attention <br>
                                                    if so, give full particulars </label>
                                </div>
                                <div class="col-75">
                                    <input type="text" name="illness_before_years" <?php echo 'value="'.$_SESSION['illness_before_years'].'"' ?> readonly> <br>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-25">
                                    <label for="">Have you previously suffered from sickness injury <br>
                                                    if so, give full particulars</label>
                                </div>
                                <div class="col-75">
                                    <input type="text" name="sick_injury" <?php echo 'value="'.$_SESSION['sick_injury'].'"' ?> readonly> <br>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-25">
                                    <label for="">Any claims pending or are you entitled to claim upon any other <br>
                                                    insurer, society of fund in respect of any illness or any injury <br>
                                                    suffered by you ?</label>
                                </div>
                                <div class="col-75">
                                    <input type="text" name="insurer_claims" <?php echo 'value="'.$_SESSION['insurer_claims'].'"' ?> readonly> <br>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-25">    
                                    <label for="">if you are undergoing treatment for the injury or illness to which <br>
                                                    this claim relates, please states <br>
                                                    a. Nature of illness <br>
                                                    b. Nature of treatement <br>
                                                    c. Name of the hospital concerned if any <br>
                                                    d. Name of any consulting specialist whose recommnended<br>
                                                        you or have been recieving giving details of <br>
                                                    the treatment concerned and other specialist services <br>
                                                                received.</label>
                                </div>
                                <div class="col-75">
                                    <input type="text" name="nature_of" <?php echo 'value="'.$_SESSION['nature_of'].'"' ?> readonly> <br>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-25">
                                    <label>Acceptance Status</label>
                                </div>
                                <div class="col-75">
                                    <?php
                                        if($_SESSION['a_status'] == 0){
                                    ?>
                                        <button type="submit" class="redbtn" disabled><a class="disabled">Rejected</a></button>
                                    <?php
                                        } else {
                                    ?>
                                        <button type="submit" class="greenbtn" disabled><a class="disabled">Approved</a></button>
                                    <?php
                                        }
                                    ?>
                                </div>
                            </div>

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
                                    <?php
                                        if($_SESSION['p_status'] == 0){
                                    ?>
                                        <button type="submit" class="redbtn" disabled><a class="disabled">Paiyment Denied</a></button>
                                    <?php
                                        } else {
                                    ?>
                                        <button type="submit" class="greenbtn" disabled><a class="disabled">Paid</a></button>
                                    <?php
                                        }
                                    ?>
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
                        </form>

                    <?php
                        }
                    ?>
                        <button class="subbtn" type="submit" name="">
                            <a href="../../controller/msmControllers/paidFormControllerOne.php">View Another</a>
                        </button>
                        
                        <button class="cancelbtn" type="submit" name="">
                            <a href="msmHomeV.php">Exit</a>
                        </button>
                </div>
                <button onclick="topFunction()" id="myTopBtn" title="Go to top"><i class="fa fa-arrow-circle-up"></i> Top</button>
            </div>
        </div>
    </div>

</main>

<?php
    require_once('../basic/footer.php');
?>