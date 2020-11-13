<?php
    require "../basic/topnav.php";
?>

<main>
    <title>Surgical Form</title>
        <div class="sansserif">
                    
                        <ul class="breadcrumbs">
                            <li><a href="memHomeV.php">Home</a></li>
                            <li class="active">Surgical Hospitalization Form</li>
                        </ul>
                   
            <div class="row">
                    <div class="col left20">
                        <?php 
                            require('memSideNavV.php');
                        ?>
                    </div>

                
                    <div class="col right80">
                        <div>
                            <h2>Surgical Hospitalization Form</h2>
                        </div>
                        
                        <div class="contentForm">
                            <form action="../../controller/surgicalFormControllerTwo.php?user_id=<?php echo $_SESSION['userId'] ?>" method="post" enctype="multipart/form-data">
                             
                            <div class="row">
                                <div class="col-25">
                                    <label for="">Enter Patient's Name</label>
                                </div>
                                <div class="col-75">
                                    <input type="text" name="patient_name" required> <br>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-25">
                                    <label for="">Address</label>
                                </div>
                                <div class="col-75">
                                    <input type="text" name="address" required> <br>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-25">
                                    <label for="">Select relationship</label>
                                </div>
                                <div class="col-75">
                                    <select name="relationship" required>
                                        <option value="myself">Myself</option>
                                        <option value="husband">Husband</option>
                                        <option value="wife">Wife</option>
                                        <option value="daughter">Daughter</option>
                                        <option value="son">Son</option>
                                    </select> <br>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-25">
                                    <label for="">Date of the Accident</label>
                                </div>
                                <div class="col-75">
                                    <input type="date" name="accident_date" required> <br>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-25">
                                    <label for="">How Accident Occured</label>
                                </div>
                                <div class="col-75">
                                    <input type="text" name="how_occured" required> <br>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-25">
                                    <label for="">Nature and Extend of Injuries</label>
                                </div>
                                <div class="col-75">
                                    <input type="text" name="injuries" required> <br>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-25">
                                    <label for="">Nature of Illness</label>
                                </div>
                                <div class="col-75">
                                    <input type="text" name="nature_of_illness" required> <br>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-25">
                                    <label for="">Date of Commencement of Illness</label>
                                </div>
                                <div class="col-75">
                                    <input type="date" name="commence_date" required> <br>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-25">
                                    <label for="">Date of First Consultation</label>
                                </div>
                                <div class="col-75">
                                    <input type="date" name="first_consult_date" required> <br>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-25">
                                    <label for="">Name of the Doctor</label>
                                </div>
                                <div class="col-75">
                                    <input type="text" name="doctor_name" required> <br>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-25">
                                    <label for="">Address of the Doctor</label>
                                </div>
                                <div class="col-75">
                                    <input type="text" name="doctor_address" required> <br>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-25">
                                    <label for="">Hospitalized On</label>
                                </div>
                                <div class="col-75">
                                    <input type="date" name="hospitalized_date" required> <br>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-25">
                                    <label for="">Discharged On</label>
                                </div>
                                <div class="col-75">
                                    <input type="date" name="discharged_date" required> <br>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-25">
                                    <label for="">Have you ever had the same illness before ? <br>if so give the particulars and date</label>
                                </div>
                                <div class="col-75">
                                    <input type="text" name="illness_before"  required> <br>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-25">
                                    <label for="">Have you during the past five years had any illness or <br>
                                                    accident necessitating medical attention <br>
                                                    if so, give full particulars </label>
                                </div>
                                <div class="col-75">
                                    <input type="text" name="illness_before_years" required> <br>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-25">
                                    <label for="">Have you previously suffered from sickness injury <br>
                                                    if so, give full particulars</label>
                                </div>
                                <div class="col-75">
                                    <input type="text" name="sick_injury" required> <br>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-25">
                                    <label for="">Any claims pending or are you entitled to claim upon any other <br>
                                                    insurer, society of fund in respect of any illness or any injury <br>
                                                    suffered by you ?</label>
                                </div>
                                <div class="col-75">
                                    <input type="text" name="insurer_claims" required> <br>
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
                                    <input type="text" name="nature_of" required> <br>
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

                                <button class="mainbtn" type="submit" name="form-submit">Submit</button><br>  
                            </form>

                            <form>
                                <button class="subbtn" type="submit" name="userroleList-submit">
                                    <a href="../../controller/claimFormListControllerOne.php?user_id=<?php echo $_SESSION['userId'] ?>"> View Claim Form List</a>
                                </button>
                                <button type="submit" class="cancelbtn">
                                    <a href="memHomeV.php">Cancel</a>
                                </button>
                                
                            </form>    
                            <br>
                            <h2>Download the form to be filled by the surgeon and get if field before you fill the surgical
                                hospitalization form.</h2><br>
                        </div>
                    </div>
                    <button onclick="topFunction()" id="myTopBtn" title="Go to top"><i class="fa fa-arrow-circle-up"></i> Top</button>
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