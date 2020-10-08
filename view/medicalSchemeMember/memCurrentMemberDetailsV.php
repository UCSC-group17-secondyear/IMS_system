<?php
    require_once('../header.php');
    require_once('memSideNavV.php');
?>

<main>
    <link rel="stylesheet" href="../assests/css/main.css">

    <div class="container">
        <!-- <div class="header">
            <img src="../img/ims.jpg" alt="ims" class="logo">
            <div class="options">
                <a href="memHomeV.php">Home</a>
                <a href="memProfileV.php">Profile</a>
                <a href="#">Logout</a>
            </div>
        </div> -->

        <!-- breadcrumbs -->
        <ul class="breadcrumb">
            <li><a href="memHomeV.php">Home</a></li>
            <li><a href="memRenewMembershipV.php">Renew Membership</a></li>
            <li>Current Member Details</li>
        </ul>

        <div class="banner">
            <div>
                <h2>Medical Scheme Member</h2>
            </div>
        </div>
        <div class="content">
            <div>
                <h4>Current Member Details</h4>
            </div>

            <form action="" method="post">
                <label for="empName">Employee id</label>
                <input type="text" value=""> <br>
                <label for="empNumber">Initials of the Name</label>
                <input type="text" value=""> <br>
                <label for="designation">Email</label>
                <input type="text" value=""> <br>
                <!-- database eken details ganna one -->

            </form>

            <a href="memUpdateSuccessV.php"><button type="submit" name="currentMemberDetail-submit">Save
                    Updates</button></a><br>
        </div>
    </div>
</main>

<?php
    require_once('../include/footer.php');
?>