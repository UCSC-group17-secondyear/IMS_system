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

        <form action="../../controller/adminControllers/manageDegreesC.php" method="post">
            Enter Degree Name <input type="text" id="" name="degree_name" placeholder="Degree name" required/><br>

            Enter Abbreviation/code <input type="text" id="" name="degree_abbriviation" placeholder="Abbriviation" required/><br>
            
            <button type="submit" name="addDegree-submit">Add degree</button>
        </form>
    </div>

    <?php
        require '../basic/footer.php';
    ?>
</main>