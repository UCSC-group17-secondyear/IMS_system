<main>

    <title>Modify User</title>

    <?php
        require '../basic/header.php';
    ?>

    <div class="header">
        <ul class="breadcrumbs">
            <li><a href="aHomeV.php">Home</a></li>
            <li><a href="aUsersV.php">Users table</a></li>
            <li>Modify User</li>
        </ul>
    </div>

    <div class="side-nav">
        <?php
            require 'aSideNavV.php';
        ?>
    </div>

    <div class="content">
        <form action="../../controller/updateProfileControllerTwo.php?user_id=<?php echo $_SESSION['userId'] ?>" method="post">
                <label for="">Employee Id</label>
                <input type="text" name="empid" <?php echo 'value="'.$_SESSION['empid'].'"' ?> required> <br>
                <label for="">Initials of the name</label>
                <input type="text" name="initials" <?php echo 'value="'.$_SESSION['initials'].'"' ?> required> <br>
                <label for="">Surname</label>
                <input type="text" name="sname" <?php echo 'value="'.$_SESSION['sname'].'"' ?> required> <br>
                <label for="">Email</label>
                <input type="email" name="email" <?php echo 'value="'.$_SESSION['email'].'"' ?> required> <br>
                <label for="">Mobile Number</label>
                <input type="text" name="mobile" <?php echo 'value="'.$_SESSION['mobile'].'"' ?> required> <br>
                <label for="">Telephone Number</label>
                <input type="text" name="tp" <?php echo 'value="'.$_SESSION['tp'].'"' ?> required> <br>
                <label for="">Date of Birth</label>
                <input type="text" name="dob" <?php echo 'value="'.$_SESSION['dob'].'"' ?> required> <br>
                <label for="">Designation</label>
                <input type="text" name="designation" <?php echo 'value="'.$_SESSION['designation'].'"' ?> required> <br>
                <label for="">Appointment Date</label>
                <input type="text" name="appointment" <?php echo 'value="'.$_SESSION['appointment'].'"' ?> required> <br>                    
                <button type="submit" name="submit">Save Updates</button>
    </div>

    <div class="right-side-bar">
        <a href="../../controller/viewProfileController.php?user_id=<?php echo $_SESSION['userId'] ?>"><button type="submit" name="" class="button">Profile</button></a>
    </div>

    <?php
        require '../basic/footer.php';
    ?>

</main>