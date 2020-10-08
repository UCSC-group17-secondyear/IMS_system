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
        <div class="header">breadcrums</div>
        <div class="side-nav">


            <a href="memRenewMembershipV.php"><button type="submit" name="" class="button">Renew
                    Membership</button></a><br>
            <a href="memViewSchemeDetailsV.php"><button type="submit" name="" class="button">View Medical Scheme
                    Details</button></a><br>
            <a href="memFillClaimFormsV.php"><button type="submit" name="" class="button">Fill Claim
                    Forms</button></a><br>
            <a href="memUpdateClaimFormsV.php"><button type="submit" name="" class="button">Update Claim
                    Form</button></a><br>
            <a href="memViewClaimFormsV.php"><button type="submit" name="" class="button">View Claim
                    Forms</button></a><br>
            <a href="memGetClaimDetailsV.php"><button type="submit" name="" class="button">Get Claim
                    Detials</button></a><br>
        </div>

        <div class="banner">
            <div>
                <h2>Medical Scheme Member</h2>
            </div>
        </div>

        <div class="content">
            <div>
                <h4>Select Claim Form Type</h4>
            </div>
            <a href="memOpdFormV.php"><button type="submit" name="currentMemberDetail-submit">OPD Form</button></a><br>
            <a href="memSurgicalFormV.php"><button type="submit" name="currentMemberDetail-submit">Surgical
                    Hospitalization Form</button></a><br>
            <p>Download the form to be filled by the surgeon and get if field before you fill the surgical
                hospitalization form.</p>
        </div>
    </div>
</main>

<?php
    require_once('../include/footer.php');
?>