<?php
    require_once('../header.php');
    require_once('asmSideNavV.php');
?>

<main>
    <link rel="stylesheet" href="../assests/css/main.css">

    <div class="container">
        <!-- <div class="header">
            <img src="../img/ims.jpg" alt="ims" class="logo">
            <div class="options">
                <a href="asmHomeV.php">Home</a>
                <a href="asmProfileV.php">Profile</a>
                <a href="#">Logout</a>
            </div>
        </div> -->

<!--         <ul class="breadcrumb">
            <li><a href="asmHomeV.php">Home</a></li>
            <li>Registration Approval</li>
        </ul> -->

        <div class="content">
            <p>
                Your membership request has been sent for the approval. You will be inform about the approval later.
            </p> <br>
            <p>Thank you..</p>

            <a href="asmHomeV.php"><button type="submit" name="registerSuccess-submit">OK</button></a><br>
        </div>
    </div>
</main>

<?php
    require_once('../include/footer.php');
?>