<?php
    require '../basic/topnav.php';
?>

<main>
    <title>Add a new scheme</title>
]
    <div class="sansserif">
        <ul class="breadcrumbs">
            <li><a href="aHomeV.php">Home</a></li>
            <li>Add a new scheme</li>
        </ul>

        <div class="row">
            <div class="col left20">
                <?php
                    require 'aSideNavV.php';
                ?>
            </div>

            <div class="col right80">
                <div>
                    <h2>Add a new Scheme</h2>
                </div>

                <div class="contentForm" style="margin-bottom: 30px;">
                    <form action="../../controller/adminControllers/manageSchemesC.php" method="post">
                        <div class="row">
                            <div class="col-25">
                                <label>Enter Scheme Name</label>
                            </div>
                            <div class="col-75">
                                <input type="text" name="schemeName" placeholder="Scheme Name" required/><br>
                            </div>
                        </div>
                        <div class="row">
                            <h3>1. INDOOR BENEFITS (per family or individual)</h3>
                            <h4>COVERS</h4>
                        </div>
                        <div class="row">
                            <div class="col-25">
                              <label>Enter Maximum room charge per day in a hospital</label>
                            </div>
                            <div class="col-75">
                                <input type="text" name="maxRoomCharge" placeholder="Maximum room charge per day" required/><br>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-25">
                              <label>Non-State Hospital/paying wards of state and semi state hospitals Charges including Room Charges </label>
                            </div>
                            <div class="col-75">
                                <input type="text" name="hospitalCharges" placeholder="Hospital charges" required/><br>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-25">
                              <label>Enter Annual Premium</label>
                            </div>
                            <div class="col-75">
                                <input type="text" name="annualPremium" placeholder="Annual Premium" required/><br>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-25">
                              <label>Enter the monthly premium</label>
                            </div>
                            <div class="col-75">
                                <input type="text" name="monthlyPremium" placeholder="Monthly deduction" required/><br>
                            </div>
                        </div>
                        <div class="row">
                            <h4>Additional Benefits within the Annual Limits</h4>
                        </div>
                        <div class="row">
                            <div class="col-25">
                              <label>Cover for Government Hospital non paying wards per day(only for a Maximum of 30 days per one event)</label>
                            </div>
                            <div class="col-75">
                                <input type="text" name="gvtNoPayingWard" placeholder="Cover for Government Hospital non paying wards per day" required/><br>
                            </div>  
                        </div> 
                        <div class="row">
                            <div class="col-25">
                              <label>Cover for a Child Birth at Government Hospital nonpaying wards (Normal or Caesarean)</label>
                            </div>
                            <div class="col-75">
                                <input type="text" name="gvtChildBirthCover" placeholder="Child Birth at Government Hospital nonpaying wards" required/><br>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-25">
                              <label>Cover for the Expenses incurred for travel within Sri Lanka to obtain Emergency Treatment</label>
                            </div>
                            <div class="col-75">
                                <input type="text" name="travelExpensesCover" placeholder="Expenses incurred for travel" required/><br>
                            </div>
                        </div>  
                        <div class="row">
                            <h4>LIMITS</h4>
                        </div>  
                        <div class="row">
                            <div class="col-25">
                              <label>Limit of ANY ONE YEAR/ANY ONE EVENT (including charges related to Echocardiograph, ECG, CT, MRI, X-ray, Ultrasounds Scan, Pathological Lab Test and Stress Test, Hematological and Biochemical Investigations and Isotope Scanning etc.)</label>
                            </div>
                            <div class="col-75">
                                <input type="text" name="annualLimit" placeholder="Annual Limit" required/><br>
                            </div>
                        </div> 
                        <div class="row">
                            <h3>2. OUTDOOR TREATMENT (per family or individual)</h3>
                        </div>   
                        <div class="row">
                            <div class="col-25">
                              <label>Consultant Fee, Cost of drugs (excluding Vitamins, food Supplements ant Routine vaccination)</label>
                            </div>
                            <div class="col-75">
                                <input type="text" name="consultantFee" placeholder="Consultant Fee" required/><br>
                            </div>
                        </div> 
                        <div class="row">
                            <div class="col-25">
                              <label>Cost of investigations under the Recommendation of a medical offer registered in Sri Lanka Medical Council or Sri Lanka Ayurvedic Medical Council. Consultation fees only for Specialist or Medical Officers Registered in Sri Lanka Medical Council or Ayurvedic Doctors registered in Ayurvedic Medical Council, Dental treatment (filling and extraction only) and eye test.</label>
                            </div> 
                            <div class="col-75">
                                <input type="text" name="investigationsCost" placeholder="Cost of investigations" required/><br>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-25">
                              <label>Cost of Spectacles recommended by an eye specialist once in 3 years, those who have not claimed within last three (03) years can apply (family members are not covered)</label>
                            </div>
                            <div class="col-75">
                                <input type="text" name="spectaclesCost" placeholder="Cost of Spectacles" required/><br>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-25">
                              <label>Enter Eligibility Conditions</label>
                            </div>
                            <div class="col-75">
                                <input type="text" name="eleigibilityConditions" placeholder="Eligibility Conditions" required/> <br>
                            </div>
                        </div> 
                        <button class="mainbtn" type="submit" name="addScheme-submit">Add new scheme</button>
                    </form>
                    
                    <form>
                        <button id="subBtn" class="subbtn">View Available Schemes</button>
                        <div id="subModal" class="modal">
                            <div class="modal-content">
                                <span class="close">&times;</span>
                                <?php
                                    require 'aSchemesPopupV.php';
                                ?>
                            </div>
                        </div>

                        <button id="myBtn" class="cancelbtn">Cancel</button>
                        <div id="myModal" class="modal">
                            <div class="modal-content">
                                <span class="close">&times;</span>
                                <h1>Are you sure you want to leave the page?</h1>
                                <button class="mainbtn">
                                    <a href="aHomeV.php">Yes</a>
                                </button>
                            </div>
                        </div>
                        <!-- <button type="submit" class="cancelbtn">
                            <a href="aHomeV.php">Cancel</a>
                        </button> -->
                    </form>

                </div>
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

        // var modal2 = document.getElementById("subModal");
        // var btn2 = document.getElementById("subBtn");
        document.getElementById("subBtn").onclick = function() {
            document.getElementById("subModal").style.display = "block";
        }

        // When the user clicks on <span> (x), close the modal
        span.onclick = function() {
          modal.style.display = "none";
        }

        // When the user clicks anywhere outside of the modal, close it
        window.onclick = function(event) {
          if (event.target == modal) {
            modal.style.display = "none";
          }
        }
    </script>

</main>

<?php
    require '../basic/footer.php';
?>