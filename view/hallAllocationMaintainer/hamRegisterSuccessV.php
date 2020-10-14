<main>
    <title>Redistration is successful</title>
    <?php
        require '../basic/header.php';
    ?>

    <div class="header">
        <!-- <ul class="breadcrumbs">
            <li><a href="hamHomeV.php">Home</a></li>
            <li>Redistration is successful</li>
        </ul> -->
    </div>

    <div class="side-nav">
        <?php
            require '../hallAllocationMaintainer/hamSideNavV.php';
        ?>
    </div>

    <div class="content">   
        <p>
            Your membership form has been sent for the approval. You will be inform about the membership later.
        </p> <br>
        <p>Thank you..</p>
        <a href="hamHomeV.php"><button type="submit" name="registerSuccess-submit">OK</button></a><br>
    </div>

    <?php
        require '../basic/footer.php';
    ?>
</main>