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
            <li>Select Scheme</li>
        </ul>

        <div class="banner">
            <div>
                <h2>Medical Scheme Member</h2>
            </div>
        </div>
        <div class="content">
            <div>
                <h4>Select a Scheme</h4>
            </div>

            <label for="scheme">Select a Scheme</label>
            <select name="scheme" id="">
                <option value="">Select Scheme</option>
                <option value="scheme1">Scheme 1</option>
                <option value="scheme2">Scheme 2</option>
                <option value="scheme3">Scheme 3</option>
            </select>
            <br><br>

            <a href="memCurrentMemberDetailsV.php"><button type="submit" name="">OK</button></a><br>
        </div>
    </div>
</main>

<?php
    require_once('../include/footer.php');
?>