<main>
    <title>Update user role</title>
    <?php
        require '../basic/header.php';
    ?>

    <div class="header">
        <ul class="breadcrumb">
            <li><a href="adminV.php">Home</a></li>
            <li>Update User role</li>
        </ul>
    </div>

    <div class="side-nav">
        <?php
            require '../admin/aSideNavV.php';
        ?>
    </div>

    <div class="content">
        <div>
            <h3>Update User role</h3>
        </div>
        
        Enter Employee Id <input type="text" name="empid" placeholder="Employee Id" required/> <br>
        
        Enter User Role <input type="text" name="userRole" placeholder="User Role" required/> <br>

        <button type="submit" name="userRole-submit">Save Updates</button>
    </div>
    
    <div class="right-side-bar">
        <a href="../../controller/viewProfileController.php?user_id=<?php echo $_SESSION['userId'] ?>"><button type="submit" name="" class="button">Profile</button></a>
    </div>

    <?php
        require '../basic/footer.php';
    ?>
</main>