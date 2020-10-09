<main>
    <title>Update or Remove a designation</title>
    <?php
        require '../basic/header.php';
    ?>

    <div class="header">
        <ul class="breadcrumb">
            <li><a href="adminV.php">Home</a></li>
            <li>Update or remove a Designation</li>
        </ul>
    </div>

    <div class="side-nav">
        <?php
            require '../admin/aSideNavV.php';
        ?>
    </div>

        <div class="content">
            <div>
                <h3>
                    Update or remove a Designation
                </h3>
            </div>
            
            Enter designation <input type="text" name="designation" placeholder="Designation" required/> <br>

            Enter description<input type="text" name="designationDescriotion" placeholder="Designation description" required/> <br>

            <button type="submit" name="updateDesignation-submit">Save Updates</button>
            
            <button type="submit" name="removeDesignation-submit">Remove Designation</button>
        </div>

        <div class="right-side-bar">
        <a href="../../controller/viewProfileController.php?user_id=<?php echo $_SESSION['userId'] ?>"><button type="submit" name="" class="button">Profile</button></a>
    </div>

    <?php
        require '../basic/footer.php';
    ?>
</main>