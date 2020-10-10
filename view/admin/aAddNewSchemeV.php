<main>
    <title>Add a new scheme</title>
    <?php
        require '../basic/header.php';
    ?>

    <div class="header">
        <ul class="breadcrumbs">
            <li><a href="aHomeV.php">Home</a></li>
            <li>Add a new scheme</li>
        </ul>
    </div>

    <div class="side-nav">
        <?php
            require '../admin/aSideNavV.php';
        ?>
    </div>

    <div class="content">
        Enter Scheme Number <input type="text" name="scheme" placeholder="Scheme Number" required/><br>
        
        Enter its description <input type="text" name="description" placeholder="Description" required/><br>
        
        <button type="submit" name="addScheme-submit">Add new scheme</button>
    </div>

    <div class="right-side-bar">
        <a href="../../controller/viewProfileController.php?user_id=<?php echo $_SESSION['userId'] ?>"><button type="submit" name="" class="button">Profile</button></a>
    </div>

    <?php
        require '../basic/footer.php';
    ?>
</main>