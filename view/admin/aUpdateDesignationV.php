<main>
    <title>Update Designation</title>
    <?php
        require '../basic/header.php';
    ?>

    <div class="header">
        <ul class="breadcrumbs">
            <li><a href="aHomeV.php">Home</a></li>
            <li>Update Designation</li>
        </ul>
    </div>

    <div class="side-nav">
        <?php
            require '../admin/aSideNavV.php';
        ?>
    </div>

    <div class="content">
        <div>
            <h3>Update Designation</h3>
        </div>
        <div>
            <form action="../../controller/aUpdateDesignationController.php" method="POST">
                <label for="">Designation</label>
                <input type="text" name="designation" <?php echo 'value="'.$_SESSION['designation'].'"' ?> required/><br>
                <label for="">Description</label>
                <input type="text" name="description" <?php echo 'value="'.$_SESSION['description'].'"' ?> required/><br>                       
                <button type="submit" name="updateDesignation-submit">Update Designation</button>
            </form>
        </div>
    </div>

    <?php
        require '../basic/footer.php';
    ?>
</main>