<main>
    <title>Remove a use role</title>
    <?php
        require '../basic/header.php';
    ?>

    <div class="header">
        <ul class="breadcrumbs">
            <li><a href="aHomeV.php">Home</a></li>
            <li>Remove a User role</li>
        </ul>
    </div>

    <div class="side-nav">
        <?php
            require '../admin/aSideNavV.php';
        ?>
    </div>
        
    <div class="content">
        <div>
            <h3>Remove a User role</h3>
        </div>
        
        <form action="../../controller/adminControllers/manageUSerRoleController.php" method="post">
            Enter User role <input type="text" name="userRole" placeholder="User role" required/> <br>
            
            <button type="submit" name="remove-submit">Remove user role</button>
        </form>
    </div>

    <?php
        require '../basic/footer.php';
    ?>
</main>