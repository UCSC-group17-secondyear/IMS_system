<?php
    require "../basic/topnav.php";
?>

<main>
    <title>Surgical Claim Details</title>
        <div class="sansserif">
                    
                        <ul class="breadcrumbs">
                            <li><a href="moHomeV.php">Home</a></li>
                            <li><a href="../../controller/moControllers/reqClaimFormListControllerOne.php">Form List</a></li>
                            <li class="active">Surgical Claim Details</li>
                        </ul>
                    
            <div class="row" style="margin-bottom: 4%;">
                    <div class="col left20">
                        <?php 
                            require('moSideNavV.php');
                        ?>
                    </div>

                    <div class="col right80">
                        <div>
                            <h2>Surgical Claim Details</h2>
                        </div>

                        <div class="contentForm" style="margin-bottom: 1%;">
                            <form action="../../controller/moControllers/reqClaimFormControllerThree.php" method="post" enctype="multipart/form-data">
                            
                                <div class="row">
                                    <div class="col-25">
                                        <label for="">Claim Form No</label>
                                    </div>
                                    <div class="col-75">
                                        <input type="text" name="claim_form_no" <?php echo 'value="'.$_SESSION['claim_form_no'].'"' ?> disabled> <br>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-25">
                                        <label for="">Member Name</label>
                                    </div>
                                    <div class="col-75">
                                        <input type="text" name="claim_form_no" <?php echo 'value="'.$_SESSION['mem_initials']." ".$_SESSION['mem_sname'].'"'?> disabled> <br>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-25">
                                        <label for="">Patient Name No</label>
                                    </div>
                                    <div class="col-75">
                                        <input type="text" name="patient_name" <?php echo 'value="'.$_SESSION['patient_name'].'"' ?> disabled> <br>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-25">
                                        <label for="">Relationship</label>
                                    </div>
                                    <div class="col-75">
                                        <input type="text" name="relationship" <?php echo 'value="'.$_SESSION['relationship'].'"' ?> disabled> <br>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-25">
                                        <label for="">Date of the Accident</label>
                                    </div>
                                    <div class="col-75">
                                        <input type="date" name="accident_date" <?php echo 'value="'.$_SESSION['accident_date'].'"' ?> disabled><br>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-25">
                                        <label for="">How Accident Occured</label>
                                    </div>
                                    <div class="col-75">
                                        <input type="text" name="how_occured" <?php echo 'value="'.$_SESSION['how_occured'].'"' ?> disabled> <br>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-25">
                                        <label for="">Nature and Extend of Injuries</label>
                                    </div>
                                    <div class="col-75">
                                        <input type="text" name="injuries" <?php echo 'value="'.$_SESSION['injuries'].'"' ?> disabled> <br>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-25">
                                        <label for="">Nature of Illness</label>
                                    </div>
                                    <div class="col-75">
                                        <input type="text" name="nature_of_illness" <?php echo 'value="'.$_SESSION['nature_of_illness'].'"' ?> disabled> <br>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-25">
                                        <label for="">Date of Commencement of Illness</label>
                                    </div>
                                    <div class="col-75">
                                        <input type="date" name="commence_date" <?php echo 'value="'.$_SESSION['commence_date'].'"' ?> disabled> <br>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-25">
                                        <label for="">Date of First Consultation</label>
                                    </div>
                                    <div class="col-75">
                                        <input type="date" name="first_consult_date" <?php echo 'value="'.$_SESSION['first_consult_date'].'"' ?> disabled> <br>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-25">
                                        <label for="">Name of the Doctor</label>
                                    </div>
                                    <div class="col-75">
                                        <input type="text" name="doctor_name" <?php echo 'value="'.$_SESSION['doctor_name'].'"' ?> disabled> <br>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-25">
                                        <label for="">Address of the Doctor</label>
                                    </div>
                                    <div class="col-75">
                                        <input type="text" name="doctor_address" <?php echo 'value="'.$_SESSION['doctor_address'].'"' ?> disabled> <br>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-25">
                                        <label for="">Hospitalized On</label>
                                    </div>
                                    <div class="col-75">
                                        <input type="date" name="hospitalized_date" <?php echo 'value="'.$_SESSION['hospitalized_date'].'"' ?> disabled> <br>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-25">
                                        <label for="">Discharged On</label>
                                    </div>
                                    <div class="col-75">
                                        <input type="date" name="discharged_date" <?php echo 'value="'.$_SESSION['discharged_date'].'"' ?> disabled> <br>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-25">
                                        <label for="">Have you ever had the same illness before ? <br>if so give the particulars and date</label>
                                    </div>
                                    <div class="col-75">
                                        <input type="text" name="illness_before" <?php echo 'value="'.$_SESSION['illness_before'].'"' ?> disabled> <br>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-25">
                                        <label for="">Have you during the past five years had any illness or <br>
                                                    accident necessitating medical attention <br>
                                                        if so, give full particulars </label>
                                    </div>
                                    <div class="col-75">
                                        <input type="text" name="illness_before_years" <?php echo 'value="'.$_SESSION['illness_before_years'].'"' ?> disabled> <br>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-25">
                                        <label for="">Have you previously suffered from sickness injury <br>
                                                        if so, give full particulars</label>
                                    </div>
                                    <div class="col-75">
                                        <input type="text" name="sick_injury" <?php echo 'value="'.$_SESSION['sick_injury'].'"' ?> disabled> <br>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-25">
                                        <label for="">Any claims pending or are you entitled to claim upon any other <br>
                                                        insurer, society of fund in respect of any illness or any injury <br>
                                                        suffered by you ?</label>
                                    </div>
                                    <div class="col-75">
                                        <input type="text" name="insurer_claims" <?php echo 'value="'.$_SESSION['insurer_claims'].'"' ?> disabled> <br>
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
                                        <input type="text" name="nature_of" <?php echo 'value="'.$_SESSION['nature_of'].'"' ?> disabled> <br>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-25">
                                        <label for="">Prescripton Bill</label>
                                    </div>
                                    <div class="col-75">
                                        <input type="text" name="file_name" <?php echo 'value="'.$_SESSION['file_name'].'"'?> disabled> <br>
                                    </div>
                                </div>

                                <button class="subbtn" type="submit" name="accept-submit" onclick="return confirm('Are you sure?')">Accept</button>
                                <button type="submit" class="cancelbtn" name="reject-submit" onclick="return confirm('Are you sure?')">Reject</button>

                            </form>
                            <button onclick="topFunction()" id="myTopBtn" title="Go to top"><i class="fa fa-arrow-circle-up"></i> Top</button>

                        </div>
                        
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