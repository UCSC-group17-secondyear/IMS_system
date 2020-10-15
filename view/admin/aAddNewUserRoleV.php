<main>
    <title>Add a new user role</title>
    <?php
        require '../basic/header.php';
    ?>

    <div class="header">
        <ul class="breadcrumbs">
            <li><a href="aHomeV.php">Home</a></li>
            <li>Add a new User role</li>
        </ul>
    </div>

    <div class="side-nav">
        <?php
            require '../admin/aSideNavV.php';
        ?>
    </div>

    <div class="content">
        <div>
            <h3>Add a new User role</h3>
        </div>
        <form action="../../controller/adminControllers/manageUserRoleController.php" method="post">
            Enter User role <input input type="text" name="userRole" placeholder="User role" required/> <br>

            Enter its description <input type="text" name="description" placeholder="Description" required/> <br>
            
            <button type="submit" name="addUserrole-submit">Add user role</button>
        </form>
        <form action="../../controller/adminControllers/manageUserRoleController.php" method="post">
            <button type="submit" name="userroleList-submit">View Current user roles</button>
        </form>
    </div>

    <div class="right-side-bar">
        <a href="../../controller/viewProfileController.php?user_id=<?php echo $_SESSION['userId'] ?>"><button type="submit" name="" class="button">Profile</button></a>
    </div>

    <?php
        require '../basic/footer.php';
    ?>
</main>