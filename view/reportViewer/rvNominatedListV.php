<main>
    <title>Mahapola Nominated List</title>
    <?php
        require '../basic/header.php';
    ?>

    <div class="header">
        <ul class="breadcrumbs">
            <li><a href="rvHomeV.php">Home</a></li>
            <li>Mahapola Nominated List</li>
        </ul>
    </div>

    <div class="side-nav">
        <?php
            require 'rvSideNavV.php';
        ?>
    </div>

    <div class="content">
        <div>
            <h4>Student List</h4>
        </div>
        <!-- pdf ekak generate kranna -->
        <a href="rvViewMahapolaNominatedListV.php"><button type="submit" name="">Back</button></a><br>
    </div>

    <?php
        require '../basic/footer.php';
    ?>
</main>