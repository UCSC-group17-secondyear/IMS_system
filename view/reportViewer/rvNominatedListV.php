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
                <a href="rvHomeV.php">Home</a>
                <a href="rvProfileV.php">Profile</a>
                <a href="#">Logout</a>
            </div>
        </div> -->

        <div class="header">breadcrums</div>

        <div class="content">
            <div>
                <h4>Student List</h4>
            </div>
            <!-- pdf ekak generate kranna -->
            <a href="rvViewMahapolaNominatedListV.php"><button type="submit" name="">Back</button></a><br>
        </div>
    </div>
</main>

<?php
    require_once('../include/footer.php');
?>