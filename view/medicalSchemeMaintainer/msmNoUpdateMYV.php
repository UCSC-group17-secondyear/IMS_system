<?php
    require '../basic/topnav.php';
?>

<main>

    <div class="sansserif">
        <ul class="breadcrumbs">
            <li><a href="msmHomeV.php">Home</a></li>
            <li class="active">Request Failed!</li>
        </ul>

        <div class="row">
            <div class="col left20">
                <?php
                    require 'msmSideNavV.php';
                ?>
            </div>

            <div class="col right80">
                <div>
                    <div>
                        <h2>Sorry! <br>
                            There are no Medical Years to update in the system right now.
                        </h2>
                    </div>

                    <form action="../../controller/msmControllers/msmmanageMedicalYearC.php" method="post">
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