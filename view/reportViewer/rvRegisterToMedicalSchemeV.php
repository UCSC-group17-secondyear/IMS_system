<main>
    <title>Register to Medical Scheme</title>
    <?php
        require '../basic/header.php';
    ?>

    <div class="header">
        <ul class="breadcrumbs">
            <li><a href="rvHomeV.php">Home</a></li>
            <li>Registration to medical scheme</li>
        </ul>
    </div>

    <div class="side-nav">
        <?php
            require '../reportViewer/rvSideNavV.php';
        ?>
    </div>

    <div class="content">
        <form action="../../controller/registerMSControllerTwo.php?user_id=<?php echo $_SESSION['userId'] ?>" method="post">
        <p>   
            <label>Employee ID: </label>
            <input type="text" name="empid" <?php echo 'value="'.$_SESSION['empid'].'"' ?> disabled>
        </p>
        <p>
            <label>Your initials: </label>
            <input type="text" name="initials" <?php echo 'value="'.$_SESSION['initials'].'"' ?> disabled/>
        </p>
        <p>
            <label>Your surname: </label>
            <input type="text" name="sname" <?php echo 'value="'.$_SESSION['sname'].'"' ?> disabled/>
        </p>
        <p>
            <label>Your E-mail: </label>
            <input type="email" name="email" <?php echo 'value="'.$_SESSION['email'].'"' ?> disabled/>
        </p>
        <p>
            <label>Designation: </label>
            <input type="text" name="designation" <?php echo 'value="'.$_SESSION['designation'].'"' ?> disabled> <br>
        </p>
        <p>  
            <label>Enter department</label>
            <select name="department"required>
                <option value="">Select department: </option>
                <?php echo $_SESSION['deps'] ?>
            </select>
            <br>
        </p>
        <p>   
            <label>Health condition: </label>
            <input name="health_condition" type="text" required> <br>
        </p>
        <p>
            <label>Civil status</label>
            <select name="civil_status" required>
                <option value="">...</option>
                <option value="married">Married</option>
                <option value="unmarried">Unmarried</option>
            </select> <br>
        </p>
        <p>   
            <label>Medical Scheme Type: </label>
            <select name="scheme_name" id="schemename" required>
                <option value="">Select Scheme</option>
                <?php echo $_SESSION['scheme'] ?>
            </select> <br>
        </p>
        <p>
            <button type="submit" name="registerMS-submit">Register</button>
        </p>
        </form>
    </div>

    <div class="right-side-bar">
        <a href="../../controller/viewProfileController.php?user_id=<?php echo $_SESSION['userId'] ?>"><button type="submit" name="" class="button">Profile</button></a>
    </div>

    <?php
        require '../basic/footer.php';
    ?>

</main>