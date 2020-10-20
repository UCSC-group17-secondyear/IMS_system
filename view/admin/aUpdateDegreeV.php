<main>
    <title>Update Degree</title>
    <?php
        require '../basic/header.php';
    ?>

    <div class="header">
        <ul class="breadcrumbs">
            <li><a href="aHomeV.php">Home</a></li>
            <li>Update Degree</li>
        </ul>
    </div>

    <div class="side-nav">
        <?php
            require '../admin/aSideNavV.php';
        ?>
    </div>

    <div class="content">
        <div>
            <h3>Update Degree</h3>
        </div>
        <div>
            <form action="../../controller/aUpdateDegreeController.php" method="POST">
                <label for="">Degree</label>
                <input type="text" name="degree_name" <?php echo 'value="'.$_SESSION['degree_name'].'"' ?> required/><br>
                <label for="">Degree Abbriviation</label>
                <input type="text" name="degree_abbriviation" <?php echo 'value="'.$_SESSION['degree_abbriviation'].'"' ?> required/><br>
                                       
                <button type="submit" name="updateDegree-submit">Update Degree</button>
            </form>
        </div>
    </div>

    <?php
        require '../basic/footer.php';
    ?>
</main>