<main>
    <title>Add a degree</title>
    <?php
        require '../basic/header.php';
    ?>

    <div class="header">
        <ul class="breadcrumbs">
            <li><a href="adminV.php">Home</a></li>
            <li>Add a new Department</li>
        </ul>
    </div>

    <div class="side-nav">
        <?php
            require '../admin/aSideNavV.php';
        ?>
    </div>

    <div class="content">
        <div>
            <h3>Add a new Department</h3>
        </div>

        Enter Department Name <input type="text" id="" name="departmentName" placeholder="Department name" required/>
        
        Enter department description <input type="text" name="departmentDescriotion" placeholder="Description" required/>
        
        <button type="submit" name="addDepartment-submit">Add Department</button>
    </div>

    <div class="right-side-bar">
        <a href="../../controller/viewProfileController.php?user_id=<?php echo $_SESSION['userId'] ?>"><button type="submit" name="" class="button">Profile</button></a>
    </div>

    <?php
        require '../basic/footer.php';
    ?>
</main>