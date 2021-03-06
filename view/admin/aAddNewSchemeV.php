<?php
    require '../basic/topnav.php';
?>

<main>
    <div class="sansserif">
        <ul class="breadcrumbs">
            <li><a href="aHomeV.php">Home</a></li>
            <li class="active">Add a new scheme</li>
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

                <div class="contentForm" style="margin-bottom: 0px;">
                    <form action="../../controller/adminControllers/manageSchemesC.php" method="post">
                        <div class="row">
                            <div class="col-75">
                                <label>Enter Scheme Name</label>
                            </div>
                            <div class="col-25">
                                <input type="text" name="schemeName"  required/><br>
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
                                <input type="number" name="maxRoomCharge" min="0" required/><br>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-75">
                              <label>Non-State Hospital/paying wards of state and semi state hospitals Charges including Room Charges </label>
                            </div>
                            <div class="col-25">
                                <input type="number" name="hospitalCharges" min="0" required/><br>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-75">
                              <label>Enter Annual Premium</label>
                            </div>
                            <div class="col-25">
                                <input type="number" name="annualPremium"  min="0" required/><br>
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
                                <input type="number" name="gvtNoPayingWard" min="0" required/><br>
                            </div>  
                        </div> 
                        <div class="row">
                            <div class="col-75">
                              <label>Cover for a Child Birth at Government Hospital nonpaying wards (Normal or Caesarean)</label>
                            </div>
                            <div class="col-25">
                                <input type="number" name="gvtChildBirthCover" min="0" required/><br>
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
                                <input type="number" name="consultantFee"  min="0" required/><br>
                            </div>
                        </div> 
                        
                        <div class="row">
                            <div class="col-75">
                              <label>Cost of Spectacles recommended by an eye specialist once in 3 years, those who have not claimed within last three (03) years can apply (family members are not covered)</label>
                            </div>
                            <div class="col-25">
                                <input type="number" name="spectaclesCost" min="0" required/><br>
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
                                <input type="number" min="0" name="permanentStaff" min="0" required/>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-75">
                              <label>For Contract staf</label>
                            </div>
                            <div class="col-25">
                                <input type="number" min="0" name="contractStaff" min="0" required/>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-75">
                              <label>For Assignment/Temporary staf</label>
                            </div>
                            <div class="col-25">
                                <input  name="temporaryStaff" min="0" required/>
                            </div>
                        </div>

                        <button class="subbtn" type="submit" name="addScheme-submit">Add new scheme</button>
                        <button class="cancelbtn">
                            <a href="aHomeV.php">Cancel</a>
                        </button>
                    </form> 
                </div>
                <button onclick="topFunction()" id="myTopBtn" title="Go to top"><i class="fa fa-arrow-circle-up"></i> Top</button>
            </div>
        </div>
    </div>

    <script type="text/javascript">
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