<main>
    <title>Assign a use role</title>
    <?php
        require '../basic/header.php';
    ?>

    <div class="header">
        <ul class="breadcrumbs">
            <li><a href="aHomeV.php">Home</a></li>
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
        
        <form action="../../controller/adminControllers/manageUserRoleController.php" method="post">
            <label for="">Employee Id</label>
            <input type="text" name="empid" placeholder="Employee Id" required>
            <label for="">Select user role</label>

            <select name="userRole" id="">
                <option value="">Select User Role</option>
                <?php echo $_SESSION['userroles'] ?>
            </select>
            <button type="submit" name="setUserRole-submit">Save</button>
        </form>

    </div>

    <?php
        require '../basic/footer.php';
    ?>
</main>