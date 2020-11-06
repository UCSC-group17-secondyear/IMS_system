<?php
    require "../basic/topnav.php";
?>

<main>
    <title>OPD Form</title>
    <div class="sansserif">
                    
                <ul class="breadcrumbs">
                    <li><a href="memHomeV.php">Home</a></li>
                    <li class="active">OPD Form</li>
                </ul>
                    
        <div class="row">
                    <div class="col left20">
                        <?php 
                            require('memSideNavV.php');
                        ?>
                    </div>

                <div class="col right80">
                        <div>
                            <h2>OPD Form</h2>
                        </div>

                    <div class="contentForm">
                        <form action="../../controller/opdFormControllerTwo.php?user_id=<?php echo $_SESSION['userId'] ?>" method="post" enctype="multipart/form-data">
                            
                            <div class="row">
                                <div class="col-25">
                                    <label for="">Emp Id</label>
                                </div>
                                <div class="col-75">
                                    <input type="text" name="empid" <?php echo 'value="'.$_SESSION['empid'].'"' ?> disabled> <br>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-25">
                                    <label for="">Initials</label>
                                </div>
                                <div class="col-75">
                                    <input type="text" name="initials" <?php echo 'value="'.$_SESSION['initials'].'"'?> disabled> <br>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-25">
                                    <label for="">Name</label>
                                </div>
                                <div class="col-75">
                                    <input type="text" name="sname" <?php echo 'value="'.$_SESSION['sname'].'"'?> disabled> <br>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-25">
                                    <label for="">Designation</label>
                                </div>
                                <div class="col-75">
                                    <input type="text" name="designation" <?php echo 'value="'.$_SESSION['designation'].'"'?> disabled> <br>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-25">
                                    <label for="">Department</label>
                                </div>
                                <div class="col-75">
                                    <select name="department" <?php echo 'value="'.$_SESSION['department'].'"' ?> required>
                                        <option value="">Select department: </option>
                                        <?php echo $_SESSION['department'] ?>
                                    </select>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-25">
                                    <label for="">Enter Patient's Name</label>
                                </div>
                                <div class="col-75">
                                    <input type="text" name="patient_name" required> <br>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-25">
                                    <label for="">Select relationship</label>
                                </div>
                                <div class="col-75">
                                    <select name="relationship" id="" required>
                                        <option value="myself">Myself</option>
                                        <option value="husband">Husband</option>
                                        <option value="wife">Wife</option>
                                        <option value="daughter">Daughter</option>
                                        <option value="son">Son</option>
                                    </select> <br>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-25">
                                    <label for="">Name of the Doctor</label>
                                </div>
                                <div class="col-75">
                                    <input type="text" name="doctor_name"  required> <br>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-25">
                                    <label for="">Treatment Recieved Date</label>
                                </div>
                                <div class="col-75">
                                    <input type="date" name="treatment_received_date"  required> <br>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-25">
                                    <label for="">Bill Issued Date</label>
                                </div>
                                <div class="col-75">
                                    <input type="date" name="bill_issued_date" required><br>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-25">
                                    <label for="">Purpose</label>
                                </div>
                                <div class="col-75">
                                    <input type="text" name="purpose"  required> <br>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-25">
                                    <label for="">Bill Amount</label>
                                </div>
                                <div class="col-75">
                                    <input type="text" name="bill_amount" required> <br>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-25">
                                    <label for="">Scanned copy of bill</label>
                                </div>
                                <div class="col-75">
                                    <input type="file" name="file" required>
                                </div>
                            </div>

                                <button class="mainbtn" type="submit" name="form-submit">Submit</button><br>
                                
                        </form>
                        
                        <form>
                            <button class="subbtn" type="submit" name="userroleList-submit">
                                <a href="../../controller/claimFormListControllerOne.php?user_id=<?php echo $_SESSION['userId'] ?>"> View Claim Form List</a>
                            </button>
                            <button type="submit" class="cancelbtn">
                                <a href="memHomeV.php">Cancel</a>
                            </button>
                        </form>    
                        
                        
                        <br>
                        <h2>Download the form to be filled by the surgeon and get if field before you fill the surgical
                            hospitalization form.</h2><br>
                    </div>

                
            </div>
        </div>
    </div>       
        
</main>

<?php
    require_once('../basic/footer.php');
?>