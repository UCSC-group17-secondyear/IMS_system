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
                    
        <div class="row" style="margin-bottom: 4%;">
                    <div class="col left20">
                        <?php 
                            require('memSideNavV.php');
                        ?>
                    </div>

                <div class="col right80">
                        <div>
                            <h2>OPD Form</h2>
                        </div>

                    <div class="contentForm" style="margin-bottom: 1%;">
                        <form action="../../controller/memControllers/opdFormControllerTwo.php?user_id=<?php echo $_SESSION['userId'] ?>" method="post" enctype="multipart/form-data">
                            
                            <div class="row">
                                <div class="col-25">
                                    <label for="">Enter Patient's Name</label>
                                </div>
                                <div class="col-75">
                                    <select name="patient_name" id="" required>
                                        <option value="">Select Name</option>
                                        <?php echo $_SESSION['dependant_name'] ?> 
                                    </select>
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
                                    <input type="date" name="treatment_received_date" id="tdate" required/><br>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-25">
                                    <label for="">Bill Issued Date</label>
                                </div>
                                <div class="col-75">
                                    <input type="date" name="bill_issued_date" id="bdate" required><br>
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
                                    <input type="number" name="bill_amount" min="0" required> <br>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-25">
                                    <label for="">Scanned copy of bill</label>
                                </div>
                                <div class="col-75">
                                    <input type="file" accept=".jpg, .png, .jpeg, .pdf" name="file" required>
                                </div>
                            </div>

                                <button class="mainbtn" type="submit" name="form-submit">Submit</button><br>
                                
                        </form>
                        
                        <form>
                            <button class="subbtn" type="submit" name="userroleList-submit">
                                <a href="../../controller/memControllers/claimFormListControllerOne.php?user_id=<?php echo $_SESSION['userId'] ?>"> View Claim Form List</a>
                            </button>
                            <button type="submit" class="cancelbtn">
                                <a href="memHomeV.php">Cancel</a>
                            </button>
                        </form>    
                    </div>
            </div>
        </div>
    </div>   

    <script>
        $("#tdate").datepicker({
        maxDate: 0
        });
    </script>    
        
</main>

<?php
    require_once('../basic/footer.php');
?>