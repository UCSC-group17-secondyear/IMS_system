<main>
    <title>Surgical Claim Details</title>

    <?php
        require('../basic/header.php');
    ?>
        
    <div class="header">
        <ul class="breadcrumbs">
            <li><a href="memHomeV.php?user_id=<?php echo $_SESSION['user_id'] ?>">Home</a></li>
            <li>Surgical Claim Details</li>
        </ul>
    </div>

    <div class="side-nav">
        <?php 
            require('../medicalSchemeMember/memSideNavV.php');
        ?>
    </div>

    <div class="content">
        <div>
            <h4>Surgical Claim Details</h4>
        </div>

        <form action="../../controller/updateSurgicalFormController.php?user_id=<?php echo $_SESSION['userId'] ?>&claim_form_no=<?php echo $_SESSION['claim_form_no'] ?>" method="post" enctype="multipart/form-data">
            
            <label for="">User Id</label>
            <input type="text" name="userId" <?php echo 'value="'.$_SESSION['userId'].'"' ?> disabled> <br>

            <label for="">Claim Form No</label>
            <input type="text" name="claim_form_no" <?php echo 'value="'.$_SESSION['claim_form_no'].'"' ?> disabled> <br>

            <label for="">Patient Name No</label>
            <input type="text" name="patient_name" <?php echo 'value="'.$_SESSION['patient_name'].'"' ?> required> <br>

            <label for="">Relationship</label>
            <input type="text" name="relationship" <?php echo 'value="'.$_SESSION['relationship'].'"' ?> required> <br>

            <label for="">Date of the Accident</label>
            <input type="date" name="accident_date" <?php echo 'value="'.$_SESSION['accident_date'].'"' ?> required><br>

            <label for="">How Accident Occured</label>
            <input type="text" name="how_occured" <?php echo 'value="'.$_SESSION['how_occured'].'"' ?> required> <br>

            <label for="">Nature and Extend of Injuries</label>
            <input type="text" name="injuries" <?php echo 'value="'.$_SESSION['injuries'].'"' ?> required> <br>

            <label for="">Nature of Illness</label>
            <input type="text" name="nature_of_illness" <?php echo 'value="'.$_SESSION['nature_of_illness'].'"' ?> required> <br>

            <label for="">Date of Commencement of Illness</label>
            <input type="date" name="commence_date" <?php echo 'value="'.$_SESSION['commence_date'].'"' ?> required> <br>

            <label for="">Date of First Consultation</label>
            <input type="date" name="first_consult_date" <?php echo 'value="'.$_SESSION['first_consult_date'].'"' ?> required> <br>

            <label for="">Name of the Doctor</label>
            <input type="text" name="doctor_name" <?php echo 'value="'.$_SESSION['doctor_name'].'"' ?> required> <br>

            <label for="">Address of the Doctor</label>
            <input type="text" name="doctor_address" <?php echo 'value="'.$_SESSION['doctor_address'].'"' ?> required> <br>

            <label for="">Hospitalized On</label>
            <input type="date" name="hospitalized_date" <?php echo 'value="'.$_SESSION['hospitalized_date'].'"' ?> required> <br>

            <label for="">Discharged On</label>
            <input type="date" name="discharged_date" <?php echo 'value="'.$_SESSION['discharged_date'].'"' ?> required> <br>

            <label for="">Have you ever had the same illness before ? <br>if so give the particulars and date</label>
            <input type="text" name="illness_before" <?php echo 'value="'.$_SESSION['illness_before'].'"' ?> required> <br>

            <label for="">Have you during the past five years had any illness or <br>
                           accident necessitating medical attention <br>
                           if so, give full particulars </label>
            <input type="text" name="illness_before_years" <?php echo 'value="'.$_SESSION['illness_before_years'].'"' ?> required> <br>

            <label for="">Have you previously suffered from sickness injury <br>
                            if so, give full particulars</label>
            <input type="text" name="sick_injury" <?php echo 'value="'.$_SESSION['sick_injury'].'"' ?> required> <br>

            <label for="">Any claims pending or are you entitled to claim upon any other <br>
                insurer, society of fund in respect of any illness or any injury <br>
                suffered by you ?</label>
            <input type="text" name="insurer_claims" <?php echo 'value="'.$_SESSION['insurer_claims'].'"' ?> required> <br>

            <label for="">if you are undergoing treatment for the injury or illness to which <br>
                this claim relates, please states <br>
                    a. Nature of illness <br>
                    b. Nature of treatement <br>
                    c. Name of the hospital concerned if any <br>
                    d. Name of any consulting specialist whose recommnended<br>
                        you or have been recieving giving details of <br>
                       the treatment concerned and other specialist services <br>
                                received.</label>
            <input type="text" name="nature_of" <?php echo 'value="'.$_SESSION['nature_of'].'"' ?> required> <br>

            <label for="">Scanned copy of bill</label>
            <input type="file" name="file" required>

            <button type="submit" name="update-form">Update Form</button>
            
        </form>
    </div>
   
    <div class="right-side-bar">
        <a href="../../controller/viewProfileController.php?user_id=<?php echo $_SESSION['userId'] ?>&claim_form_no=<?php echo $_SESSION['claim_form_no'] ?>"><button type="submit" name="" class="button">Profile</button></a>
    </div>
    
    <?php
        require_once('../basic/footer.php');
    ?>
</main>