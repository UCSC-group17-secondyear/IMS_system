<main>
    <title>Register Successful</title>
    <?php
        require '../basic/header.php';
    ?>

    <div class="header">
        <ul class="breadcrumbs">
            <li><a href="msmHomeV.php">Home</a></li>
            <li>Register</li>
        </ul>
    </div>

    <div class="side-nav">
        <?php
            require 'msmSideNavV.php';
        ?>
    </div>

    <div class="content">
        <p>Your membership form has been sent for the approval. You will be inform about the membership later.</p> <br>
        <p>Thank you..</p>
        <a href="msmHomeV.php"><button type="submit" name="registerSuccess-submit">OK</button></a><br>
    </div>

    <?php
        require '../basic/footer.php';
    ?>

</main>