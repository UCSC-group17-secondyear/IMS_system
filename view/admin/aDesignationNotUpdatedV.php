<?php
    require '../basic/topnav.php';
?>

<main>
    <title>Updated Designation</title>

    <div class="sansserif">
        <ul class="breadcrumbs">
            <li><a href="aHomeV.php">Home</a></li>
            <li><a href="aUpdateDesignationV.php">Update Designation</a></li>
            <li class="active">Action Failed!</li>
        </ul>

        <div class="row">
            <div class="col left20">
                <?php
                    require 'aSideNavV.php';
                ?>
            </div>

            <div class="col right80">
                <div class="contentForm">
                    <div class="row">
                        <h2>Sorry!
                            The Designation you entered did not get updated.
                        </h2>
                    </div>

                    <button class="subbtn">
                        <a href="aUpdateDesignationV.php">Try again</a> 
                    </button>
                    <button class="cancelbtn">
                        <a href="aHomeV.php">Exit</a> 
                    </button>
                </div>
            </div>
        </div>
    </div>
</main>

<?php
    require '../basic/footer.php';
?>