<main>
    <title>Update a scheme</title>
    <?php
        require '../basic/header.php';
    ?>

    <div class="header">
        <ul class="breadcrumbs">
            <li><a href="adminV.php">Home</a></li>
            <li>Update Policies of a scheme</li>
        </ul>
    </div>

    <div class="side-nav">
        <?php
            require '../admin/aSideNavV.php';
        ?>
    </div>

        <div class="content">
            <div>
                <h3>Update Policies of a scheme</h3>
            </div>
            
            Enter Scheme Number <input type="text" name="scheme" placeholder="Scheme Number" required/> <br>
            
            Update Policies <input type="text" name="description" placeholder="Policies" required>
            
            <button type="submit" name="scheme-submit">Save updates</button>
        </div>

        <div class="right-side-bar">
        <a href="../../controller/viewProfileController.php?user_id=<?php echo $_SESSION['userId'] ?>"><button type="submit" name="" class="button">Profile</button></a>
    </div>

    <?php
        require '../basic/footer.php';
    ?>
</main>