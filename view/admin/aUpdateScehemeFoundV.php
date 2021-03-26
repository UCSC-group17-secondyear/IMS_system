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
                                <input type="text" name="schemeName" disabled <?php echo 'value="'.$_SESSION['schemeName'].'"' ?> /><br>
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
                                <input type="text" name="maxRoomCharge"  <?php echo 'value="'.$_SESSION['maxRoomCharge'].'"' ?> min="0" /><br>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-75">
                              <label>Non-State Hospital/paying wards of state and semi state hospitals Charges including Room Charges </label>
                            </div>
                            <div class="col-25">
                                <input type="text" name="hospitalCharges" <?php echo 'value="'.$_SESSION['hospitalCharges'].'"' ?> min="0" /><br>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-75">
                              <label>Enter Annual Premium</label>
                            </div>
                            <div class="col-25">
                                <input type="text" name="annualPremium"  <?php echo 'value="'.$_SESSION['annualPremium'].'"' ?> min="0" /><br>
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
                                <input type="text" name="gvtNoPayingWard" <?php echo 'value="'.$_SESSION['gvtNoPayingWard'].'"' ?> min="0" /><br>
                            </div>  
                        </div> 
                        <div class="row">
                            <div class="col-75">
                              <label>Cover for a Child Birth at Government Hospital nonpaying wards (Normal or Caesarean)</label>
                            </div>
                            <div class="col-25">
                                <input type="text" name="gvtChildBirthCover" <?php echo 'value="'.$_SESSION['gvtChildBirthCover'].'"' ?> min="0" /><br>
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
                                <input type="text" name="consultantFee"  <?php echo 'value="'.$_SESSION['consultantFee'].'"' ?> min="0" /><br>
                            </div>
                        </div> 

                        <div class="row">
                            <div class="col-75">
                              <label>Cost of Spectacles recommended by an eye specialist once in 3 years, those who have not claimed within last three (03) years can apply (family members are not covered)</label>
                            </div>
                            <div class="col-25">
                                <input type="text" name="spectaclesCost" <?php echo 'value="'.$_SESSION['spectaclesCost'].'"' ?> min="0" /><br>
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
                                <input type="text" name="permanentStaff" <?php echo 'value="'.$_SESSION['permanentStaff'].'"' ?> min="0" /><br>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-75">
                              <label>For contract staff</label>
                            </div>
                            <div class="col-25">
                                <input type="text" name="contractStaff" <?php echo 'value="'.$_SESSION['contractStaff'].'"' ?> min="0" /><br>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-75">
                              <label>For temporary staff</label>
                            </div>
                            <div class="col-25">
                                <input type="text" name="temporaryStaff" <?php echo 'value="'.$_SESSION['temporaryStaff'].'"' ?> min="0" /><br>
                            </div>
                        </div>

                        <button class="subbtn" type="submit" name="updateScheme-submit">Save updates</button>
                        <button class="cancelbtn">
                            <a href="aUpdateSchemeV.php">Cancel</a>
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