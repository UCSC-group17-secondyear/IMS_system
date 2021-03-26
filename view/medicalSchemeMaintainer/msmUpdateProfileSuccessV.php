<?php
    require '../basic/topnav.php';
?>

<main>
    <title>Update Profile</title>

    <div class="sansserif">
        <ul class="breadcrumbs">
            <li><a href="msmHomeV.php">Home</a></li>
            <li>Update Profile</li>
        </ul>

        <div class="row">
            <div class="col left20">
                <?php
                    require 'msmSideNavV.php';
                ?>
            </div>

            <div class="col right80">
                <div class="contentForm">
                    <form>
                        <h3>Your profile has been updated successfully.</h3>

                        <a href="msmProfileV.php"><button class="mainbtn" type="submit">OK</button></a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</main>

<?php
    require '../basic/footer.php';
?>