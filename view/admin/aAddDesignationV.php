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

        Enter designation <input type="text" name="designation" placeholder="Designation" required/><br>

        Degree Description <input type="text" name="designationDescriotion" placeholder="Enter its description" required/><br>
        
        <button type="submit" name="addDesignation-submit">Add Designation</button>
    </div>

    <?php
        require '../basic/footer.php';
    ?>
</main>