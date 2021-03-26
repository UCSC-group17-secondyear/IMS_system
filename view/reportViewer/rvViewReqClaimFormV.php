<?php
    require "../basic/topnav.php";
?>

<main>
    <title>Requested Claim Details</title>
    <div class="sansserif">
            
                <ul class="breadcrumbs">
                    <li><a href="rvHomeV.php">Home</a></li>
                    <li><a href="rvRequestedClaimFormV.php">Requested Form List</a></li>
                    <li class="active">Requested claim Details</li>
                </ul>
        <div class="row" style="margin-bottom: 4%;">
            <div class="col left20">
                <?php 
                    require('rvSideNavV.php');
                ?>
            </div>

            <div class="col right80">
                <div>                                                                  
                    <h2>Requested Claim Details</h2>
                </div>

                <div class="contentForm" style="margin-bottom: 1%;">
                    
                    <?php
                        if($_SESSION['reqf_opd'] == 1){
                    ?>
                        <form action="" >
                        
                            <div class="row">
                                <div class="col-25">
                                    <label for="">Claim Form No</label>
                                </div>
                                <div class="col-75">
                                    <input type="text" name="claim_form_no" <?php echo 'value="'.$_SESSION['reqf_claim_form_no'].'"'?> disabled> <br>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-25">
                                    <label for="">Member Name</label>
                                </div>
                                <div class="col-75">
                                    <input type="text" name="claim_form_no" <?php echo 'value="'.$_SESSION['reqf_mem_initials']." ".$_SESSION['reqf_mem_sname'].'"'?> disabled> <br>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-25">  
                                    <label for="">Patient Name</label>
                                </div>
                                <div class="col-75">
                                    <input type="text" name="patient_name" <?php echo 'value="'.$_SESSION['reqf_patient_name'].'"'?> disabled> <br>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-25">
                                    <label for="">Relationship</label>
                                </div>
                                <div class="col-75">
                                    <input type="text" name="relationship" <?php echo 'value="'.$_SESSION['reqf_relationship'].'"'?> disabled> <br>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-25">
                                    <label for="">Doctor Name</label>
                                </div>
                                <div class="col-75">
                                    <input type="text" name="doctor_name" <?php echo 'value="'.$_SESSION['reqf_doctor_name'].'"'?> disabled> <br>
                                </div>
                            </div> 

                            <div class="row">
                                <div class="col-25">
                                    <label for="">Treatment Received Date</label>
                                </div>
                                <div class="col-75">
                                    <input type="text" name="treatment_received_date" <?php echo 'value="'.$_SESSION['reqf_treatment_received_date'].'"'?> disabled> <br>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-25">
                                    <label for="">Bill Issued Date</label>
                                </div>
                                <div class="col-75">
                                    <input type="text" name="bill_issued_date" <?php echo 'value="'.$_SESSION['reqf_bill_issued_date'].'"'?> disabled> <br>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-25">
                                    <label for="">Purpose</label>
                                </div>
                                <div class="col-75">
                                    <input type="text" name="purpose" <?php echo 'value="'.$_SESSION['reqf_purpose'].'"'?> disabled> <br>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-25">
                                    <label for="">Bill Amount</label>
                                </div>
                                <div class="col-75">
                                    <input type="text" name="bill_amount" <?php echo 'value="'.$_SESSION['reqf_bill_amount'].'"'?> disabled> <br>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-25">
                                    <label for="">Prescripton Bill</label>
                                </div>
                                <div class="col-75">
                                    <input type="text" name="file_name" <?php echo 'value="'.$_SESSION['reqf_file_name'].'"'?> disabled> <br>
                                </div>
                            </div>
                            
                        </form>
                    <?php
                        }
                    ?>

                    <?php
                        if($_SESSION['reqf_surgical'] == 1){
                    ?>
                        <form action="" >
                            
                            <div class="row">
                                <div class="col-25">
                                    <label for="">Claim Form No</label>
                                </div>
                                <div class="col-75">
                                    <input type="text" name="claim_form_no" <?php echo 'value="'.$_SESSION['reqf_claim_form_no'].'"' ?> disabled> <br>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-25">
                                    <label for="">Member Name</label>
                                </div>
                                <div class="col-75">
                                    <input type="text" name="claim_form_no" <?php echo 'value="'.$_SESSION['reqf_mem_initials']." ".$_SESSION['reqf_mem_sname'].'"'?> disabled> <br>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-25">
                                    <label for="">Patient Name No</label>
                                </div>
                                <div class="col-75">
                                    <input type="text" name="patient_name" <?php echo 'value="'.$_SESSION['reqf_patient_name'].'"' ?> disabled> <br>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-25">
                                    <label for="">Relationship</label>
                                </div>
                                <div class="col-75">
                                    <input type="text" name="relationship" <?php echo 'value="'.$_SESSION['reqf_relationship'].'"' ?> disabled> <br>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-25">
                                    <label for="">Date of the Accident</label>
                                </div>
                                <div class="col-75">
                                    <input type="date" name="accident_date" <?php echo 'value="'.$_SESSION['reqf_accident_date'].'"' ?> disabled><br>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-25">
                                    <label for="">How Accident Occured</label>
                                </div>
                                <div class="col-75">
                                    <input type="text" name="how_occured" <?php echo 'value="'.$_SESSION['reqf_how_occured'].'"' ?> disabled> <br>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-25">
                                    <label for="">Nature and Extend of Injuries</label>
                                </div>
                                <div class="col-75">
                                    <input type="text" name="injuries" <?php echo 'value="'.$_SESSION['reqf_injuries'].'"' ?> disabled> <br>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-25">
                                    <label for="">Nature of Illness</label>
                                </div>
                                <div class="col-75">
                                    <input type="text" name="nature_of_illness" <?php echo 'value="'.$_SESSION['reqf_nature_of_illness'].'"' ?> disabled> <br>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-25">
                                    <label for="">Date of Commencement of Illness</label>
                                </div>
                                <div class="col-75">
                                    <input type="date" name="commence_date" <?php echo 'value="'.$_SESSION['reqf_commence_date'].'"' ?> disabled> <br>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-25">
                                    <label for="">Date of First Consultation</label>
                                </div>
                                <div class="col-75">
                                    <input type="date" name="first_consult_date" <?php echo 'value="'.$_SESSION['reqf_first_consult_date'].'"' ?> disabled> <br>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-25">
                                    <label for="">Name of the Doctor</label>
                                </div>
                                <div class="col-75">
                                    <input type="text" name="doctor_name" <?php echo 'value="'.$_SESSION['reqf_doctor_name'].'"' ?> disabled> <br>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-25">
                                    <label for="">Address of the Doctor</label>
                                </div>
                                <div class="col-75">
                                    <input type="text" name="doctor_address" <?php echo 'value="'.$_SESSION['reqf_doctor_address'].'"' ?> disabled> <br>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-25">
                                    <label for="">Hospitalized On</label>
                                </div>
                                <div class="col-75">
                                    <input type="date" name="hospitalized_date" <?php echo 'value="'.$_SESSION['reqf_hospitalized_date'].'"' ?> disabled> <br>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-25">
                                    <label for="">Discharged On</label>
                                </div>
                                <div class="col-75">
                                    <input type="date" name="discharged_date" <?php echo 'value="'.$_SESSION['reqf_discharged_date'].'"' ?> disabled> <br>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-25">
                                    <label for="">Have you ever had the same illness before ? <br>if so give the particulars and date</label>
                                </div>
                                <div class="col-75">
                                    <input type="text" name="illness_before" <?php echo 'value="'.$_SESSION['reqf_illness_before'].'"' ?> disabled> <br>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-25">
                                    <label for="">Have you during the past five years had any illness or <br>
                                                accident necessitating medical attention <br>
                                                    if so, give full particulars </label>
                                </div>
                                <div class="col-75">
                                    <input type="text" name="illness_before_years" <?php echo 'value="'.$_SESSION['reqf_illness_before_years'].'"' ?> disabled> <br>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-25">
                                    <label for="">Have you previously suffered from sickness injury <br>
                                                    if so, give full particulars</label>
                                </div>
                                <div class="col-75">
                                    <input type="text" name="sick_injury" <?php echo 'value="'.$_SESSION['reqf_sick_injury'].'"' ?> disabled> <br>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-25">
                                    <label for="">Any claims pending or are you entitled to claim upon any other <br>
                                                    insurer, society of fund in respect of any illness or any injury <br>
                                                    suffered by you ?</label>
                                </div>
                                <div class="col-75">
                                    <input type="text" name="insurer_claims" <?php echo 'value="'.$_SESSION['reqf_insurer_claims'].'"' ?> disabled> <br>
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
                                    <input type="text" name="nature_of" <?php echo 'value="'.$_SESSION['reqf_nature_of'].'"' ?> disabled> <br>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-25">
                                    <label for="">Prescripton Bill</label>
                                </div>
                                <div class="col-75">
                                    <input type="text" name="file_name" <?php echo 'value="'.$_SESSION['reqf_file_name'].'"'?> disabled> <br>
                                </div>
                            </div>
                        </form>
                    <?php
                        }
                    ?>
                        <button class="subbtn" type="submit" name="">
                            <a href="rvRequestedClaimFormV.php">View Another</a>
                        </button>
                        <button class="cancelbtn" type="submit" name="">
                            <a href="rvHomeV.php">Exit</a>
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