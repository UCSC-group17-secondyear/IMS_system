<main>
        <title>Register to Medical Scheme</title>

<?php
    require('../basic/header.php');
    
?>

        
            <div class="header">Breadcrumbs
                <!-- <ul class="breadcrumb">
                    <li><a href="mmHomeV.php">Home</a></li>
                    <li>Register to Medical Schmeme</li>
                </ul> -->
            </div>

            <div class="side-nav">
                <?php 
                    require('../mahapolaSchemeMaintainer/mmSideNavV.php');
                ?>
            </div>

            <div class="content">
                    <div>
                        <h4>Register to Staff Medical Scheme</h4>
                    </div>

                    <form action="" method="post">
                        <label for="empName">Employee Name</label>
                        <input type="text" value=""> <br>

                        <label for="empNumber">Employee Number</label>
                        <input type="text" value=""> <br>

                        <label for="designation">Designation</label>
                        <input type="text" value=""> <br>

                        Enter department
                        <select name="department" id="">
                            <option value="">Select department</option>
                            <option value="CS">CS</option>
                            <option value="IS">IS</option>
                            <option value="SE">SE</option>
                        </select> <br>

                        <label for="healthCondition">Enter health condition</label>
                        <input type="text" value=""> <br>

                        Enter civil status
                        <select name="civilstatus" id="">
                            <option value="married">Married</option>
                            <option value="unmarried">Unmarried</option>
                        </select> <br>

                        Select Medical Scheme
                        <select name="medical scheme" id="">
                            <option value="">Select Scheme</option>
                            <option value="scheme1">Scheme 1</option>
                            <option value="scheme2">Scheme 2</option>
                            <option value="scheme3">Scheme 3</option>
                        </select> <br>

                        
                    </form>
                    
                <a href="mmRegisterSuccessV.php"><button type="submit" name="registerMedicalScheme-submit">Register</button></a><br>
        
            </div>
            

            <div class="right-side-bar">
                <a href="../../controller/viewProfileController.php?user_id=<?php echo $_SESSION['userId'] ?>"><button type="submit" name="" class="button">Profile</button></a>
            </div>
            
            <?php
                require_once('../basic/footer.php');
            ?>
      

</main>















     
