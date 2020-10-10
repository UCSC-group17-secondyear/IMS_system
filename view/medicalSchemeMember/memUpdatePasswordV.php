<main>

    <title>Update Password</title>

    <?php
        require('../basic/header.php');
    ?>

    <div class="header">Breadcrumbs
        <ul class="breadcrumb">
            <li><a href="memHomeV.php">Home</a></li>
            <li>Profile</li>
        </ul>
    </div>

    <div class="side-nav">
        <?php 
            require('../medicalSchemeMember/memSideNavV.php');
        ?>
    </div>

    <div class="content">
        <div>
            <h3>Update Profile</h3>
        </div>
        <div>
            <form action="../../controller/updatePasswordControllerTwo.php?user_id=<?php echo $_SESSION['userId'] ?>" method="post">
                <label for="">Employee Id</label>
                <input type="text" name="empid" <?php echo 'value="'.$_SESSION['empid'].'"' ?> disabled> <br>
                <label for="">Initials of the name</label>
                <input type="text" name="initials" <?php echo 'value="'.$_SESSION['initials'].'"' ?> disabled> <br>
                <label for="">Surname</label>
                <input type="text" name="sname" <?php echo 'value="'.$_SESSION['sname'].'"' ?> disabled> <br>
                <label for="">Email</label>
                <input type="email" name="email" <?php echo 'value="'.$_SESSION['email'].'"' ?> disabled> <br>
                <label for="">Mobile Number</label>
                <input type="text" name="mobile" <?php echo 'value="'.$_SESSION['mobile'].'"' ?> disabled> <br>
                <label for="">Telephone Number</label>
                <input type="text" name="tp" <?php echo 'value="'.$_SESSION['tp'].'"' ?> disabled> <br>
                <label for="">Date of Birth</label>
                <input type="text" name="dob" <?php echo 'value="'.$_SESSION['dob'].'"' ?> disabled> <br>
                <label for="">Designation</label>
                <input type="text" name="designation" <?php echo 'value="'.$_SESSION['designation'].'"' ?> disabled> <br>
                <label for="">Appointment Date</label>
                <input type="text" name="appointment" <?php echo 'value="'.$_SESSION['appointment'].'"' ?> disabled> <br>                    
                <label for="">New Password: </label>
                <input type="password" name="password" required> <br>
                <label for="">Confirm Password: </label>
                <input type="password" name="conpassword" required> <br>

                <button type="submit" name="submit">Save Password</button>

            </form>

                <!-- mekedi api database eken gnna data tika for each loop ekk ghla display krnna ona habai mekedi update krnna puluwn wenna ona -->

            </div>
    </div>

    <div class="right-side-bar">
        <a href="../../controller/viewProfileController.php?user_id=<?php echo $_SESSION['userId'] ?>"><button type="submit" name="" class="button">Profile</button></a>
    </div>

    <?php
        require '../basic/footer.php';
    ?>

</main>