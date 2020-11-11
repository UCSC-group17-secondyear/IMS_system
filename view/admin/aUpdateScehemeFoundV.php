<?php
    require '../basic/topnav.php';
?>

<main>
    <title>Add a new scheme</title>
]
    <div class="sansserif">
        <ul class="breadcrumbs">
            <li><a href="aHomeV.php">Home</a></li>
            <li><a href="aUpdateSchemeV.php">Update a scheme</a></li>
            <li class="active">Update</li>
        </ul>

        <div class="row">
            <div class="col left20">
                <?php
                    require 'aSideNavV.php';
                ?>
            </div>

            <div class="col right80">
                <div>
                    <h2>Update selected Scheme</h2>
                </div>

                <div class="contentForm" style="margin-bottom: 0px;">
                    <form action="../../controller/adminControllers/manageSchemesC.php" method="post">
                        <div class="row">
                            <div class="col-75">
                                <label>Enter Scheme Name</label>
                            </div>
                            <div class="col-25">
                                <input type="text" name="schemeName"  <?php echo 'value="'.$_SESSION['schemeName'].'"' ?> dissabled /><br>
                            </div>
                        </div>
                        <div class="row">
                            <h3>1. INDOOR BENEFITS (per family or individual)</h3>
                            <h4>COVERS</h4>
                        </div>
                        <div class="row">
                            <div class="col-75">
                              <label>Enter Maximum room charge per day in a hospital</label>
                            </div>
                            <div class="col-25">
                                <input type="text" name="maxRoomCharge"  <?php echo 'value="'.$_SESSION['maxRoomCharge'].'"' ?> /><br>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-75">
                              <label>Non-State Hospital/paying wards of state and semi state hospitals Charges including Room Charges </label>
                            </div>
                            <div class="col-25">
                                <input type="text" name="hospitalCharges" <?php echo 'value="'.$_SESSION['hospitalCharges'].'"' ?> /><br>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-75">
                              <label>Enter Annual Premium</label>
                            </div>
                            <div class="col-25">
                                <input type="text" name="annualPremium"  <?php echo 'value="'.$_SESSION['annualPremium'].'"' ?> /><br>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-75">
                              <label>Enter the monthly premium</label>
                            </div>
                            <div class="col-25">
                                <input type="text" name="monthlyPremium"  <?php echo 'value="'.$_SESSION['monthlyPremium'].'"' ?> /><br>
                            </div>
                        </div>
                        <div class="row">
                            <h4>Additional Benefits within the Annual Limits</h4>
                        </div>
                        <div class="row">
                            <div class="col-75">
                              <label>Cover for Government Hospital non paying wards per day(only for a Maximum of 30 days per one event)</label>
                            </div>
                            <div class="col-25">
                                <input type="text" name="gvtNoPayingWard" <?php echo 'value="'.$_SESSION['gvtNoPayingWard'].'"' ?> /><br>
                            </div>  
                        </div> 
                        <div class="row">
                            <div class="col-75">
                              <label>Cover for a Child Birth at Government Hospital nonpaying wards (Normal or Caesarean)</label>
                            </div>
                            <div class="col-25">
                                <input type="text" name="gvtChildBirthCover" <?php echo 'value="'.$_SESSION['gvtChildBirthCover'].'"' ?> /><br>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-75">
                              <label>Cover for the Expenses incurred for travel within Sri Lanka to obtain Emergency Treatment</label>
                            </div>
                            <div class="col-25">
                                <input type="text" name="travelExpensesCover" <?php echo 'value="'.$_SESSION['travelExpensesCover'].'"' ?> /><br>
                            </div>
                        </div>  
                        <div class="row">
                            <h4>LIMITS</h4>
                        </div>  
                        <div class="row">
                            <div class="col-75">
                              <label>Limit of ANY ONE YEAR/ANY ONE EVENT (including charges related to Echocardiograph, ECG, CT, MRI, X-ray, Ultrasounds Scan, Pathological Lab Test and Stress Test, Hematological and Biochemical Investigations and Isotope Scanning etc.)</label>
                            </div>
                            <div class="col-25">
                                <input type="text" name="annualLimit"  <?php echo 'value="'.$_SESSION['annualLimit'].'"' ?> /><br>
                            </div>
                        </div> 
                        <div class="row">
                            <h3>2. OUTDOOR TREATMENT (per family or individual)</h3>
                        </div>   
                        <div class="row">
                            <div class="col-75">
                              <label>Consultant Fee, Cost of drugs (excluding Vitamins, food Supplements ant Routine vaccination)</label>
                            </div>
                            <div class="col-25">
                                <input type="text" name="consultantFee"  <?php echo 'value="'.$_SESSION['consultantFee'].'"' ?> /><br>
                            </div>
                        </div> 
                        <div class="row">
                            <div class="col-75">
                              <label>Cost of investigations under the Recommendation of a medical offer registered in Sri Lanka Medical Council or Sri Lanka Ayurvedic Medical Council. Consultation fees only for Specialist or Medical Officers Registered in Sri Lanka Medical Council or Ayurvedic Doctors registered in Ayurvedic Medical Council, Dental treatment (filling and extraction only) and eye test.</label>
                            </div> 
                            <div class="col-25">
                                <input type="text" name="investigationsCost" <?php echo 'value="'.$_SESSION['investigationsCost'].'"' ?> /><br>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-75">
                              <label>Cost of Spectacles recommended by an eye specialist once in 3 years, those who have not claimed within last three (03) years can apply (family members are not covered)</label>
                            </div>
                            <div class="col-25">
                                <input type="text" name="spectaclesCost" <?php echo 'value="'.$_SESSION['spectaclesCost'].'"' ?> /><br>
                            </div>
                        </div>
                        <div class="row">
                            <h3>3. Eligibility Conditions (required service period to join the scheme in MONTHS)</h3>
                        </div>
                        <div class="row">
                            <div class="col-75">
                              <label>For permanent staff</label>
                            </div>
                            <div class="col-25">
                                <input type="text" name="permanentStaff" <?php echo 'value="'.$_SESSION['permanentStaff'].'"' ?> /><br>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-75">
                              <label>For contract staff</label>
                            </div>
                            <div class="col-25">
                                <input type="text" name="contractStaff" <?php echo 'value="'.$_SESSION['contractStaff'].'"' ?> /><br>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-75">
                              <label>For temporary staff</label>
                            </div>
                            <div class="col-25">
                                <input type="text" name="temporaryStaff" <?php echo 'value="'.$_SESSION['temporaryStaff'].'"' ?> /><br>
                            </div>
                        </div>

                        <button class="subbtn" type="submit" name="updateScheme-submit">Save updates</button>
                        <button class="cancelbtn">
                            <a href="aUpdateSchemeV.php">Cancel</a>
                        </button>
                    </form>

                    <!-- <button id="subBtn" class="subbtn"><a href="../../controller/adminControllers/aViewSchemesC.php">View available schemes</a></button>
                    <button id="myBtn" class="cancelbtn">Cancel</button> --> 
                </div>
                <!-- <div id="subModal" class="modal">
                    <div class="modal-content">
                        <span class="subclose">&times;</span>
                        <?php
                            // require 'aSchemesPopupV.php';
                        ?>
                    </div>
                </div> -->
                <!-- <div id="myModal" class="modal">
                    <div class="modal-content">
                        <span class="close">&times;</span>
                        <h1>Are you sure you want to leave the page?</h1>
                        <button class="mainbtn">
                            <a href="aHomeV.php">Yes</a>
                        </button>
                    </div>
                </div> -->
                <button onclick="topFunction()" id="myTopBtn" title="Go to top"><i class="fa fa-arrow-circle-up"></i> Top</button>
            </div>
        </div>
    </div>

    <script type="text/javascript">
        var modal = document.getElementById("myModal");
        // Get the button that opens the modal
        var btn = document.getElementById("myBtn");
        // Get the <span> element that closes the modal
        var span = document.getElementsByClassName("close")[0];
        // When the user clicks on the button, open the modal
        btn.onclick = function() {
          modal.style.display = "block";
        }
        // When the user clicks on <span> (x), close the modal
        span.onclick = function() {
          modal.style.display = "none";
        }

        var submodal = document.getElementById("subModal");
        var subbtn = document.getElementById("subBtn");
        var subspan = document.getElementsByClassName("subclose")[0];
        subbtn.onclick = function() {
          submodal.style.display = "block";
        }
        subspan.onclick = function() {
          submodal.style.display = "none";
        }

        // When the user clicks anywhere outside of the modal, close it
        window.onclick = function(event) {
          if (event.target == modal) {
            modal.style.display = "none";
          }
        }


        //Get the button
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

        // When the user clicks on the button, scroll to the top of the document
        function topFunction() {
          document.body.scrollTop = 0;
          document.documentElement.scrollTop = 0;
        }
    </script>

</main>

<?php
    require '../basic/footer.php';
?>