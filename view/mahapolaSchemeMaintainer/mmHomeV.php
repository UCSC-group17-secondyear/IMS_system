<?php
    require '../basic/topnav.php';
?>

<main>
    <title>Mahapola Scheme Maintainer Home Page</title>

    <div class="sansserif">
            <ul class="breadcrumbs">
                <li class="active">Mahapola Scheme Maintainer Page</li>
            </ul>

        <div class="row" style="margin-bottom: 5%;">
            <div class="column left">
                <?php 
                require('mmSideNavV.php');
                ?>
            </div>
            
            <div class="column middle">
                <h2>Mahapola Scheme Maintainer</h2>
            </div>

            <div class="column right">
                <div class="imgcontainer">
                    <img src="../assests/img/profile.png" alt="Avatar" style="width:100%">
                </div>
                <div class="btncontainer">
                    <a href="../../controller/basicControllers/viewProfileController.php?user_id=<?php echo $_SESSION['userId'] ?>"><button type="submit" name="" class="signupbtn">My Profile</button></a>                    
                </div>
            </div>
        </div>
    </div>
</main>

<?php
    require_once('../basic/footer.php');
?>