<main>
    <title>Delete/Update Student Details</title>
    <?php
        require '../basic/header.php';
    ?>

    <div class="header">
        <ul class="breadcrumbs">
            <li><a href="amHomeV.php">Home</a></li>
            <li>Delete or Update Student Details</li>
        </ul>
    </div>

    <div class="side-nav">
        <?php
            require '../attendanceMaintainer/amSideNavV.php';
        ?>
    </div>

    <div class="content">
        <form action="../../controller/amControllers/updateRemoveStdC.php" method="post">
            Enter Student Index Number<input type="text" name="index_no" placeholder="Student Index No" required/><br>
            
            <button type="submit" name="getStudent-submit">Enter</button>
        </form>
        <button type="submit" name="cancel-submit">Cancel</button>
    </div>

    <?php
        require '../basic/footer.php';
    ?>
</main>