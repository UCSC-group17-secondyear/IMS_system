<main>
    <title>Add a department</title>
    <?php
        require '../basic/header.php';
    ?>

    <div class="header">
        <ul class="breadcrumbs">
            <li><a href="aHomeV.php">Home</a></li>
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

        <form action="../../controller/aAddDepartmentController.php" method="POST">
            <label for="">Department Name</label>
            <input type="text" name="dept_name" placeholder="Enter department name" required/><br>
            <label for="">Description</label>
            <input type="text" name="description" placeholder="Enter description" required/><br>                    
            <button type="submit" name="addDepartment-submit">Add Department</button>
        </form>
    </div>

    <?php
        require '../basic/footer.php';
    ?>
</main>