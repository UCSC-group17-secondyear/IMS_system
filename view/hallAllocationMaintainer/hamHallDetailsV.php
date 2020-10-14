<main>
    <title>Hall Details</title>
    <?php
        require '../basic/header.php';
    ?>

    <div class="header">
        <ul class="breadcrumbs">
            <li><a href="hamHomeV.php">Home</a></li>
            <li>Hall Details</li>
        </ul>
    </div>

    <div class="side-nav">
        <?php
            require '../hallAllocationMaintainer/hamSideNavV.php';
        ?>
    </div>

    <div class="content">
        <div>
            <h3>Hall Details</h3>
        </div>
        <select name="hall" id="hall">
            <option value="">Select a Hall</option>
            <option value="E401">E401</option>
            <option value="S104">S104</option>
            <option value="W001">W001</option>
        </select>
        <br>
        <br>
        <a href="hamViewHallDetailsV.php"><button type="submit" name="">Display Details</button></a>
    </div>

    <?php
        require '../basic/footer.php';
    ?>
</main>