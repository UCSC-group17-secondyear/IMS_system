<main>
    <title>Delete or Update Students' Details</title>
    <?php
        require '../basic/header.php';
    ?>

    <div class="header">
        <ul class="breadcrumbs">
            <li><a href="amHomeV.php">Home</a></li>
            <li>Delete or Update Students' Details</li>
        </ul>
    </div>

    <div class="side-nav">
        <?php
            require '../attendanceMaintainer/amSideNavV.php';
        ?>
    </div>

    <div class="content">
        <div>
            <h3>Delete or Update Students' Details</h3>
        </div>

        Enter Student Index Number <input type="text" name="index_no" placeholder="Student Index No" required/> <br>
        
        <button type="submit" name="deleteupdateStudent-submit" href="amDeleteUpdateStudentV.php">Select</button>
    </div>

    <?php
        require '../basic/footer.php';
    ?>
</main>