<?php
    require "../basic/topnav.php";
?>

<main>
    <title>Surgical Claim Details</title>
        <div class="sansserif">
                    
                        <ul class="breadcrumbs">
                            <li><a href="memHomeV.php">Home</a></li>
                            <li><a href="../../controller/memControllers/claimFormListControllerOne.php?user_id=<?php echo $_SESSION['userId'] ?>">Form List</a></li>
                            <li class="active">Surgical Claim Details</li>
                        </ul>
                    
            <div class="row" style="margin-bottom: 4%;">
                    <div class="col left20">
                        <?php 
                            require('memSideNavV.php');
                        ?>
                    </div>

                    <div class="col right80">
                        <div>
                            <h2>Surgical Claim Details</h2>
                        </div>

                        <div class="contentForm" style="margin-bottom: 1%;">
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
                                    <label for="">Patient Name</label>
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
                                    <input type="text" name="relatioship" <?php echo 'value="'.$_SESSION['relationship'].'"'?> readonly> <br>
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

                            <button onclick="topFunction()" id="myTopBtn" title="Go to top"><i class="fa fa-arrow-circle-up"></i> Top</button>
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