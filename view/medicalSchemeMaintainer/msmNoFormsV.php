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
                <div>
                    <h2></h2>
                </div>
                <div class="contentForm">
                    <div class="row">
                        <h2>Sorry! <br>
                            No Forms in the Database!
                        </h2>
                    </div>

                    <button class="subbtn">
                        <a href="msmHomeV.php?>">Ok</a>
                    </button>
                    <button class="cancelbtn">
                        <a href="msmHomeV.php">Cancel</a> 
                    </button>
                </div>
            </div>
        </div>
    </div>
</main>

<?php
    require '../basic/footer.php';
?>