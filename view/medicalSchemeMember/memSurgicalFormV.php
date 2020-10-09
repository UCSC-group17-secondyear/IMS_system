<main>
    <title>Surgical Form</title>

<?php
    require('../basic/header.php');
    
?>

        
            <div class="header">Breadcrumbs
                <!-- <ul class="breadcrumb">
                    <li><a href="memHomeV.php">Home</a></li>
                    <li><a href="memFillClaimFormsV.php">Select Form Type</a></li> 
                    <li>Surgical Form</li>
                </ul> -->
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

                    <label for="address">Address</label>
                    <input type="text" value=""> <br>
                    <label for="tp">Telephone No</label>
                    <input type="text" value=""> <br>
                    <label for="mobile">Mobile No</label>
                    <input type="text" value=""> <br>

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

                    <label for="doctor">Date of the Accident</label>
                    <input type="date" value=""> <br>

                    <label for="trecieveddate">How Accident Occured</label>
                    <input type="text" value=""> <br>

                    <label for="bissuedate">Nature and Extend of Injuries</label>
                    <input type="text" value=""> <br>

                    <label for="purpose">Nature of Illness</label>
                    <input type="text" value=""> <br>

                    <label for="amount">Date of Commencement of Illness</label>
                    <input type="date" value=""> <br>

                    <label for="firstDateConsult">Date of First Consultation</label>
                    <input type="date" value=""> <br>

                    <label for="docName">Name of the Doctor</label>
                    <input type="text" value=""> <br>

                    <label for="docAddress">Address of the Doctor</label>
                    <input type="text" value=""> <br>

                    <label for="hospitOn">Hospitalized On</label>
                    <input type="date" value=""> <br>

                    <label for="hospitDis">Discharged On</label>
                    <input type="date" value=""> <br>

                    <label for="">Have you ever had the same illness before ? <br>if so give the particulars and date</label>
                    <input type="text" value=""> <br>

                    <label for="">Have you during the past five years had any illness or <br>
                                   accident necessitating medical attention <br>
                                   if so, give full particulars </label>
                    <input type="text" value=""> <br>

                    <label for="">Have you previously suffered from sickness injury <br>
                                    if so, give full particulars</label>
                    <input type="text" value=""> <br>

                    <label for="">Any claims pending or are you entitled to claim upon any other <br>
                                    insurer, society of fund in respect of any illness or any injury <br>
                                    suffered by you ?</label>
                    <input type="text" value=""> <br>

                    <label for="">if you are undergoing treatment for the injury or illness to which <br>
                                    this claim relates, please states <br>
                                    a. Nature of illness <br>
                                    b. Nature of treatement <br>
                                    c. Name of the hospital concerned if any <br>
                                    d. Name of any consulting specialist whose recommnended<br>
                                        you or have been recieving giving details of <br>
                                       the treatment concerned and other specialist services <br>
                                        received.</label>
                    <input type="text" value=""> <br>



                    <label for="">Scanned Copy of the Form Filled by the Surgeon</label>

                    <!-- scaaned copy eka upload kranna -->

                </form>

                <a href="memFormSubmitSuccessV.php"><button type="submit" name="">Submit</button></a><br>

                <p>Download the form to be filled by the surgeon and get if field before you fill the surgical
                    hospitalization form.</p>
            </div>
           
            <div class="right-side-bar">
                <a href="../../controller/viewProfileController.php?user_id=<?php echo $_SESSION['userId'] ?>"><button type="submit" name="" class="button">Profile</button></a>
            </div>
            
            <?php
                require_once('../basic/footer.php');
            ?>
      

</main>



