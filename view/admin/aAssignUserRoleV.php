<main>
    <title>Assign a use role</title>
    <?php
        require '../basic/header.php';
    ?>

    <div class="header">
        <ul class="breadcrumbs">
            <li><a href="adminV.php">Home</a></li>
            <li>Assign a user role</li>
        </ul>
    </div>

    <div class="side-nav">
        <?php
            require '../admin/aSideNavV.php';
        ?>
    </div>

    <div class="content">
        <div>
            <h3>Assign a user role</h3>
        </div>
        
        Enter Employee Id <input type="text" name="empid" placeholder="Employee Id" required/> <br>

        Enter User Role <input type="text" name="userRole" placeholder="User Role" required/> <br>

        <button type="submit" name="userRole-submit">Save</button>
    </div>

    <div class="right-side-bar">
        <a href="../../controller/viewProfileController.php?user_id=<?php echo $_SESSION['userId'] ?>"><button type="submit" name="" class="button">Profile</button></a>
    </div>

    <?php
        require '../basic/footer.php';
    ?>
</main>