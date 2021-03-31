<?php
    require '../basic/topnav.php';
?>

<main>
    <title>Updated Password</title>

    <div class="sansserif">
        <ul class="breadcrumbs">
            <li><a href="msmHomeV.php">Home</a></li>
            <li class="active">No data!</li>
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
                        <h2>Sorry! No medical year in the Database.</h2>
                    </div>

                    <form action="../../controller/msmControllers/msmManageMedicalYearC.php" method="post">
                        <button name="viweMYDetails-submit" type="submit" class="subbtn">
                            <a href="#">View Medical Years</a>
                        </button>
                        <button class="cancelbtn">
                            <a href="msmHomeV.php">Cancel</a> 
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