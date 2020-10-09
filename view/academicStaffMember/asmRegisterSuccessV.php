<main>
    <title>Registration Success</title>
    <?php
        require '../basic/header.php';
    ?>

    <div class="header">
        <ul class="breadcrumbs">
            <li><a href="asmHomeV.php">Home</a></li>
            <li>Registration Approval</li>
        </ul>
    </div>

    <div class="side-nav">
        <?php
            require '../academicStaffMember/asmSideNavV.php';
        ?>
    </div>

    <div class="content">
        <p>Your membership request has been sent for the approval. You will be inform about the approval later.</p> <br>
        <p>Thank you..</p>

        <a href="asmHomeV.php"><button type="submit" name="registerSuccess-submit">OK</button></a><br>
    </div>

    <div class="right-side-bar">
        <a href="../../controller/viewProfileController.php?user_id=<?php echo $_SESSION['userId'] ?>"><button type="submit" name="" class="button">Profile</button></a>
    </div>

    <?php
        require '../basic/footer.php';
    ?>

</main>