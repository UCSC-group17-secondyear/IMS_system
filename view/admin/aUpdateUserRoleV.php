<main>
    <title>Update user role</title>
    <?php
        require '../basic/header.php';
    ?>

    <div class="header">
        <ul class="breadcrumbs">
            <li><a href="aHomeV.php">Home</a></li>
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
        
        <form action="../../controller/adminControllers/manageUserRoleController.php" method="post">
            <label for="">Select user by user name</label>
            <select name="empid" id="">
                <option value="">User Name</option>
                <?php echo $_SESSION['userlist'] ?>
            </select><!-- 
            <input type="text" name="empid" placeholder="Employee Id" required> -->
            
            <label for="">Select user role</label>
            <select name="userRole" id="">
                <option value="">User Role</option>
                <?php echo $_SESSION['userroles'] ?>
            </select>

            <button type="submit" name="updateUserRole-submit">Save</button>
        </form>
        <form action="../../controller/adminControllers/manageUserRoleController.php" method="post">
            <button type="submit" name="userroleList-submit">User roles with descriptions</button>
        </form>
    </div>

    <?php
        require '../basic/footer.php';
    ?>
</main>