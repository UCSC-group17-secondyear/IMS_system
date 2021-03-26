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

                <form action="../../controller/msmControllers/msmViewFormsC.php" method="POST" enctype="multipart/form-data">

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
                                <input type="text" name="accident_date" <?php echo 'value="'.$_SESSION['accident_date'].'"' ?> readonly> <br>
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
                                <input type="text" name="commence_date" <?php echo 'value="'.$_SESSION['commence_date'].'"' ?> readonly> <br>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-25">
                                <label for="">Date of First Consultation</label>
                            </div>
                            <div class="col-75">
                                <input type="text" name="first_consult_date" <?php echo 'value="'.$_SESSION['first_consult_date'].'"' ?> readonly> <br>
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
                                <input type="text" name="hospitalized_date" <?php echo 'value="'.$_SESSION['hospitalized_date'].'"' ?> readonly> <br>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-25">
                                <label for="">Discharged On</label>
                            </div>
                            <div class="col-75">
                                <input type="text" name="discharged_date" <?php echo 'value="'.$_SESSION['discharged_date'].'"' ?> readonly> <br>
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
                                <label for="">Revised Bill Amount</label>
                            </div>
                            <div class="col-75">
                                <input type="text" name="revised_bill_amount" <?php echo 'value="'.$_SESSION['revised_bill_amount'].'"'?> readonly> <br>
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
                                <input type="text" name="msm_comment" <?php echo 'value="'.$_SESSION['msm_comment'].'"'?> required> <br>
                            </div>
                        </div>

                        <button class="subbtn" type="submit" name="paidaccept-submit" onclick="return confirm('Are you sure?')">Update</button>
                        <button class="cancelbtn" type="submit" name=""><a href="msmHomeV.php">Exit</a></button>

                    </form>
                </div>
                <button onclick="topFunction()" id="myTopBtn" title="Go to top"><i class="fa fa-arrow-circle-up"></i> Top</button>
            </div>
        </div>
    </div>

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
</main>

<?php
    require_once('../basic/footer.php');
?>