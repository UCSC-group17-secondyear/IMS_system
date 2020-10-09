<main>
    <title>Update or Remove a department</title>
    <?php
        require '../basic/header.php';
    ?>

    <div class="header">
        <ul class="breadcrumb">
            <li><a href="adminV.php">Home</a></li>
            <li>Update or remove a Department</li>
        </ul>
    </div>

    <div class="side-nav">
        <?php
            require '../admin/aSideNavV.php';
        ?>
    </div>

    <div class="content">
        <div>
            <h3>Update or remove a Department</h3>
        </div>
        
        Enter department name <input type="text" name="departmentName" placeholder="Department name" required/> <br>
        
        Enter its description <input type="text" name="departmentDescriotion" placeholder="Description" required/> <br>

        <button type="submit" name="updateDepartment-submit">Save Updates</button>
        
        <button type="submit" name="removeDepartment-submit">Remove Department</button>
    </div>

        <div class="right-side-bar">
        <a href="../../controller/viewProfileController.php?user_id=<?php echo $_SESSION['userId'] ?>"><button type="submit" name="" class="button">Profile</button></a>
    </div>

    <?php
        require '../basic/footer.php';
    ?>
</main>