<main>
    <title>Profile Update Success</title>

    <?php
        require '../basic/header.php';
    ?>

    <div class="header">
        <ul class="breadcrumbs">
            <li><a href="amHomeV.php">Home</a></li>
            <li>Success Massage</li>
        </ul>
    </div>

    <div class="side-nav">
        <?php
            require '../attendanceMaintainer/amSideNavV.php';
        ?>
    </div>

    <div class="content">
        <p>Your profile has been updated successfully..</p>

        <a href="amProfileV.php"><button type="submit">OK</button></a>
    </div>

    <?php
        require '../basic/footer.php';
    ?>
</main>