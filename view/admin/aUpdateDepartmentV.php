<main>
    <title>Update Department</title>
    <?php
        require '../basic/header.php';
    ?>

    <div class="header">
        <ul class="breadcrumbs">
            <li><a href="aHomeV.php">Home</a></li>
            <li>Update Department</li>
        </ul>
    </div>

    <div class="side-nav">
        <?php
            require '../admin/aSideNavV.php';
        ?>
    </div>

    <div class="content">
        <div>
            <h3>Update Department</h3>
        </div>
        <div>
            <form action="../../controller/aUpdateDepartmentController.php" method="POST">
                <label for="">Department</label>
                <input type="text" name="department" <?php echo 'value="'.$_SESSION['department'].'"' ?> required/><br>
                <label for="">Description</label>
                <input type="text" name="description" <?php echo 'value="'.$_SESSION['description'].'"' ?> required/><br>                       
                <button type="submit" name="updateDepartment-submit">Update Department</button>
            </form>
        </div>
    </div>

    <?php
        require '../basic/footer.php';
    ?>
</main>