<main>
    <title>Add a degree</title>
    <?php
        require '../basic/header.php';
    ?>

    <div class="header">
        <ul class="breadcrumbs">
            <li><a href="adminV.php">Home</a></li>
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
        
        Enter User role <input type="text" name="userRole" placeholder="User role" required/> <br>
        
        <button type="submit" name="remove-submit">Remove user role</button>
    </div>

    <div class="right-side-bar">
        <a href="../../controller/viewProfileController.php?user_id=<?php echo $_SESSION['userId'] ?>"><button type="submit" name="" class="button">Profile</button></a>
    </div>

    <?php
        require '../basic/footer.php';
    ?>
</main>