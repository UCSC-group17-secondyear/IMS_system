<?php
    require '../basic/topnav.php';
?>

<main>
    <title>No Data</title>

    <div class="sansserif">
        <ul class="breadcrumbs">
            <li><a href="asmHomeV.php">Home</a></li>
            <li><a href="../../controller/asmControllers/asmViewTimeTableController.php">View Weekly Time Table</a></li>
            <li class="active">Action Failed!</li>
        </ul>

        <div class="row">
            <div class="col left20">
                <?php
                    require 'asmSideNavV.php';
                ?>
            </div>

            <div class="col right80">
                <div class="contentForm">
                    <div class="row">
                        <h2>Sorry!
                            No data for your request..
                        </h2>
                    </div>

                    <button class="subbtn">
                        <a href="../../controller/asmControllers/asmViewTimeTableController.php">Try Again</a>
                    </button>
                    <button class="cancelbtn">
                        <a href="asmHomeV.php">Exit</a> 
                    </button>
                </div>
            </div>
        </div>
    </div>
</main>

<?php
    require '../basic/footer.php';
?>