<?php
    require '../basic/topnav.php';
?>

<main>
    <title>No Claim Records</title>

    <div class="sansserif">
        <ul class="breadcrumbs">
            <li><a href="msmHomeV.php">Home</a></li>
            <li class="active">No Claim Records</li>
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
                        <h2>
                            No Claim Records Avaliable.
                        </h2>
                    </div>

                    <button class="subbtn" type="submit" name="">
                            <a href="../../controller/msmControllers/membClaimDetailsControllerOne.php">View Another</a>
                    </button>
                    <button class="cancelbtn" type="submit" name="">
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