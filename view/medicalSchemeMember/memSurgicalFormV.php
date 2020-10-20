<main>
    <title>Surgical Form</title>

    <?php
        require('../basic/header.php');
    ?>
        
    <div class="header">
        <ul class="breadcrumbs">
            <li><a href="memHomeV.php">Home</a></li>
            <li>Surgical Form</li>
        </ul>
    </div>

    <div class="side-nav">
        <?php 
            require('../medicalSchemeMember/memSideNavV.php');
        ?>
    </div>

    <div class="content">
        <div>
            <h4>Surgical Hospitalization Form</h4>
        </div>

        <form action="../../controller/surgicalFormControllerTwo.php?user_id=<?php echo $_SESSION['userId'] ?>" method="post" enctype="multipart/form-data">
            
            <label for="">Emp Id</label>
            <input type="text" name="empid" <?php echo 'value="'.$_SESSION['empid'].'"' ?> disabled> <br>

            <label for="">Initials</label>
            <input type="text" name="initials" <?php echo 'value="'.$_SESSION['initials'].'"'?> disabled> <br>
            
            <label for="">Name</label>
            <input type="text" name="sname" <?php echo 'value="'.$_SESSION['sname'].'"'?> disabled> <br>
            
            <label for="">Designation</label>
            <input type="text" name="designation" <?php echo 'value="'.$_SESSION['designation'].'"'?> disabled> <br>

            <label for="">Department</label>
            <select name="department" id="" required>
                <option valu="">Select Option</option>
                <option value="CS">CS</option>
                <option value="IS">IS</option>
                <option value="SE">SE</option>
            </select> <br>

            <label for="">Address</label>
            <input type="text" name="address" required> <br>

            <label for="">Telephone No</label>
            <input type="text" name="tp" <?php echo 'value="'.$_SESSION['tp'].'"' ?> disabled> <br>

            <label for="">Mobile No</label>
            <input type="text" name="mobile" <?php echo 'value="'.$_SESSION['mobile'].'"' ?> disabled> <br>

            <label for="">Enter Patient's Name</label>
            <input type="text" name="patient_name" required> <br>

            <label for="">Select relationship</label>
            <select name="relationship" required>
                <option value="myself">Myself</option>
                <option value="husband">Husband</option>
                <option value="wife">Wife</option>
                <option value="daughter">Daughter</option>
                <option value="son">Son</option>
            </select> <br>

            <label for="">Date of the Accident</label>
            <input type="date" name="accident_date"> <br>

            <label for="">How Accident Occured</label>
            <input type="text" name="how_occured"> <br>

            <label for="">Nature and Extend of Injuries</label>
            <input type="text" name="injuries"> <br>

            <label for="">Nature of Illness</label>
            <input type="text" name="nature_of_illness"> <br>

            <label for="">Date of Commencement of Illness</label>
            <input type="date" name="commence_date"> <br>

            <label for="">Date of First Consultation</label>
            <input type="date" name="first_consult_date"> <br>

            <label for="">Name of the Doctor</label>
            <input type="text" name="doctor_name"> <br>

            <label for="">Address of the Doctor</label>
            <input type="text" name="doctor_address"> <br>

            <label for="">Hospitalized On</label>
            <input type="date" name="hospitalized_date"> <br>

            <label for="">Discharged On</label>
            <input type="date" name="discharged_date"> <br>

            <label for="">Have you ever had the same illness before ? <br>if so give the particulars and date</label>
            <input type="text" name="illness_before"> <br>

            <label for="">Have you during the past five years had any illness or <br>
                           accident necessitating medical attention <br>
                           if so, give full particulars </label>
            <input type="text" name="illness_before_years"> <br>

            <label for="">Have you previously suffered from sickness injury <br>
                            if so, give full particulars</label>
            <input type="text" name="sick_injury"> <br>

            <label for="">Any claims pending or are you entitled to claim upon any other <br>
                insurer, society of fund in respect of any illness or any injury <br>
                suffered by you ?</label>
            <input type="text" name="insurer_claims"> <br>

            <label for="">if you are undergoing treatment for the injury or illness to which <br>
                this claim relates, please states <br>
                    a. Nature of illness <br>
                    b. Nature of treatement <br>
                    c. Name of the hospital concerned if any <br>
                    d. Name of any consulting specialist whose recommnended<br>
                        you or have been recieving giving details of <br>
                       the treatment concerned and other specialist services <br>
                                received.</label>
            <input type="text" name="nature_of"> <br>

            <label for="">Scanned copy of bill</label>
            <input type="file" name="file" required>

            <button type="submit" name="form-submit">Submit</button><br>
            
        </form>
        <p>Download the form to be filled by the surgeon and get if field before you fill the surgical hospitalization form.</p>
    </div>
   
    <div class="right-side-bar">
        <a href="../../controller/viewProfileController.php?user_id=<?php echo $_SESSION['userId'] ?>"><button type="submit" name="" class="button">Profile</button></a>
    </div>
    
    <?php
        require_once('../basic/footer.php');
    ?>
</main>