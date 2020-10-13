<main>
    <title>OPD Form</title>

    <?php
        require('../basic/header.php');
    ?>
        
    <div class="header">
        <ul class="breadcrumbs">
            <li><a href="memHomeV.php">Home</a></li>
            <li><a href="memFillClaimFormsV.php">Select Form Type</a></li> 
            <li>OPD Form</li>
        </ul>
    </div>

    <div class="side-nav">
        <?php 
            require('../medicalSchemeMember/memSideNavV.php');
        ?>
    </div>

    <div class="content">
        <div>
            <h2>OPD Form</h2>
        </div>

        <form action="" method="post">
            <label for="empName">Enter Name</label>
            <input type="text" value=""> <br>
            <label for="designation">Enter Designation</label>
            <input type="text" value=""> <br>
            <label for="department">Department</label>
            <select name="department" id="">
                <option valu="">Select Option</option>
                <option value="CS">CS</option>
                <option value="IS">IS</option>
                <option value="SE">SE</option>
            </select> <br>


            <label for="patientName">Enter Patient's Name</label>
            <input type="text" value=""> <br>

            <label for="patientName">Select relationship</label>
            <select name="relationship" id="">
                <option value="myself">Myself</option>
                <option value="husband">Husband</option>
                <option value="wife">Wife</option>
                <option value="daughter">Daughter</option>
                <option value="son">Son</option>
            </select> <br>

            <label for="doctor">Name of the Doctor</label>
            <input type="text" value=""> <br>
            <label for="trecieveddate">Treatment Recieved Date</label>
            <input type="date" value=""> <br>
            <label for="bissuedate">Bill Issued Date</label>
            <input type="date" value=""> <br>
            <label for="purpose">Purpose</label>
            <input type="text" value=""> <br>
            <label for="amount">Bill Amount</label>
            <input type="text" value=""> <br>
            <label for="bill">Scanned copy of bill</label><br><br>
            <!-- scaaned copy eka upload kranna -->
        </form>

        <a href="memFormSubmitSuccessV.php"><button type="submit" name="">Submit</button></a><br>

        <p>Download the form to be filled by the surgeon and get if field before you fill the surgical hospitalization form.</p>
    </div>


    <div class="right-side-bar">
        <a href="../../controller/viewProfileController.php?user_id=<?php echo $_SESSION['userId'] ?>"><button type="submit" name="" class="button">Profile</button></a>
    </div>
    
    <?php
        require_once('../basic/footer.php');
    ?>
</main>