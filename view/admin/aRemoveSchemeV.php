<main>
    <title>Add a degree</title>
    <?php
        require '../basic/header.php';
    ?>

    <div class="header">
        <ul class="breadcrumb">
            <li><a href="adminV.php">Home</a></li>
            <li>Remove a medical scheme</li>
        </ul>
    </div>

    <div class="side-nav">
        <?php
            require '../admin/aSideNavV.php';
        ?>
    </div>
        
        <div class="content">
            <div>
                <h3><li>Remove a medical scheme</li></h3>
            </div>
            
            Enter Scheme Number <input type="text" name="scheme" placeholder="Scheme Number" required/> <br>

            <button type="submit" name="removeScheme-submit">Remove</button>
        </div>

        <div class="right-side-bar">
        <a href="../../controller/viewProfileController.php?user_id=<?php echo $_SESSION['userId'] ?>"><button type="submit" name="" class="button">Profile</button></a>
    </div>

    <?php
        require '../basic/footer.php';
    ?>
</main>