<?php
    require '../basic/topnav.php';
?>

<main>
    <title>Add a designation</title>

    <div class="sansserif">
        <ul class="breadcrumbs">
            <li><a href="aHomeV.php">Home</a></li>
            <li class="active">Add a new Designation</li>
        </ul>

        <div class="row">
            <div class="column left">
                <?php
                    require 'aSideNavV.php';
                ?>
            </div>
            <div class="column middle">
                <h2>Log In As,</h2>
                <form action="" method="post">
                    <button class="mainbtn" type="submit" name="admin-submit">Admin</button> <br>
                    <button class="mainbtn" type="submit" name="am-submit">Attendance Maintainer</button> <br>
                    <button class="mainbtn" type="submit" name="msm-submit">Medical Scheme Maintainer</button> <br>
                    <button class="mainbtn" type="submit" name="mm-submit">Mahapola Scheme Maintainer</button> <br>
                    <button class="mainbtn" type="submit" name="ham-submit">Hall Allocation Maintainer</button> <br>
                    <button class="mainbtn" type="submit" name="rv-submit">Reports Viewer</button> <br>
                </form>
            </div>
            <div class="column right">
                <!-- <div class="card"> -->
                <div class="imgcontainer">
                    <img src="../assests/img/profile.png" alt="Avatar" style="width:100%">
                </div>
                <div class="btncontainer">
                    <a href="../../controller/viewProfileController.php?user_id=<?php echo $_SESSION['userId'] ?>"><button type="submit" name="" class="signupbtn">My Profile</button></a>
                </div>
            </div>
        </div>
    </div>
</main>

<?php
    require '../basic/footer.php';
?>