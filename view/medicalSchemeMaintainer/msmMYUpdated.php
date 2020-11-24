<?php
    require '../basic/topnav.php';
?>

<main>
    <div class="sansserif">
        <ul class="breadcrumbs">
            <li><a href="msmHomeV.php">Home</a></li>
            <li><a href="msmRemovePostV.php">Remove Medical Year</a></li>
            <li class="active">Action Completed!</li>
        </ul>

        <div class="row">
            <div class="col left20">
                <?php
                    require 'msmSideNavV.php';
                ?>
            </div>

            <div class="col right80">
                <div class="contentForm">
                    <div class="row">
                        <h2>The Medical Year is removed succcessfully.
                        </h2>
                    </div>

                    <button class="subbtn">
                        <a href="msmRemovePostV.php">Remove another post</a> 
                    </button>
                    <button class="cancelbtn">
                        <a href="msmHomeV.php">Exit</a> 
                    </button>
                </div>
            </div>
        </div>
    </div>
</main>

<?php
    require '../basic/footer.php';
?>