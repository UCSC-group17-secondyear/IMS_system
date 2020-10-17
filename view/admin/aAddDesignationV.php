<main>
    <title>Add a designation</title>
    <?php
        require '../basic/header.php';
    ?>

    <div class="header">
        <ul class="breadcrumbs">
            <li><a href="aHomeV.php">Home</a></li>
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

        <form action="../../controller/aAddDesignationController.php" method="POST">
            <label for="">Designation Name</label>
            <input type="text" name="designation" placeholder="Enter designation name" required/><br>
            <label for="">Description</label>
            <input type="text" name="description" placeholder="Enter description" required/><br>                    
            <button type="submit" name="addDesignation-submit">Add Department</button>
        </form>
    </div>

    <?php
        require '../basic/footer.php';
    ?>
</main>