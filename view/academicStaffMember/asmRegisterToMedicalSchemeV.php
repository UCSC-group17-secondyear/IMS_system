<main>
    <title>Register to Medical Scheme</title>
    <?php
        require '../basic/header.php';
    ?>

    <div class="header">
        <ul class="breadcrumbs">
            <li><a href="asmHomeV.php">Home</a></li>
            <li>Registration to medical scheme</li>
        </ul>
    </div>

    <div class="side-nav">
        <?php
            require '../academicStaffMember/asmSideNavV.php';
        ?>
    </div>

    <div class="content">
        <form action="" method="post">
            <label for="empName">Employee Name</label>
            <input type="text" value="" placeholder="Employee Name"> <br>
            <label for="empNumber">Employee Number</label>
            <input type="text" value="" placeholder="Employee Number"> <br>
            <label for="designation">Designation</label>
            <input type="text" value="" placeholder="Designation"> <br>
            Enter department
            <select name="department" id="">
            <option value="">Select department</option>
            <option value="CS">CS</option>
            <option value="IS">IS</option>
            <option value="SE">SE</option>
            </select> <br>
            <label for="healthCondition">Enter health condition</label>
            <input type="text" value="" placeholder="Heatlh Condition"> <br>
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
        <a href="asmRegisterSuccessV.php"><button type="submit" name="registerMedicalScheme-submit">Register</button></a><br>
    </div>

    <div class="right-side-bar">
        <a href="../../controller/viewProfileController.php?user_id=<?php echo $_SESSION['userId'] ?>"><button type="submit" name="" class="button">Profile</button></a>
    </div>

    <?php
        require '../basic/footer.php';
    ?>

</main>