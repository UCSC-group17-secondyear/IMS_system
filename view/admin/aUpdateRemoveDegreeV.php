<main>
    <title>Update or Remove a degree</title>
    <?php
        require '../basic/header.php';
    ?>

    <div class="header">
        <ul class="breadcrumbs">
            <li><a href="aHomeV.php">Home</a></li>
            <li>Update or remove a degree</li>
        </ul>
    </div>

    <div class="side-nav">
        <?php
            require '../admin/aSideNavV.php';
        ?>
    </div>

    <div class="content">
        <div>
            <h3>Update or remove a degree</h3>
        </div>
        
        Enter degree name <input type="text" name="degree" placeholder="Degree name" required/> <br>
        
        Enter Degree description <input type="text" name="description" placeholder="Degree description" required/> <br>
        
        <button type="submit" name="updateDegree-submit">Update degree</button>
        
        <button type="submit" name="removeDegree-submit">Remove degree</button>
    </div>

    <div class="right-side-bar">
        <a href="../../controller/viewProfileController.php?user_id=<?php echo $_SESSION['userId'] ?>"><button type="submit" name="" class="button">Profile</button></a>
    </div>

    <?php
        require '../basic/footer.php';
    ?>
</main>