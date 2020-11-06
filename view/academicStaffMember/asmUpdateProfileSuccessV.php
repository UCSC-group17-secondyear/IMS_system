<?php
    require '../basic/topnav.php';
?>

<main>
    <ul class="breadcrumbs">
        <li><a href="asmHomeV.php">Home</a></li>
        <li class="active">Success Massage</li>
    </ul>

    <div class="row">
        <div class="col left20">
            <?php
                require 'asmSideNavV.php';
            ?>
        </div>

        <div class="col right80">
            <div class="contentForm">
                <form>
                    <p>Your profile has been updated successfully..</p>

                    <a href="asmProfileV.php"><button class="mainbtn" type="submit">OK</button></a>
                </form>
            </div>
        </div>
    </div>
</main>