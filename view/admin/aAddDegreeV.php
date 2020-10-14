<main>
    <title>Add a degree</title>
    <?php
        require '../basic/header.php';
    ?>

    <div class="header">
        <ul class="breadcrumbs">
            <li><a href="aHomeV.php">Home</a></li>
            <li>Add a new degree</li>
        </ul>
    </div>

    <div class="side-nav">
        <?php
            require '../admin/aSideNavV.php';
        ?>
    </div>

    <div class="content">
        <div>
            <h3>Add a new degree</h3>
        </div>

        Enter Degree Name <input type="text" id="" name="degree" placeholder="Degree name" required/><br>

        Degree Description <input type="text" id="" name="description" placeholder="Enter its description" required/><br>
        
        <button type="submit" name="addDegree-submit">Add degree</button>
    </div>

    <?php
        require '../basic/footer.php';
    ?>
</main>