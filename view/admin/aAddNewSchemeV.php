<main>
    <title>Add a new scheme</title>
    <?php
        require '../basic/header.php';
    ?>

    <div class="header">
        <ul class="breadcrumbs">
            <li><a href="aHomeV.php">Home</a></li>
            <li>Add a new scheme</li>
        </ul>
    </div>

    <div class="side-nav">
        <?php
            require '../admin/aSideNavV.php';
        ?>
    </div>

    <div class="content">
        <form action="../../controller/adminControllers/manageSchemesC.php" method="post">
            Enter Scheme Name 
            <input type="text" name="schemeName" placeholder="Scheme Name" required/><br>

            <h3>1. Indoor Benefits (per family or individual)</h3>
            <h4>COVERS</h4>
    
                Enter Maximum room charge per day in a hospital <input type="text" name="maxRoomCharge" placeholder="Maximum room charge per day" required/><br>

                Non-State Hospital/paying wards of state and semi state hospitals Charges including Room Charges 
                <input type="text" name="hospitalCharges" placeholder="Hospital charges" required/><br>

                Enter Annual Premium 
                <input type="text" name="annualPremium" placeholder="Annual Premium" required/><br>

                Enter the monthly premium 
                <input type="text" name="monthlyPremium" placeholder="Monthly deduction" required/><br>

            <h4>Additional Benefits within the Annual Limits</h4>

                Cover for Government Hospital non paying wards per day
                <p>(only for a Maximum of 30 days per one event)</p> 
                <input type="text" name="gvtNoPayingWard" placeholder="Cover for Government Hospital non paying wards per day" required/><br>

                Cover for a Child Birth at Government Hospital nonpaying wards (Normal or Caesarean) 
                <input type="text" name="gvtChildBirthCover" placeholder="Child Birth at Government Hospital nonpaying wards" required/><br>

                Cover for the Expenses incurred for travel within Sri Lanka to obtain Emergency Treatment 
                <input type="text" name="travelExpensesCover" placeholder="Expenses incurred for travel" required/><br>

            <h4>LIMITS</h4>

                Limit of ANY ONE YEAR/ANY ONE EVENT <p>(including charges related to Echocardiograph, ECG, CT, MRI, X-ray, Ultrasounds Scan, Pathological Lab Test and Stress Test, Hematological and Biochemical Investigations and Isotope Scanning etc.)</p> 
                <input type="text" name="annualLimit" placeholder="Annual Limit" required/><br>

            <h3>2. Outdoor Treatment (per family or individual)</h3>

                Consultant Fee, Cost of drugs (excluding Vitamins, food Supplements ant Routine vaccination) 
                <input type="text" name="consultantFee" placeholder="Consultant Fee" required/><br>

                Cost of investigations under the Recommendation of a medical offer registered in Sri Lanka Medical Council or Sri Lanka Ayurvedic Medical Council. <p>Consultation fees only for Specialist or Medical Officers Registered in Sri Lanka Medical Council or Ayurvedic Doctors registered in Ayurvedic Medical Council, Dental treatment (filling and extraction only) and eye test.</p> 
                <input type="text" name="investigationsCost" placeholder="Cost of investigations" required/><br>

                Cost of Spectacles recommended by an eye specialist once in 3 years, those who have not claimed within last three (03) years can apply<p><h4>(family members are not covered)</h4></p> 
                <input type="text" name="spectaclesCost" placeholder="Cost of Spectacles" required/><br>

                Enter Eligibility Conditions 
                    <input type="text" name="eleigibilityConditions" placeholder="Eligibility Conditions" required/> <br>

            <button type="submit" name="addScheme-submit">Add new scheme</button>
        </form>
    </div>

    <?php
        require '../basic/footer.php';
    ?>
</main>