<main>
    <title>Profile Update Success</title>

    <?php
        require '../basic/header.php';
    ?>

    <div class="header">
        <ul class="breadcrumbs">
            <li><a href="asmHomeV.php">Home</a></li>
            <li>Success Massage</li>
        </ul>
    </div>

    <div class="side-nav">
        <?php
            require '../academicStaffMember/asmSideNavV.php';
        ?>
    </div>

    <div class="content">
        <p>Your profile has been updated successfully..</p>

        <a href="asmProfileV.php"><button type="submit">OK</button></a>
    </div>

    <?php
        require '../basic/footer.php';
    ?>

</main>