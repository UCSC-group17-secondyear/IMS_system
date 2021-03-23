<?php
    require '../basic/topnav.php';
?>

<main>
    <title>Update Success</title>

    <div class="sansserif">
        <ul class="breadcrumbs">
            <li><a href="msmHomeV.php">Home</a></li>
            <li><a href="../../controller/msmControllers/toBePaidFormController.php">To Be Paid Forms</a></li>
            <li class="active">Update Success</li>
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
                        <h2>Form has been updated successfully.</h2>

                        <button class="subbtn" type="submit" name="paid-submit" >
                            <a href="../../controller/msmControllers/toBePaidFormController.php">View Another</a>
                        </button>
                        <button class="cancelbtn" type="submit" name="">
                            <a href="msmHomeV.php">Exit</a>
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</main>

<?php
    require '../basic/footer.php';
?>