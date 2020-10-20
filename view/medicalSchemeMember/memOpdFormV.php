<main>
    <title>OPD Form</title>

<?php
    require('../basic/header.php');
    
?>
 
            <div class="header">
                <ul class="breadcrumbs">
                    <li><a href="memHomeV.php">Home</a></li>
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

                <form action="../../controller/opdFormControllerTwo.php?user_id=<?php echo $_SESSION['userId'] ?>" method="post" enctype="multipart/form-data">
                    
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
                        <option value="">Select Option</option>
                        <option value="CS">CS</option>
                        <option value="IS">IS</option>
                        <option value="SE">SE</option>
                    </select> <br>


                    <label for="">Enter Patient's Name</label>
                    <input type="text" name="patient_name" required> <br>

                    <label for="">Select relationship</label>
                    <select name="relationship" id="" required>
                        <option value="myself">Myself</option>
                        <option value="husband">Husband</option>
                        <option value="wife">Wife</option>
                        <option value="daughter">Daughter</option>
                        <option value="son">Son</option>
                    </select> <br>

                    <label for="">Name of the Doctor</label>
                    <input type="text" name="doctor_name"  required> <br>

                    <label for="">Treatment Recieved Date</label>
                    <input type="date" name="treatment_received_date"  required> <br>

                    <label for="">Bill Issued Date</label>
                    <input type="date" name="bill_issued_date" required><br>

                    <label for="">Purpose</label>
                    <input type="text" name="purpose"  required> <br>

                    <label for="">Bill Amount</label>
                    <input type="text" name="bill_amount" required> <br>

                    <label for="">Scanned copy of bill</label>
                    <input type="file" name="file" required>
                    
                    <button type="submit" name="form-submit">Submit</button><br>
                    
                </form>

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