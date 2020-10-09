<main>
    <title>Add a degree</title>
    <?php
        require '../basic/header.php';
    ?>

    <div class="header">
        <ul class="breadcrumbs">
            <li><a href="adminV.php">Home</a></li>
            <li>Add a new Designation</li>
        </ul>
    </div>

    <div class="side-nav">
        <?php
            require '../admin/aSideNavV.php';
        ?>
    </div>

    <div class="content">
        <div>
            <h3>Add a new Designation</h3>
        </div>

        Enter designation <input type="text" name="designation" placeholder="Designation" required/><br>

        Degree Description <input type="text" name="designationDescriotion" placeholder="Enter its description" required/><br>
        
        <button type="submit" name="addDesignation-submit">Add Designation</button>
    </div>

    <div class="right-side-bar">
        <a href="../../controller/viewProfileController.php?user_id=<?php echo $_SESSION['userId'] ?>"><button type="submit" name="" class="button">Profile</button></a>
    </div>

    <?php
        require '../basic/footer.php';
    ?>
</main>