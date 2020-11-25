<?php
    require '../basic/topnav.php';
?>

<main>
    <div class="sansserif">
        <ul class="breadcrumbs">
            <li><a href="msmHomeV.php">Home</a></li>
            <li><a href="msmRemovePostV.php">Update Medical Scheme</a></li>
            <li class="active">Action Failed!</li>
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
                        <h2>Sorry! <br>
                            The Medical Year is not removed.
                        </h2>
                    </div>

                    <button class="subbtn">
                        <a href="msmRemovePostV.php">Try again</a> 
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