<?php
    require '../basic/topnav.php';
?>

<main>
    <title>Add a Designation</title>

    <div class="sansserif">
        <ul class="breadcrumbs">
            <li><a href="aHomeV.php">Home</a></li>
            <li><a href="aAddDesignationV.php">Add Designation</a></li>
            <li class="active">Action Failed!</li>
        </ul>

        <div class="row">
            <div class="col left20">
                <?php
                    require 'aSideNavV.php';
                ?>
            </div>

            <div class="col right80">
                <div>
                    <h2></h2>
                </div>
                <div class="contentForm">
                    <div class="row">
                        <h2>Sorry! <br>
                            The designation you entered did not get added.
                        </h2>
                    </div>

                    <button class="subbtn">
                        <a href="aAddDesignationV.php">Add Designation</a> 
                    </button>
                    <button class="cancelbtn">
                        <a href="aHomeV.php">Leave</a> 
                    </button>
                </div>
            </div>
        </div>
    </div>
</main>

<?php
    require '../basic/footer.php';
?>